<?php

namespace App\Http\Controllers\Menu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class OrganizationalstructureController extends Controller
{
    public function ga()
    {
        return view('menu.organizationalstructure.ga');
    }

    public function sport()
    {
        return view('menu.organizationalstructure.sport');
    }

    public function scholarship()
    {
        return view('menu.organizationalstructure.scholarship');
    }

    public function developmentlife()
    {
        return view('menu.organizationalstructure.developmentlife');
    }

    public function inter()
    {
        return view('menu.organizationalstructure.inter');
    }

    public function dss()
    {
        return view('menu.organizationalstructure.dss');
    }

    public function eth()
    {
        return view('menu.organizationalstructure.eth');
    }



}
