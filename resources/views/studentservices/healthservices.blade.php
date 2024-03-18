@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Healthservices')  }}</h1>

            <ol class="breadcrumb">
               

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section style="margin: 1.5rem 0rem 2rem 0rem;" id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    {{-- <h3 style="text-align: center">{{  trans('message.Healthservices') }}</h3> --}}
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/eb0bd9f2-d10c-4571-8ecd-41f4004d7dc4.jpeg') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div style="margin-top: 1rem;" class="col-12 col-lg">
                        <p> 1. <b>สิทธิพิเศษการได้รับบริการจากสถานพยาบาลในสังกัดมหาวิทยาลัยเชียงใหม่</b>

                            ได้รับสิทธิในการย้ายหลักประกันสุขภาพถ้วนหน้า (บัตรทอง) มาสังกัดโรงพยาบาลมหาราชนครเชียงใหม่ได้ (โรงพยาบาลในสังกัดของมหาวิทยาลัยเชียงใหม่)  ซึ่งโดยปกติไม่เปิดรับการย้ายสิทธิให้ประชาชนทั่วไป เป็นสิทธิพิเศษเฉพาะนักศึกษาเท่านั้น และหากมีค่าใช้จ่ายเกินสิทธิจากสิทธิหลักมหาวิทยาลัยสนับสนุนค่ารักษาพยาบาลส่วนเกิน คนละ 20,000 บาทต่อปีการศึกษา </p>

                        <p> 2. <b>คลินิกพิเศษสำหรับนักศึกษา คลินิกศูนย์สุขภาพ มช. (ไผ่ล้อม)</b> ที่อยู่ภายใต้การดูแลจากโรงพยาบาลมหาราชนครเชียงใหม่ที่ให้บริการตรวจโรคทั่วไป โรคเฉพาะทาง การฉีดวัคซีน และการขอใบรับรองแพทย์  </p>

                        <p> 3. <b>ทันตแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</b> บางกรณีนักศึกษาสามารถรับบริการได้โดยไม่มีค่าใช้จ่าย </p>

                        <p> 4. <b>เจ็บป่วยเล็กน้อย 16 อาการ</b> รับยาได้ฟรี ณ ร้านยาพฤฒพลัง ที่ให้บริการโดยคณะเภสัชศาสตร์ มหาวิทยาลัยเชียงใหม่ และสิทธิได้รับส่วนลดค่ายาทุกร้านขายยาในสังกัดมหาวิทยาลัยเชียงใหม่ </p>

                        <p> 5. <b>ระบบให้บริการรักษาโรคโควิด-19 ผ่านทางโทรศัพท์</b> นักศึกษาไม่ต้องไปรอตรวจให้เสียเวลา เพียงรอรับการติดต่อจากบุคลากรทางการแพทย์และมารับยาที่จุดให้บริการ รวมถึงสามารถดาวน์โหลดเอกสารแจ้งการติดเชื้อเพื่อใช้ในการประกอบการลาเรียนได้โดยไม่มีค่าใช้จ่าย
                            ลิงก์ระบบให้บริการ <a href="https://covid.scmc.cmu.ac.th" target="_blank">https://covid.scmc.cmu.ac.th</a>
                        </p>



                        <p style="margin-top: 4rem;">สามารถสอบถามข้อมูลเกี่ยวกับการสร้างเสริมสุขภาวะที่ facbook page <a href="https://www.facebook.com/sddcmu" target="_blank">กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่ - Student Development Division of CMU</a> หรือที่ 053-943-047 </p>


                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
