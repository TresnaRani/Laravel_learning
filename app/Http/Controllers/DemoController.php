<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    function MyName($firstName,$middleName,$lastName){
        return "FirstName:".$firstName.
        "<br>MiddleName:".$middleName.
        "<br>LastName:".$lastName;

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
