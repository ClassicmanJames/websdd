@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.CMUmind')  }}</h1>

            <span>{{ trans('message.CMUmind')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.index') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">CMU Minds</h3>




                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <img src="{{ asset('upload/studentservices/5fb0498b-a2a2-4aa4-8386-25d457a4ff5a.jpeg') }}">
                        </div>
                    </div>

                </div>

            </div>





            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">


                        <p> 1. นัดหมายผ่าน Inbox เพจ CMU Minds </p>

                        <p>2. นัดหมายผ่านเบอร์โทรศัพท์ <p/>
                        <p style="margin-left: 40px">053-944988 (จันทร์ - เสาร์ 08.00 – 16.00 น.)
                        </p>
                        <p style="margin-left: 40px">097-9248000 (จันทร์ - ศุกร์ 12.00 – 20.00 น.)
                        </p>


                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
