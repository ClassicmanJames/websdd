<?php

namespace App\Http\Controllers\Menu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function contractUs()
    {
        return view('menu.contactUs.contact');
    }

}