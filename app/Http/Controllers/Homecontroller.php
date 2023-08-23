<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
   function Home(){
    return "I am from home";

   }

   function About(){
    return "I am from about";

   }

   function Contact(){
      return "I am from contact";

   }
}
