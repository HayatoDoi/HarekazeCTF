<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Scores;

class RankingController extends Controller
{
    public function index()
    {
        $ranking = Scores::ranking();
        return view('ranking.index')->with
        ([
            'ranking'=>$ranking,
        ]);
    }
}
