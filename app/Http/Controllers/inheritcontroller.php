<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inheritcontroller extends Controller
{
   public function __invoke(){
    return "I am a Action Controller";
   }
}
