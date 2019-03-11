<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenComment
{
    public function handle($request, Closure $next)
    {
        $forbiddenWords =[
            'hate',
            'stupid',
            'idiot',
           ];

        foreach($forbiddenWords as $word){
            if(strstr($request->content,$word)){
                session()->flash(
                    'message',
                    'This is really not apropriate language!Shame on you!!!'
                );
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
