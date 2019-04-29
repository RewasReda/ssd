<?php

namespace App\classes;

use Illuminate\Http\Request;
use App\classes\Managing;
use App\Game;

class ApprovedGames implements Managing
{
    public function games(){

        $games = Game::where('approve','=',1)->get();
        // return view('pages.approvegames')->with('games',$games);
                return view('pages.managegames')->with('games', $games);

    }

}
