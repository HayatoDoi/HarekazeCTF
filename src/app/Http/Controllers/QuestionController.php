<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Questions;
use Auth;
use Validator;

class QuestionController extends Controller
{
    //編集一覧
    public function index()
    {
        // 問題一覧の習得(作成者名付き)
        $questions = Questions::allAddAuthorname();
        // var_dump($questions);

        return view('master.editQuestionsList')->with
        ([
            'questions'=>$questions,
        ]);
    }

    //問題作成フォーム
    public function create()
    {
        return view('master.createQuestions');
    }

    //問題作成フォームからデータを受取データベースに格納
    public function store(Request $request)
    {
        if( $this->qVal($request->all()) === false )
        {
            echo "なんかバリデート処理エラー出た。(エラー処理書くのダルいから自分でなんとかして)";
            return;
            // return view('master.storeQuestions')->with
            // ([
            //     'qName'=>$request->qName,
            //     'qScore'=>$request->qScore,
            //     'qFlag'=>$request->qFlag,
            //     'qSentence'=>$request->qSentence,
            // ]);
        }

        $questions = new Questions;
        $questions->name = $request->qName;
        $questions->score = $request->qScore;
        $questions->flag = $request->qFlag;
        $questions->sentence = $request->qSentence;
        $questions->user_id = Auth::user()->id;
        $questions->save();
        
        return view('master.storeQuestions')->with
        ([
            'qName'=>$request->qName,
            'qScore'=>$request->qScore,
            'qFlag'=>$request->qFlag,
            'qSentence'=>$request->qSentence,
        ]);
    }

    //問題編集フォーム
    public function edit($id)
    {
        $question = Questions::questionAddAuthorname($id)[0];
        //権限チェック
        if( !(Auth::user()->id === $question->author_id || Auth::user()->type === 0))
        {
            echo "権限がありません";
            return;
        }
        return view('master.editQuestion')->with
        ([
            'qId'=>$question->id,
            'qName'=>$question->name,
            'qScore'=>$question->score,
            'qFlag'=>$question->flag,
            'qSentence'=>$question->sentence,
        ]);
    }

    //問題更新
    public function update($qId, Request $request)
    {
        //バリデートチェック
        if( $this->qVal($request->all()) === false )
        {
            echo "なんかバリデート処理エラー出た。(エラー処理書くのダルいから自分でなんとかして)";
            return;
        }
        //更新
        $question = Questions::find($qId);
        $question->name = $request->qName;
        $question->score = $request->qScore;
        $question->flag = $request->qFlag;
        $question->sentence = $request->qSentence;

        //権限チェック
        if( !(Auth::user()->id === $question->user_id || Auth::user()->type === 0))
        {
            echo "権限がありません";
            return;
        }

        $question->save();
        echo "更新しました。(かっちょいいページつくならいとね…。)";
        return;
    }

    //問題の削除
    public function destroy($qId)
    {
        //権限チェック
        $question = Questions::find($qId);
        if( !(Auth::user()->id === $question->user_id || Auth::user()->type === 0))
        {
            echo "権限がありません";
            return;
        }
        //Questions::destroy($qId);
        echo "削除しました。";
        return;
    }

    //問題用バリテーションちぇっく
    private function qVal($req)
    {
        //start バリデート処理
        $rules = [
            'qName'=>'required',
            'qScore'=>'required|integer',
            'qFlag'=>'required',
            'qSentence'=>'required',
        ];
        $validation = Validator::make($req,$rules);
        if($validation->fails())
        {
            return false;
        }
        else
        {
            return true;
        }
        //end バリデート処理
    }
}
