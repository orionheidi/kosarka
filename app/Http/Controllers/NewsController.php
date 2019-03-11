<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\Team;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->paginate(10);
        return view('news.index',compact('news'));
    }
    
    public function sideBar($id){
        $news = Team::find($id)->news()->paginate(10);
        return view('news.index',compact('news'));
    }

    public function show($id)
    {
        $user = auth()->user(); 
        $new = News::with('teams')->findOrFail($id);
        return view('news.show',compact('new'));
    }
}
