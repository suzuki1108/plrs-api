<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubRepository;

class MonthlyGithubRankController extends Controller
{
    public function index(int $month){
        return response()->json(GithubRepository::monthlyRank($month),200);
    }
}
