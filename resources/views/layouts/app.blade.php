<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="กองพัฒนานักศึกษา">
    <meta name="keywords" content="กองพัฒนานักศึกษา">
    <meta name="author" content="SDD">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <link rel="icon" type="image/ico" href="{{asset('upload/icon/favicon.ico')}}">
{{--   v--}}


<style>
    .menu-link
    {

        font-family: 'Prompt' !important;
        text-transform: capitalize !important;
    }
    .cosdd{
        color: #403f6d;
    }
</style>
<?php
$routeArray = app('request')->route()->getAction();

$controllerAction = class_basename($routeArray['controller']);
$sitemail = 'sdd@cmu.ac.th';
$sitephone = '0-5394-1360';
$sitefax= '0-5394-3070';

list($controller, $action) = explode('@', $controllerAction);
?>

    <title>{{ trans('message.Namesite')  }}</title>





    @include('panels.styles')

</head>


<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
{{--    <header id="header" class="full-header">--}}
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">



                        <div id="logo">
                            <a href="{{ url('/') }}" style="height: 70px; padding-top: 5px; !important;" class="standard-logo" data-dark-logo="{{ asset('upload/silder/c5003f9e-925f-44c7-9873-5e8e2410687c.png') }}"><img  src="{{ asset('upload/silder/SDD CMU 2.png') }}" alt="SDD Logo"></a>
                            <a href="{{ url('/') }}" style="height: 70px;  padding-top: 5px;  !important;" class="retina-logo" data-dark-logo="{{ asset('upload/silder/c5003f9e-925f-44c7-9873-5e8e2410687c.png') }}"><img  src="{{ asset('upload/silder/SDD CMU 2.png') }}" alt="SDD Logo"></a>


                        </div><!-- #logo end -->

                    <div class="header-misc">



                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                        </div>

                        <div class="dropdown mx-3 me-lg-0">





                            <a href="{{ URL::to('change/en') }}">EN</a> / <a href="{{ URL::to('change/th') }}">TH</a>





                        </div>

                    </div>



                    <!-- Primary Navigation
                    ============================================= -->
                    <?php


                    if($controller == 'HomeController' and $action == 'underconstrution')
                    {

                    }else{ ?>
                    @include('panels.navbar')
                 <?php   }
                    ?>



                </div>

            </div>
        </div>

        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->
            @yield('content')





{{--    <section id="slider" class="slider-element vh-100" style="background: url('images/slider/full/3.jpg') center center; background-size: cover;"></section>--}}

    <!-- Content
    ============================================= -->




    @include('panels.footer')




@include('panels.scripts')



