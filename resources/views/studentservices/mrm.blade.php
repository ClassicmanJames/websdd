@extends('layouts.app')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>{{ trans('message.mrm')  }}</h1>
        </div>
    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container">
                <div class="col-12 col-lg">
                    
                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            {{-- <img  src="{{ asset('upload/studentservices/01-1200x1368.jpg') }}"> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container">
                    <div class="col-12 col-lg">
                        <div style="margin: 1rem 0rem 1rem 0rem;">มหาวิทยาลัยเชียงใหม่ ให้บริการนักศึกษาในเรื่องที่เกี่ยวข้องกับนักศึกษาวิชาทหารในสังกัดมหาวิทยาลัยเชียงใหม่ และการผ่อนผันการตรวจเข้ารับการตรวจเลือกเข้าเป็นทหาร ฯลฯ เช่น</div>
                        <ol>
                            <li style="margin: 0rem 0rem 0.5rem 0rem;">การรับสมัคร / รับรายงานตัว โดยใช้ระบบสารสนเทศของด้านบัญชาการรักษาดินแดน กำกับดูแลการเข้าฝึกศึกษา เข้าฝึกภาคสนาม การนำปลดนักศึกษาวิชาทหารชั้นปี ที่ 3 ที่สำเร็จการศึกษา และประสานงานกับด้านงานในสังกัดกระทรวงกลาโหมด้านราชการทหาร</li>
                            <li style="margin: 0rem 0rem 0.5rem 0rem;">การขอผ่อนผันการตรวจเข้ารับการตรวจเลือกเข้าเป็นทหารกองประจำการ การขอผ่อนผันการเรียกระดมพล ต่างๆ การขอผ่อนผันเพื่อศึกษาต่อต่างประเทศของนักศึกษาที่ครบเกณฑ์ต้องเกณฑ์ทหาร</li>
                            <li style="margin: 0rem 0rem 0.5rem 0rem;">จัดกิจกรรมเพื่อขับเคลื่อนงานด้านประสานงานราชการทหาร นักศึกษาวิชาทหาร และจิตอาสา</li>

                        </ol>
                    </div>
                    <div style="margin-top:3rem" class="row">
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-1.jpg') }}">
                        </div>
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-2.jpg') }}">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-3.jpg') }}">
                        </div>
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-4.jpg') }}">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-5.jpg') }}">
                        </div>
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-6.jpg') }}">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-7.jpg') }}">
                        </div>
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-8.jpg') }}">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <img  src="{{ asset('upload/studentservices/mr-9.jpg') }}">
                        </div>
                    </div>  
                </div>
            </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
