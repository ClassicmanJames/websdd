<?php

namespace App\Http\Controllers\Menu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class StudentDevController extends Controller
{
    public function smartStu()
    {
        return view('menu.studentDevelopment.smartStu');
    }

}