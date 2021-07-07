<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubRepository;

class WeeklyGithubRankController extends Controller
{
    public function index(int $week){
        return response()->json(GithubRepository::weeklyRank($week),200);
    }
}
