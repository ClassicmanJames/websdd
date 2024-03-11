<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function maintenance()
    {

        return view('home.maintenance');
    }

    public function organizationalstructure()
    {

        return view('home.organizationalstructure');
    }


}
