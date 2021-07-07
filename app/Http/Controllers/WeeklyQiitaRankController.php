<?php

namespace App\Http\Controllers;

use App\Models\QiitaPosts;
use Illuminate\Http\Request;

class WeeklyQiitaRankController extends Controller
{
    public function index(int $week){
        return response()->json(QiitaPosts::weeklyRank($week), 200);
    }
}
