<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function showUser(){
    //     return 'Hi User';
    // }
    function __construct()
    {
        $this->middleware('auth');
    }

}
