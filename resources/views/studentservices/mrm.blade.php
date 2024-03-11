@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.mrm')  }}</h1>

            <span>{{ trans('message.mrm')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.index') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">{{  trans('message.mrm') }}</h3>




                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/01-1200x1368.jpg') }}">
                        </div>
                    </div>


                </div>

            </div>





            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">
                        <h4>จากการสำรองเงินจ่ายค่ารักษาพยาบาล (กรณีอุบัติเหตุ)</h4>
                        <p>หากเข้ารับการรักษาพยาบาลและได้สำรองจ่ายเงินให้กรอกข้อมูลที่เกี่ยวข้องใน QR CODE ของบริษัทประกัน พร้อมแนบไฟล์เอกสารประกอบการพิจารณา ดังนี้</p>


                        <p style="20px;">1. ใบเสร็จรับเงินฉบับจริง </p>
                        <p style="20px;">2. ใบรับรองแพทย์ฉบับจริง </p>
                        <p style="20px;">3. สำเนาบัตรประจำตัวประชาชน</p>
                        <p style="20px;">4. สำเนาบัตรประจำตัวนักศึกษา</p>
                        <p style="20px;">5. สำเนาหน้าบัญชีธนาคารของนักศึกษา (ธนาคารใดก็ได้)</p>
                        <p style="20px;">6. ถ่ายรูปภาพเอกสารทุกฉบับ แสกน QR CODE ส่งข้อมูลในระบบ</p>
                        <p style="20px;">7. รวบรวมเอกสารฉบับจริงทุกฉบับส่ง งานสร้างเสริมคุณธรรมและวินัยนักศึกษา กองพัฒนานักศึกษา</p>
                        <p style="20px;">8. ข้อมุลครบถ้วนบริษัทประกัน จะทำให้การโอนเงินคืนให้นักศึกษา</p>



                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
