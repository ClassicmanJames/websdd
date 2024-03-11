@extends('layouts.app')

@section('content')


    <style>
        .fbox-icon {
            margin-bottom: 0.5rem !important;
        }
    </style>

    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
{{--    <section id="slider" class="slider-element h-auto" style="background-color: #222;">--}}

        <div class="slider-inner">


{{--            <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">--}}


{{--                <a href="#"><img src="{{asset('upload/silder/covernew.jpg')}}" alt="Slider"></a>--}}


{{--            </div>--}}
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">

                        </div>
                        <div class="swiper-slide-bg cover"  style="background-image: url({{asset('upload/silder/coverV3.jpg')}});"></div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <section id="content">
        <div class="content-wrap" style="padding-bottom: 0px !important;">



            <div class="circle"></div>
            <div class="container clearfix">

                <div class="col-12 col-lg center">
                    <h3>{{ trans('message.Studentservices')  }}</h3>
                </div>
                <hr/>

                <div class="row col-mb-50">

<style>
    .circle
    {
        border-radius: 50px;
        height: 100px;
        width: 100px;



    }

    .circle:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.8);
    }

</style>
                    <div class="col-md-1-5">

                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/scholarship') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-2.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.Scholarships')  }}</h3>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/studentloan') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-3.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.studentloan')  }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/cmumind') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-4.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.CMUmind')  }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/healthservices') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-5.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.Healthservices')  }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/onestopservies') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-6.png') }}">
                                </a>
                            </div>


                            <div class="fbox-content">
                                <h3>{{ trans('message.Extracurricular')  }}</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row col-mb-50" style="padding-top: 20px;">
                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/cmujob') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-7.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.CMUjobsearch')  }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">

                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/accident') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-8.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.Accidentinsurance')  }}</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/serviceforstu') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-9.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.Ssd')  }}</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/sport') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-10.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.Sportareas')  }}</span></h3>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-1-5">
                        <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                            <div class="fbox-icon" style="width: 150px; height: auto;">
                                <a href="{{ url('/service/mrm') }}">
                                    <img class=" circle" src="{{ asset('upload/studentservices/Untitled-11.png') }}">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ trans('message.mrm')  }}</h3>
                            </div>
                        </div>
                    </div>

                </div>




            </div>


            <div class="section clearfix topmargin-lg " style="margin-bottom: 0px !important;">
                <div class="container clearfix">
                    <div class=" center">
                        <h3>พัฒนานักศึกษา ผ่านกิจกรรมนอกห้องเรียน</h3>

                    </div>
                <hr/>

                    <div class="col-mb-50">
                        <div class="row col-mb-50">
                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/service/scholarship') }}">
                                            <img src="{{ asset('upload/studev/Untitled-1.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/service/scholarship') }}">
                                            <img src="{{ asset('upload/studev/Untitled-2.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/Untitled-3.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/Untitled-4.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>


                    </div>

                        <div class="row mb-50">
                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/Untitled-5.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/Untitled-6.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/Untitled-7.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/studev/แก้ไข.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </div>



            <div class="section clearfix" style="margin: 0px 0 !important;padding-bottom: 0px !important;">
                        <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">


                            <a href="#"><img src="{{asset('upload/event/22.9.66 EVENT-1.jpg')}}" alt="Slider"></a>
                            <a href="#"><img src="{{asset('upload/event/22.9.66 EVENT-2.jpg')}}" alt="Slider"></a>


                        </div>
            </div>






            <div class="container topmargin-lg">
                <div class="container clearfix">
                    <div class="heading-block center">
                        <h3>{{ trans('message.Publicnews')  }}</h3>




                    </div>
                    <style>
                        .read-more-mask{
                            height: 80% !important;
                        }
                    </style>

                    <div class="tabs tabs-alt clearfix" id="tabs-profile">

                        <ul class="tab-nav clearfix">
                            <li><a href="#tab-pr"><i class="icon-rss2"></i> {{ trans('message.pnew') }}</a></li>
                            <li><a href="#tab-act"><i class="icon-rss2"></i> {{ trans('message.pchom') }}</a></li>
                            <li><a href="#tab-stu"><i class="icon-rss2"></i> {{ trans('message.pann') }}</a></li>
                            <li><a href="#tab-head"><i class="icon-rss2"></i> {{ trans('message.ppr') }}</a></li>
                            {{--                                        <li><a href="#tab-connections2" onclick="opentv();"><i class="icon-user-shield"></i> สายสมาชิกของฉัน</a></li>--}}
                        </ul>

                        <div class="tab-container">
                            {{--                                        <div class="tab-content clearfix" id="tab-connections2"></div>--}}

                            <div class="tab-content clearfix" id="tab-pr">
                                <div data-readmore="true" data-readmore-trigger-open="Read More <i class='icon-angle-down'></i>" data-readmore-trigger-close="Read Less <i class='icon-angle-up'></i>">
                                <ul class="" style="padding-left: 20px;">
                                    <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5 ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5</li></a>
                                    <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                    <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                </ul>
                                    <a href="#" class="btn btn-link text-primary read-more-trigger read-more-trigger-center"></a>

                                </div>



                            </div>
                            <div class="tab-content clearfix" id="tab-act">
                                <div data-readmore="true" data-readmore-trigger-open="Read More <i class='icon-angle-down'></i>" data-readmore-trigger-close="Read Less <i class='icon-angle-up'></i>">
                                    <ul class="" style="padding-left: 20px;">
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5 ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                    </ul>
                                    <a href="#" class="btn btn-link text-primary read-more-trigger read-more-trigger-center"></a>

                                </div>

                            </div>
                            <div class="tab-content clearfix" id="tab-stu">
                                <div data-readmore="true" data-readmore-trigger-open="Read More <i class='icon-angle-down'></i>" data-readmore-trigger-close="Read Less <i class='icon-angle-up'></i>">
                                    <ul class="" style="padding-left: 20px;">
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5 ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                    </ul>
                                    <a href="#" class="btn btn-link text-primary read-more-trigger read-more-trigger-center"></a>

                                </div>

                            </div>
                            <div class="tab-content clearfix" id="tab-head">
                                <div data-readmore="true" data-readmore-trigger-open="Read More <i class='icon-angle-down'></i>" data-readmore-trigger-close="Read Less <i class='icon-angle-up'></i>">
                                    <ul class="" style="padding-left: 20px;">
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5 ขอแสดงความยินดีกับนักศึกษาคณะอุตสาหกรรมเกษตร ได้รับรางวัลชนะเลิศประเภทผลิตภัณฑ์ส่วนผสมอาหารและเครื่องดื่ม Start-up Innovative F&B Products Competition ครั้งที่ 5</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                        <a href="{{ url('/maintenance') }}"><li class="list-group-item"><i class="icon-news"></i> ข่าวกิจกรรม</li></a>
                                    </ul>
                                    <a href="#" class="btn btn-link text-primary read-more-trigger read-more-trigger-center"></a>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="section topmargin-sm mb-0">

                <div class="container clearfix">

                    <div class=" center">
                        <h3>SUSTAINABLE DEVELOPMENT</h3>

                    </div>

                    <div class="row col-mb-50" style="margin-bottom: 20px;">
                        <div class="col-md-1-5">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/sdg/Untitled-1.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        <div class="col-md-1-5">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/sdg/Untitled-2.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        <div class="col-md-1-5">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/sdg/Untitled-3.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        <div class="col-md-1-5">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/sdg/Untitled-5.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        <div class="col-md-1-5">
                                <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                    <div class="" style="width: 200px; height: auto;">
                                        <a href="{{ url('/maintenance') }}">
                                            <img src="{{ asset('upload/sdg/Untitled-8.png') }}">
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    <div class="row col-mb-50 ">
                        <div class="col-md-1-5">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="" style="width: 200px; height: auto;">
                                    <a href="{{ url('/maintenance') }}">
                                        <img src="{{ asset('upload/sdg/Untitled-10.png') }}">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-1-5">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="" style="width: 200px; height: auto;">
                                    <a href="{{ url('/maintenance') }}">
                                        <img src="{{ asset('upload/sdg/Untitled-12.png') }}">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-1-5">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="" style="width: 200px; height: auto;">
                                    <a href="{{ url('/maintenance') }}">
                                        <img src="{{ asset('upload/sdg/Untitled-16.png') }}">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-1-5">
                            <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                                <div class="" style="width: 200px; height: auto;">
                                    <a href="{{ url('/maintenance') }}">
                                        <img src="{{ asset('upload/sdg/Untitled-17.png') }}">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-1-5">

                        </div>

                    </div>



                </div>

            </div>


            <div class="container clearfix">



                <div id="posts" class="post-grid row grid-container gutter-40 clearfix mt-5" data-layout="fitRows" >

                    <div class="entry col-md-6 col-sm-6 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=HyaY2kl6LgM">
                                        <img src="{{ asset('upload/img/27.9.66 หน้าปก แนะนำ VDO กองพัฒน์.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=HyaY2kl6LgM" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="entry col-md-6 col-sm-6 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">

                                </div>
                                <div class="portfolio-desc d-flex justify-content-center">

                                    <h3><a href="https://www.youtube.com/watch?v=HyaY2kl6LgM">{{ 'SDD CMU Introduction' }}</a></h3>

                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=HyaY2kl6LgM">
                                        <img src="{{ asset('upload/service/pride-600x338.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=HyaY2kl6LgM" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc ">

                                    <h3><a href="https://www.youtube.com/watch?v=HyaY2kl6LgM">{{ 'ฉันภูมิใจที่ได้ใส่ชุดนักศึกษาของมชI am a pride of CMU' }}</a></h3>

                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=85ySWDUnNUs">
                                        <img src="{{ asset('upload/service/smartCharacterCover-600x338.png') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=85ySWDUnNUs" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="https://www.youtube.com/watch?v=85ySWDUnNUs">{{ 'เป็น CMU SMART CHARACTER ในแบบของคุณ' }}</a></h3>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=4UWsrnT90IA&t">
                                        <img src="{{ asset('upload/service/smart-1-800x450.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=4UWsrnT90IA&t" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="https://www.youtube.com/watch?v=4UWsrnT90IA&t">{{ 'เป็น CMU SMART STUDENTS ในแบบของคุณ' }}</a></h3>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>




            <div class="container clearfix">



            </div>





        </div>
    </section><!-- #content end -->


@endsection
@section('page-scripts')

@endsection
