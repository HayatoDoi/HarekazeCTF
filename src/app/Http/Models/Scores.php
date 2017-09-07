<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
     protected $table = 'scores';
     public $timestamps = false;

}
