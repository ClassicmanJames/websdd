@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.CMUjobsearch') }}</h1>

            {{-- <span>{{ trans('message.CMUjobsearch')  }}</span> --}}
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">
                        <p><b>แพลตฟอร์มเชื่อมต่อนักศึกษาที่กำลังหางาน</b> (ทั้ง part-time และ full-time)
                            กับบริษัทที่กำลังมองหากำลังคนรุ่นใหม่ ที่สามารถตอบโจทย์งานในสาขาต่างๆได้ </p>


                        <p><b>โทรศัพท์</b> : 053-943042 </p>
                        <p><b>Facebook</b> : <a href="https://www.facebook.com/CMUJobSearch" target="_black">https://www.facebook.com/CMUJobSearc</p>



                    </div>
                </div>
            </div>
            {{-- <div class="container clearfix">
                <div class="col-12 col-lg">
                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/CMU-Job-search-600x599.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>เว็บไซต์</h4>
                    </div>
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="">
                                
                            </div>
                        </div>
                    </div>

                        
                </div>
            </div> --}}
        </div>
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <h4>เว็บไซต์</h4>
        </div>
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <a href="https://job.mis.cmu.ac.th/" target="_blank"><img width="550 px;"  src="{{ asset('upload/studentservices/ระบบจัดหางานมหาวิทยาลัยเชียงใหม่.png') }}"></a>          
        </div>


    </section><!-- #content end -->
@endsection
@section('page-scripts')
@endsection
