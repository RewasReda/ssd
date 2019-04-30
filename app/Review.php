<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed email
 */
class Review extends Model
{
    //
    public function Game()
    {
        return $this->belongsTo('App/Game');
    }
}
