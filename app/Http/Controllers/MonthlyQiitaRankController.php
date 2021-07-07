<?php

namespace App\Http\Controllers;

use App\Models\QiitaPosts;
use Illuminate\Http\Request;

class MonthlyQiitaRankController extends Controller
{
    public function index(int $month){
        return response()->json(QiitaPosts::monthlyRank($month), 200);
    }
}
