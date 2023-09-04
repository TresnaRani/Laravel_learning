<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    function MyName($firstName,$middleName,$lastName){
       return view('DemoView');

    }

    function Home(){
        return view('Home');

    }

    function About(){
        return view('About');
    }

    function Contact(){
        return view('Contact');
    }

}
