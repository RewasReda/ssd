<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function Game()
    {
        return $belongTo('App/Game');
    }
    
    
}
