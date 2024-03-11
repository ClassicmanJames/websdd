<?php

namespace App\Http\Controllers\Service;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;



class ServiceStudentController extends Controller
{
    public function scholarship()
    {
        return view('studentservices.scholarship');
    }

    public function studentloan()
    {
        return view('studentservices.studentloan');
    }

    public function cmumind()
    {
        return view('studentservices.cmumind');
    }

    public function healthservices()
    {
        return view('studentservices.healthservices');
    }

    public function onestopservies()
    {
        return view('studentservices.onestopservies');
    }

    public function cmujob()
    {
        return view('studentservices.cmujob');
    }

    public function accident()
    {
        return view('studentservices.accident');
    }

    public function serviceforstu()
    {
        return view('studentservices.serviceforstu');
    }

    public function sport()
    {
        return view('studentservices.sport');
    }

    public function mrm()
    {
        return view('studentservices.mrm');
    }

    public function underconstrution()
    {


        // print_r($action);


        return view('home.underconstrution');
    }


}
