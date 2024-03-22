@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Sportareas')  }}</h1>
        </div>

    </section><!-- #page-title end -->

    <section id="content">
        <style>
            .snam-img {
                width: 350px; 
                height: 220px;
                margin: 2rem;
            }
            .pin-map {
                height: 3.5rem
            }
            .snam {
                margin-left: 2rem;
            }
        </style>
        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container">
                <div style="padding-left: 2rem;">
                    
                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/sport-2.jpg') }}">
                        </div>
                    </div>
                    <h3>สถานที่กีฬา ในมหาวิทยาลัยเชียงใหม่</h3>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>1. สนามรักบี้ฟุตบอล(หน้ามอ) Rugby Football Field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-rugby-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : กรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่เปิดให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/ZSbeeqA9EXh32WxHA"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>2. สนามวอลเลย์บอล(กลางแจ้ง) Volleyball court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-volleyball-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 2 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 4,000.-บาท/วัน และ2,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/VPV97ndMiUVSQqnB8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>3. สนามเซปักตะกร้อ(กลางแจ้ง) Sepak Takraw field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-takraw-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 3 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการปกติ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 3,000.-บาท/วัน และ1,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/vsnMvkYG6d2EmvSL8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>4. สนามฟุตซอล (กลางแจ้ง)/สนามตะกร้อลอดห่วง Futsal field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-futsal-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 2 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 4,000.-บาท/วัน และ2,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/dy7TzBuwKLeYGDsc8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>5. สนามเทนนิส Tennis court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-tennis-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  จำนวน 4 สนาม เปิดให้บริการทุกวัน ทุกวันจันทร์-ศุกร์ ตั้งแต่เวลา 17.00 – 21.00 น. ทุกวันเสาร์ – อาทิตย์ และวันหยุดนักขัตฤกษ์ ตั้งแต่เวลา 13.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 6,000.-บาท/วัน และ3,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/VyUmiFPGsLkHYP4j7"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>6. สนามวอลเลย์บอลชายหาด Beach volleyball court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-beach-valleyball-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 4,000.-บาท/วัน และ 2,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://maps.app.goo.gl/xEMtpRqxYAtJL2K99"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>7. สนามเปตอง Petanque court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-petanque-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  จำนวน 40 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/CvwqYGxAK3oeru1f8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>8. สนามบาสเกตบอล(กลางแจ้ง) Basketball court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-beach-valleyball-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 4,000.-บาท/วัน และ 2,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/zs7mwNTUEpBBpsV16"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>7. สนามเปตอง Petanque court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-petanque-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  จำนวน 40 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/CvwqYGxAK3oeru1f8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>8. สนามบาสเกตบอล(กลางแจ้ง) Basketball court</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-basketball-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนามเปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 4,000.-บาท/วัน และ 2,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/zs7mwNTUEpBBpsV16"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>9. สระว่ายน้ำรุจิรวงศ์ Swimming pool</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-petanque-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  สระว่ายน้ำ 1 สระ สระกระโดด 1 สระเปิดให้บริการทุกวันพุธ – อาทิตย์ ช่วงเช้า เวลา 10.00 – 12.00 น. ช่วงบ่าย เวลา 13.00 – 18.00 น. ปิดให้บริการทุกวันจันทร์ – อังคาร และวันหยุดนักขัตฤกษ์<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ  กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการ ขอใช้สถานที่ และชำระบำรุงสถานที่กีฬา ในอัตรา 15,000.-บาท/วัน และ 7,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/JJTf5ySkD5A5kGmH6"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>10. สนามกีฬากลาง Main stadium</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-mainstadium-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : สนามฟุตบอล จำนวน 1 สนาม และลู่วิ่ง ระยะ 400 เมตร จำนวน 9 ลู่เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันฟุตบอล ต้องชำระค่าบำรุงสถานที่กีฬา ในอัตรา 12,000.-บาท/วัน และ6,000.-บาท/ครึ่งวัน  กรณีจัดการแข่งขันกรีฑา ต้องชำระค่าบำรุงสถานที่กีฬา ในอัตรา 10,000.-บาท/วัน และ 5,000.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/zs7mwNTUEpBBpsV16"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>11. อาคารพลศึกษา Gymnasium</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-gymnasium-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  สนามบาสเกตบอล 1 สนาม สนามวอยเลย์บอล 1 สนาม สนามแบดมินตัน 6 สนาม โต๊ะปิงปอง 4 โต๊ะ สนามยูโด 1 สนาม เวทีมวย 1 สนาม ห้องเอนกประสงค์ (ลีลาศ/โยคะ) 1 ห้อง<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ  กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการ ขอใช้สถานที่ และชำระบำรุงสถานที่กีฬา ในอัตรา 15,000.-บาท/วัน และ 7,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/rBXhajgVtWGERpzq6"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>12. สนามยิงธนู Archery field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-archery-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : - <br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://maps.app.goo.gl/z3iFoKVH9ssR2RxR8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>13. สนามหน้าหอพัก 40 ปี Outdoor stadium</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-outdoor-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  จำนวน 1 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :  ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/EAVs3zno7BmAzWHs8"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>14. สนามฮ้อกกี้ Hockey Field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-hockey-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://maps.app.goo.gl/2M16Qz64WV9kK2iz6"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>15. สนามฟุตบอล2 Foodball Field 2</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-football-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  จำนวน 1 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :   ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬาในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/HVqAj3Xc6HNmK9N67"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                        <div class="snam col-md-5">
                            <h4>16. สนามซอฟท์บอล Solfball Field</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-softball-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> : จำนวน 1 สนาม เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> : ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ กรณีจัดการแข่งขันหรือจัดกิจกรรม ให้ผู้ใช้บริการขอใช้สถานที่และชำระบำรุงสถานที่กีฬา ในอัตรา 5,000.-บาท/วัน และ 2,500.-บาท/ครึ่งวัน<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://goo.gl/maps/QE4BTWRX6GiKX7Pd7"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="snam col-md-5">
                            <h4>17. อาคารกีฬาและสุขภาพ</h4>
                            <img class="snam-img" src="{{ asset('upload/studentservices/sport-healthcenter-1.jpg') }}" />
                            <p>
                                <b>สนาม</b> :  ชั้น 1 สนามยิงปืน, ชั้น 2 ฟิตเนส กีฬาต่อสู้ และชั้น 3 สนามบาสเกตบอล ฟุตซอล เปิดให้บริการทุกวัน ตั้งแต่เวลา 05.00 – 21.00 น.<br/>
                                <b>การใช้งาน</b> :   ในกรณีออกกำลังเพื่อสุขภาพ สามารถใช้บริการได้ ตามช่วงเวลาที่ให้บริการ<br/>
                                <b>พิกัด GPS</b> : <a target="_blank" href="https://maps.app.goo.gl/3Dovjff8ALG3vYkr6"><img class="pin-map" src="{{ asset('upload/studentservices/mapIc.png') }}" /></a><br/>
                            </p>                     
                        </div>
                    </div>
                    <hr/>
                    <h3 style="margin: 3rem 0rem 1.5rem 0rem;">แนะนำเส้นทางสำหรับการวิ่งออกกำลังกาย รอบมหาวิทยาลัยเชียงใหม่</h3>
                    <div class="col-lg-12 d-flex justify-content-center mb-5">
                        <div class="">
                            <img  src="{{ asset('upload/studentservices/sport-run-1.jpg') }}">
                        </div>
                    </div>
                </div>

            </div>



    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
