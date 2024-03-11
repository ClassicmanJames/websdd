@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Sportareas')  }}</h1>

            <span>{{ trans('message.Sportareas')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.index') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">{{  trans('message.Sportareas') }}</h3>




                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ '' }}">
                        </div>
                    </div>


                </div>

            </div>





            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">
{{--                        <h4>จากการสำรองเงินจ่ายค่ารักษาพยาบาล (กรณีอุบัติเหตุ)</h4>--}}
{{--                        <p>หากเข้ารับการรักษาพยาบาลและได้สำรองจ่ายเงินให้กรอกข้อมูลที่เกี่ยวข้องใน QR CODE ของบริษัทประกัน พร้อมแนบไฟล์เอกสารประกอบการพิจารณา ดังนี้</p>--}}


{{--                        <p style="20px;">1. ใบเสร็จรับเงินฉบับจริง </p>--}}
{{--                        <p style="20px;">2. ใบรับรองแพทย์ฉบับจริง </p>--}}
{{--                        <p style="20px;">3. สำเนาบัตรประจำตัวประชาชน</p>--}}
{{--                        <p style="20px;">4. สำเนาบัตรประจำตัวนักศึกษา</p>--}}
{{--                        <p style="20px;">5. สำเนาหน้าบัญชีธนาคารของนักศึกษา (ธนาคารใดก็ได้)</p>--}}
{{--                        <p style="20px;">6. ถ่ายรูปภาพเอกสารทุกฉบับ แสกน QR CODE ส่งข้อมูลในระบบ</p>--}}
{{--                        <p style="20px;">7. รวบรวมเอกสารฉบับจริงทุกฉบับส่ง งานสร้างเสริมคุณธรรมและวินัยนักศึกษา กองพัฒนานักศึกษา</p>--}}
{{--                        <p style="20px;">8. ข้อมุลครบถ้วนบริษัทประกัน จะทำให้การโอนเงินคืนให้นักศึกษา</p>--}}


                        <p>1. สนามกีฬากลาง&nbsp;</p>

                        <p>- สนามฟุตบอล</p>

                        <p>- กรีฑา&nbsp;</p>

                        <p>2. อาคารพลศึกษา&nbsp;</p>

                        <p>- อาคารพลศึกษา 1 สนามวอลเลย์บอล บาสเกตบอล&nbsp;</p>

                        <p>-อาคารพลศึกษา 2 สนามแบดมินตัน ปิงปอง มวย&nbsp;</p>

                        <p>3. สนามรักบี้ฟุตบอล&nbsp;</p>

                        <p>4. สนามฟุตบอล 2&nbsp;</p>

                        <p>5. สนามซอฟท์บอล&nbsp;</p>

                        <p>6. สนามบาสเกตบอลกลางแจ้ง&nbsp;</p>

                        <p>7. สนามวอลเลย์บอลกลางแจ้ง วอลเลย์บอลชายหาด&nbsp;</p>

                        <p>8. สนามเทนนิส&nbsp;</p>

                        <p>9. สนามเปตอง&nbsp;</p>

                        <p>10. สนามเซปักตะกร้อ&nbsp;</p>

                        <p>11. สระว่ายน้ำรุจิรวงศ์&nbsp;</p>

                        <p>12. อาคารศูนย์กีฬาและสุขภาพ&nbsp;</p>

                        <p>ชั้น 1 สนามยิงปืน&nbsp;</p>

                        <p>ชั้น 2 ฟิตเนส กีฬาต่อสู้&nbsp;</p>

                        <p>ชั้น 3 สนามบาสเกตบอล ฟุตซอล&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>งานกีฬา กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่&nbsp;</p>

                        <p>โทรศัพท์ 053943063 053943059&nbsp;</p>

                        <p>FB งานกีฬา กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่&nbsp;</p>


                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
