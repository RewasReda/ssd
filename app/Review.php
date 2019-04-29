<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * @property mixed name
 * @property mixed email
 */
=======
>>>>>>> 4e49f11704d4a5de840cd89843e6a269331fbc79
class Review extends Model
{
    //
    public function Game()
    {
<<<<<<< HEAD
        return $this->belongsTo('App/Game');
    }
=======
        return $belongTo('App/Game');
    }
    
    
>>>>>>> 4e49f11704d4a5de840cd89843e6a269331fbc79
}
