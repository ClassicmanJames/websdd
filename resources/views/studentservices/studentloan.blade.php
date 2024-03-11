@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Scholarships')  }}</h1>

            <span>{{ trans('message.Scholarships')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.hindex') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">ทุนส่วนกลางมหาวิทยาลัยเชียงใหม่</h3>
                </div>

                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <img src="{{ asset('upload/studentservices/Picture1กยศ.jpg') }}">
                    </div>
                </div>
            </div>


        </div>





        <?php   if(session('locale') == 'en') {?>



        <?php }else{ ?>



        <?php }?>

    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
