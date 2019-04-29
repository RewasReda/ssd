<?php

namespace App\classes;

use Illuminate\Http\Request;
use App\classes\AdminCreate;
use App\classes\DevCreate;



class CreateFacade
{
   public function gettype($usertype){
      if($usertype == null){
         return null;
      }		
      if($usertype == "admin"){
         return new AdminCreate();
         
      } else if($usertype == "developer"){
         return new DevCreate();
         
      } else 
          return redirect('/games')->with('error', 'Unauthorized Page');

      
   }

   
}
