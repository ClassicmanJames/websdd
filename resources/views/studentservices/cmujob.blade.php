@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.CMUjobsearch')  }}</h1>

            <span>{{ trans('message.CMUjobsearch')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.index') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">{{  trans('message.CMUjobsearch') }}</h3>




                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/CMU-Job-search-600x599.jpg') }}">
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="">
                            <a href="https://job.mis.cmu.ac.th/" target="_blank"><img width="550 px;"  src="{{ asset('upload/studentservices/ระบบจัดหางานมหาวิทยาลัยเชียงใหม่.png') }}"></a>
                        </div>
                    </div>

                </div>

            </div>





            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">
                        <h4>บริการจัดหางานพิเศษเพื่อหารายได้ระหว่างเรียนและการส่งเสริมการมีงานทำเมื่อสำเร็จการศึกษา</h4>


                        <p>โทรศัพท์ : 053-943042 </p>
                        <p>เว็บไซต์ : https://job.mis.cmu.ac.th/ </p>

                        <p> เว็บไซต์ : https://job.mis.cmu.ac.th/</p>



                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
