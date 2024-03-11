<?php

namespace App\Http\Controllers\Menu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class DepartmentController extends Controller
{
    public function ga()
    {
        return view('menu.dapartment.ga');
    }

    public function sport()
    {
        return view('menu.dapartment.sport');
    }

    public function scholarship()
    {
        return view('menu.dapartment.scholarship');
    }

    public function developmentlife()
    {
        return view('menu.dapartment.developmentlife');
    }

    public function inter()
    {
        return view('menu.dapartment.inter');
    }

    public function dss()
    {
        return view('menu.dapartment.dss');
    }

    public function eth()
    {
        return view('menu.dapartment.eth');
    }

}