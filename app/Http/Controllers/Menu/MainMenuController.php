<?php

namespace App\Http\Controllers\Menu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class MainMenuController extends Controller
{
    public function history()
    {
        return view('menu.mainmenu.history');
    }
    public function missionversion()
    {
        return view('menu.mainmenu.missionversion');
    }

    public function structure()
    {
        return view('menu.mainmenu.structure');
    }
}