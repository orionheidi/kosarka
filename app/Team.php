<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

     public function news(){
        return $this->belongsToMany(News::class,'team_news', 'team_id', 'news_id');
    }
}
