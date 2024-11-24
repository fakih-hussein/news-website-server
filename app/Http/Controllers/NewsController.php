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

        return response()->json([
            "posted-news"=>$news
        ]);
    }

    function edit_news($id,Request $request){
        $news = News::find($id)->update([
            "title"=>$request->title,
            "content"=>$request->content,
            "is_restricted"=>$request->is_restricted,
        ]);

        return response()->json([
            "updated-news"=>$news
        ]);
    }

    function delete_news($id){
        $news=News::find($id)->delete();

        return response()->json([
        "deleted-news"=>$news
        ]);
        }
    }

    
