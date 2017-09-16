<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Questions extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
     protected $table = 'questions';
     public $timestamps = false;
     

     public static function allAddAuthorname()
     {
        $questions = DB::table('questions')
        ->select('questions.id as id', 'questions.name as name',
            'questions.flag as flag', 'questions.score as score',
            'questions.sentence as sentence',
            'users.name as author_name', 'users.id as author_id')
        ->leftJoin('users', 'questions.user_id', '=','users.id')
        ->get();
        return $questions;
     }
     public static function questionAddAuthorname($qId)
     {
        $questions = DB::table('questions')
        ->select('questions.id as id', 'questions.name as name',
            'questions.flag as flag', 'questions.score as score',
            'questions.sentence as sentence',
            'users.name as author_name', 'users.id as author_id')
        ->leftJoin('users', 'questions.user_id', '=','users.id')
        ->where('questions.id', '=', $qId)
        ->get();
        return $questions;
     }
     public static function isAnswered($uId, $qId)
     {
        $r = DB::table('scores')
        ->select('*')
        ->leftJoin('questions', 'scores.question_id', '=','questions.id')
        ->whereRaw('scores.flag = questions.flag')
        ->whereRaw('scores.user_id = ' . $uId)
        ->whereRaw('scores.question_id = ' . $qId)
        ->get();
        return ( count($r) === 0 ) ? false : true;
     }
}
