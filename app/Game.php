<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    // Table Name
    protected $table = 'games';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    // public function review(){
    //     return $this->belongsTo('App\User');
    // }

    public static function getGameByGameId( $gameId ){
        return Game::where('id', $gameId)->get();

    }
}
