<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Teams;

class TeamNewsController extends Controller
{
    public function index(News $news)
    {
        $teams = $news->teams()->paginate(10);
        return view('teams.index',compact('teams'));
    }
}
