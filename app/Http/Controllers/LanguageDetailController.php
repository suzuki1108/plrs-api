<?php

namespace App\Http\Controllers;

use App\Models\LanguageDetail;
use Illuminate\Http\Request;

class LanguageDetailController extends Controller
{
    // 言語詳細取得API
    public function index(int $languageId){
        return response()->json(LanguageDetail::findByLanguageId($languageId), 200);
    }
}
