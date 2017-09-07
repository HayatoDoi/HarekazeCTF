<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Scores extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
     protected $table = 'scores';
     public $timestamps = false;

     public static function ranking()
     {
        $r = DB::table('scores')
        ->select(DB::raw('users.name as name, sum(questions.score) as score'))
        ->leftJoin('questions', 'scores.question_id', '=','questions.id')
        ->whereRaw('scores.flag = questions.flag')
        ->leftJoin('users', 'scores.user_id', '=','users.id')
        ->groupBy('name')
        ->orderBy('score', 'DESC')
        ->get();
        return $r;
     }
}
