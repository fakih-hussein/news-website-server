<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\News;

class NewsController extends Controller{
    function post_news(Request $request){
        $news = News::create([
            "title"=>$request->title,
            "content"=>$request->content,
            "is_restricted"=>$request->is_restricted,

        ]);
    }
}
