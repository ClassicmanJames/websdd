@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Accidentinsurance') }}</h1>


        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <style>
            .text-detail {
                font-size: 1.3rem;
                text-align: center;
            }

            .text-cover {
                margin: 4rem;
            }
        </style>
        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">

                    {{-- <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/01-1200x1368.jpg') }}">
                        </div>
                    </div> --}}
                </div>
            </div>


            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container">
                    <div class="row justify-content-center">
                        {{-- <h4>จากการสำรองเงินจ่ายค่ารักษาพยาบาล (กรณีอุบัติเหตุ)</h4> --}}
                        <div class="text-cover col-md-4 col-sm-6">
                            <p class="text-detail">
                                มหาวิทยาลัยเชียงใหม่ มีความเป็นห่วงในสวัสดิภาพและความปลอดภัยของนักศึกษา
                                จึงจัดให้มีการทำประกันภัยอุบัติเหตุแก่นักศึกษาทุกคน
                                ซึ่งถือเป็นสวัสดิการที่เป็นหลักประกันเพื่อพัฒนาคุณภาพชีวิตของนักศึกษา
                                โดยจะได้รับความคุ้มครองจากอุบัติเหตุตลอดระยะเวลาที่ยังคงมีสถานภาพนักศึกษา
                            </p>

                        </div>
                        <div class="col-md-6 col-sm-4">
                            <img src="{{ asset('upload/studentservices/accid-2.jpg') }}" />
                        </div>
                    </div>
                    <div style="margin: 4rem;" class="row justify-content-center">
                        <div class="col-md-6 col-sm-4">
                            <img src="{{ asset('upload/studentservices/accid-3.jpg') }}" />
                        </div>
                        <div class="text-cover col-md-4 col-sm-6">
                            <p class="text-detail">
                                นักศึกษา จะได้รับความคุ้มครองจากอุบัติเหตุตลอดระยะเวลาที่ยังคงมีสถานภาพนักศึกษา
                                ปัจจุบันนักศึกษาจะได้รับความคุ้มครองจากประกันภัยอุบัติเหตุเป็นทุนประกันภัยวงเงิน 200,000 บาท
                                และค่ารักษาพยาบาลตามจริงภายในวงเงิน 10,000 บาทต่ออุบัติเหตุต่อคน
                                กรณีบาดเจ็บจากอุบัติเหตุสามารถเข้ารับการรักษาได้ที่สถานพยาบาลทั้งของรัฐและเอกชน
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        {{-- <h4>จากการสำรองเงินจ่ายค่ารักษาพยาบาล (กรณีอุบัติเหตุ)</h4> --}}
                        <div class="text-cover col-md-5 col-sm-6">
                            <p class="text-detail">
                                กรณีที่นักศึกษาประสบอุบัติเหตุ และจำเป็นต้องเข้ารับการรักษาในโรงพยาบาลนอกเครือข่าย
                                หรือเขัารับการรักษาฉุกเฉินโดยไม่มีหลักฐานแสดงตน (บัตรประจำตัวประขาขน หรือบัตรนักศึกษา) 
                                นักศึกษาต้องสำรองเงินจ่านค่ารักษาพยาบาล
                                และให้กรอกข้อมูลข้อมูลที่เกี่ยวข้องพร้อมแนบเอกสารประกอบการพิจารณา
                            </p>

                            <h3>รายการความคุ้มครองและอักตราเบิกจ่ายค่ารักษาพยาบาล</h3>
                            <p>
                                <h4>ความคุ้มครอง</h4>
                                1. คุ้มครองค่ารักษาพยาบาล ไม่เกิน 10,000 บาท/กรณี<br/>
                                2. ชดเชยเสียชีวิตจากอุบัติเหตุ<br/>
                                3. ชดเชยเสียชีวิตจากสาเหตุอื่นๆ นอกเหนือจากอุบัติเหตุ
                            </p>
                            <h4 style="margin: 2rem 1rem 0.5rem 0rem;">อุบัติเหตุที่นักศึกษามช. สามารถเบิกเงินคืนได้ </h4>
                            <p>
                                1. อุบัติเหตุทั่วไป เช่น หกล้ม ไฟไหม้ น้ำร้อนลวก ถูกสัตว์/แมลง กัด ต่อย หรืออุบัติเหตุจากกีฬา<br/>
                                <span style="margin-left: 1.5rem; ">
                                    - เบิกได้ไม่เกิน 10,000 บาท/กรณี 
                                </span>
                            </p>
                            <p>
                                2. อุบัติเหตุจากรถจักรยานยนต์ หรือรถยนต์<br/>
                                <span style="margin-left: 1.5rem;">
                                    - มีเงื่อนไขว่า จะต้องเบิกประกันจาก พรบ.ก่อน (พรบ.คุ้มครองทั้งผู้ขับขี่และผู้ร่วมเดินทาง) โดยสามารถเบิกได้ไม่เกิน 30,000 บาท/คน<br/>
                                </span>
                                <span style="margin-left: 1.5rem;">
                                    - หากไม่มี พรบ. สามารถเบิกได้จากสวัสดิการกรณีนักศึกษาประสบอุบัติเหตุ ไม่เกิน 10,000 บาท/กรณี
                                </span>
                            </p>
                            <p>
                                3. โรงพยาบาลที่อยู่ภายใต้การกำกับดูแลของมหาวิทยาลัย เป็นหน่วยงานที่บริการแก่นักศึกษา โดยนักศึกษาสามารถเข้าทำการรักษาได้โดยไม่ต้องสำรองจ่ายเงิน<br/>
                                <span style="margin-left: 1.5rem;">
                                    โรงพยาบาลมหาราชนครเชียงใหม่ (รพ.สวนดอก)<br/>
                                </span>
                                <span style="margin-left: 1.5rem;">
                                    ศูนย์สุขภาพมหาวิทยาลัยเชียงใหม่ (คลินิกไผ่ล้อม) <br/>
                                </span>
                                <span style="margin-left: 1.5rem;">
                                    สิ่งที่ต้องเตรียมหากเข้ารับการรักษาฯ ตามสถานพยาบาลที่อยู่ภายใต้การกำกับดูแลของมหาวิทยาลัยได้แก่ บัตรประชาชน หรือบัตรประจำตัวนักศึกษา 
                                </span>
                            </p>
                                4. กรณีเข้ารับการรักษา ในโรงพยาบาลนอกเหนือจาก โรงพยาบาลมหาราชนครเชียงใหม่ (รพ.สวนดอก) หรือศูนย์สุขภาพมหาวิทยาลัยเชียงใหม่ (คลินิกไผ่ล้อม) หรือเมื่อเข้ารับการรักษาฉุกเฉินไม่มีหลักฐานแสดงตน ให้สำรองจ่าย และดำเนินการ ดังนี้<br/>
                                <div style="margin: 5px 0px 0px 1.5rem">
                                    4.1 เตรียมเอกสารเพื่อเบิกค่ารักษาฯ ประกอบด้วย<br/>
                                    <div style="margin: 0.25rem 0rem 0.5rem 1rem;">
                                        1) ใบเสร็จรับเงินฉบับจริง<br/>
                                        2) ใบรับรองแพทย์ฉบับจริง<br/>
                                        3) สำเนาบัตรประจำตัวประชาชน<br/>
                                        4) สำเนาหน้าบัญชีธนาคาร (ธนาคารใดก็ได้)<br/>
                                    </div>
                                    <div style="margin: 0.25rem 0rem 0.25rem 0rem;">
                                        4.2 ถ่ายภาพหรือสแกน เอกสารทุกฉบับเพื่อนำส่งไฟล์ทาง QR Code เพื่อให้บริษัทประกันพิจารณา</br>
                                    </div>
                                    <div style="margin: 0.25rem 0rem 0.25rem 0rem;">
                                        4.3 รวบรวมเอกสารฉบับจริงทุกฉบับนำส่งที่ "งานสร้างเสริมคุณธรรมและวินัยนักศึกษา ชั้น 3 อาคารกองพัฒนานักศึกษา" หรือ "ตี้เดียวฮู้เรื่อง SD One Stop Service ณ สระว่ายน้ำรุจิรวงศ์"<br/>
                                    </div>
                                    <div style="margin: 0.25rem 0rem 0.25rem 0rem;">
                                        4.4 เมื่อดำเนินการครบถ้วน บริษัทจะการโอนเงินให้แก่นักศึกษาภายใน 3 - 5 วันทำการ
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                            
                            

                        </div>
                        <div class="col-md-5 col-sm-4">
                            <img style="margin-bottom: 2rem;" src="{{ asset('upload/studentservices/accid-1.jpg') }}" />
                            <img src="{{ asset('upload/studentservices/accid-4.jpg') }}" />
                        </div>
                    </div>
                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')
@endsection
