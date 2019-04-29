<?php

namespace App\classes;

use Illuminate\Http\Request;
use App\classes\Managing;
use App\Game;

class NotApprovedGames implements Managing
{
    public function games(){

        $games = Game::where('approve','=',0)->get();
        return view('pages.approvegames')->with('games',$games);
    }

}
