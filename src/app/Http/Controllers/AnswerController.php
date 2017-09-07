<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Questions;

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
}
