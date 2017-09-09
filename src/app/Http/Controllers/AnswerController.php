<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Questions;
use App\Http\Models\Scores;
use Auth;

class AnswerController extends Controller
{
    public function index()
    {
        // 問題一覧の習得(作成者名付き)
        $questions = Questions::allAddAuthorname();
        return view('answer.index')->with
        ([
            'questions'=>$questions,
        ]);
    }
    public function showAnswerForm($qId)
    {
        $isAnswered = Questions::isAnswered(Auth::user()->id, $qId);
        $question = Questions::find($qId);
        // var_dump($question);
        return view('answer.answerForm')->with
        ([
            'isAnswered'=>$isAnswered,
            'question'=>$question,
        ]);
    }
    
    public function answer($qId, Request $request)
    {
        $question = Questions::find($qId);
        $isCorrect = false;
        if( $question->flag === $request->aFlag )
        {
            $isCorrect = true;
        }

        $score = new Scores;
        $score->user_id = Auth::user()->id;
        $score->question_id = $qId;
        $score->flag = $request->aFlag;
        $score->save();

        return view('answer.answerForm')->with
        ([
            'question'=>$question,
            'isCorrect'=>$isCorrect,
        ]);

    }
}
