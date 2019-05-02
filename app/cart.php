<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class cart extends Model
{
    //
    protected $guarded =[];
    public static function setInCartByUserId($userId, $game_id){
        cart::create([
            'user_id'=>$userId,
            'game_id'=>$game_id
        ]);
    }
}
