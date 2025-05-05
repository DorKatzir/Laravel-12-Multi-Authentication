<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view('home');
    }

    function about()
    {
        return view('about');
    }

    function contact()
    {
        return view('contact');
    }

    function register()
    {
        return view('register');
    }

    function login()
    {
        return view('login');
    }

}
