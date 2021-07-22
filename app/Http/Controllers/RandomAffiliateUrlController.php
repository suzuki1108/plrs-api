<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use Illuminate\Http\Request;

class RandomAffiliateUrlController extends Controller
{
    public function index(){
        return response()->json(Affiliate::getRandomAffiliateURL(),200);
    }
}
