<?php

namespace App\classes;

use Illuminate\Http\Request;
use App\classes\Creation;

class AdminCreate implements Creation
{
    public function addgame(){
        if(auth()->user()->type !=='admin'){
            return redirect('/games')->with('error', 'Unauthorized Page');
        }
        else{
            return view('games.create');
        }
        
    }

}
