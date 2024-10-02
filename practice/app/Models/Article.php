<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getList() {
        // articlesテーブルからデータを取得
        $articles = DB::table('articles')->get();

        return $articles;
    }
}
