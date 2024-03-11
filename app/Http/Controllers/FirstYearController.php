<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FirstYearController extends Controller
{
    public function index()
    {
        return view('firstyear.index');
    }

    public function underconstrution()
    {


        // print_r($action);


        return view('home.underconstrution');
    }


}
