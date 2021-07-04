<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Github_repository extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
