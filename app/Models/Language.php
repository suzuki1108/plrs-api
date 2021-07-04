<?php

namespace App\Models;

use App\Models\Affiliate;
use App\Models\Qiita_posts;
use App\Models\Github_repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    public function affiliates(){
        return $this->hasMany(Affiliate::class);
    }

    public function github_repositories(){
        return $this->hasMany(Github_repository::class);
    }

    public function qiita_posts(){
        return $this->hasMany(Qiita_posts::class);
    }
}
