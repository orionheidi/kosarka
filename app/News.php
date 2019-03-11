<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    
    public function teams(){
        return $this->belongsToMany(Team::class, 'team_news', 'news_id', 'team_id');
    }
}
