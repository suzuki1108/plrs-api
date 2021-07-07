<?php

namespace App\Http\Controllers;

use App\Models\GithubRepository;
use Illuminate\Http\Request;

class DailyGithubRankController extends Controller
{
    public function index(int $days){
        return response()->json(GithubRepository::dailyRank($days),200);
    }
}
