<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\User;
use App\Http\Requests\CommentsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }
    public function store(CommentsRequest $request,$teamId)
    {
        $team = Team::findOrFail($teamId);
    
        $comment = Comment::create([
            'content' => $request->content,
            'team_id' => $team->id,
            'user_id'=> auth()->user()->id
        ]);

        if ($comment->team) {
            \Mail::to($comment->team)->send(new CommentReceived(
                $team, $comment
            ));
        }
        return redirect(route('teams-show', [ 'id' => $teamId ]));

    }
}
