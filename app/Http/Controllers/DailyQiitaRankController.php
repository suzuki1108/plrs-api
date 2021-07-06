<?php

namespace App\Http\Controllers;

use App\Models\QiitaPosts;
use Illuminate\Http\Request;

class DailyQiitaRankController extends Controller
{
    public function index(int $days){
        return response()->json(QiitaPosts::dailyRank($days),200);
    }
}
