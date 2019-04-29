<?php

namespace App\classes;

use Illuminate\Http\Request;
use App\classes\ApprovedGames;
use App\classes\NotApprovedGames;



class GamesFactory
{
   public function gettype($flag){
		
      if($flag == 1){
         return new ApprovedGames();
         
      } else if($flag == 0){
         return new NotApprovedGames();
         
      } else 
          return redirect('/games')->with('error', 'Unauthorized Page');

      
   }

   
}
