@extends('layouts.app')

@section('content')
    <section id="content">

        <div class="content-wrap"
            style="padding-bottom: 20px !important;padding-top: 20px;!important; background-color: #f1f2f2">
            <div class="container clearfix" style="">
                <div class="col-12 col-lg">
                </div>

                <div class="col-12 col-lg " style="padding-top: 20px;">
                    <div class="fancy-title title-border title-center" style="margin-bottom: 0rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">
                            งานบริการสนับสนุนนักศึกษาพิการ
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem;">
                        <h3 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">ส่วนที่ 1 โครงสร้างสายงาน
                        </h3>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-1.png') }}" alt="dss-1">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-2.png') }}" alt="dss-2">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-3.png') }}" alt="dss-3">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-4.png') }}" alt="dss-4">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-5.png') }}" alt="dss-5">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>งานบริการสนับสนุนนักศึกษาพิการ Disability Support and Services</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>บริการทั่วไปสำหรับนักศึกษาพิการ</li>
                                <li>บริการและพัฒนาผู้บกพร่องทางการเห็น</li>
                                <li>บริการและพัฒนาผู้บกพร่องทางการได้ยิน</li>
                                <li>บริการและพัฒนาผู้บกพร่องทางร่างกายหรือการเคลื่อนไหวหรือสุขภาพ</li>
                                <li>บริการและพัฒนาผู้บกพร่องทางการเรียนรู้และออทิสติก และกลุ่มอื่นๆ</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem;">
                        <h3 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">ส่วนที่ 2
                            หน้าที่และความรับผิดชอบ</h3>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-1.png') }}" alt="dss-1">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>สิ่งอำนวยความสะดวก สื่อ เทคโนโลยี บริการและความช่วยเหลืออื่นใดทางการศึกษาสำหรับนักศึกษาพิการที่เรียนร่วม
                                ในมหาวิทยาลัยเชียงใหม่</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>สนับสนุนเงินอุดหนุนการศึกษาสำหรับผู้พิการ (ไม่ต้องจ่ายค่าธรรมเนียมการศึกษาตลอดหลักสูตร)</li>
                                <li>บริการสอนเสริม</li>
                                <li>บริการให้ยืมคอมพิวเตอร์พกพา</li>
                                <li>บริการให้ยืมเครื่องบันทึกเสียง MP3</li>
                                <li>บริการถอดความจาก MP3 พิมพ์พร้อม Print</li>
                                <li>บริการหอพักนักศึกษาที่เอื้อต่อข้อจำกัดของผู้พิการ</li>
                                <li>บริการวางแผนการลงทะเบียน การเพิ่มและถอนกระบวนวิชา</li>
                                <li>บริการให้คำปรึกษาเรื่องการเรียนและการใช้ชีวิตประจำวัน</li>
                                <li>ประสานงานเรื่องขยายเวลาสอบ</li>
                                <li>จัดทำหนังสือแจ้งอาจารย์ทุกกระบวนวิชาที่นักศึกษาพิการเรียนร่วม</li>
                                <li>จัดระบบเพื่อนช่วยเพื่อน</li>
                                <li>บริการรถไฟฟ้าสำหรับผู้พิการ CMU SHUTTLE FOR ALL</li>
                                <li>บริการห้องอ่านหนังสือ</li>
                                <li>บริการหอพักนักศึกษาพิการ (มีลิฟต์ ทางลาด ห้องน้ำ ประตู โต๊ะอ่านหนังสือสำหรับผู้พิการ)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-2.png') }}" alt="dss-2">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>บริการสนับสนุนและพัฒนาผู้บกพร่องทางการมองเห็น(ตาบอด/ ตาเลือนราง)</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>บริการนำทาง</li>
                                <li>บริการอ่านข้อสอบ</li>
                                <li>บริการขยายตัวอักษรขนาดใหญ่</li>
                                <li>บริการคอมพิวเตอร์ PC ที่ลงโปรแกรม JAWS และ ZOOM TEXT</li>
                                <li>บริการพิมพ์เอกสารประกอบการเรียนพร้อมแปลงเป็นอักษรเบรลล์และPrint เบรลล์</li>
                                <li>บริการอ่านบันทึกหนังสือเสียงลง MP3</li>
                                <li>บริการผลิตสื่อประกอบการเรียน เช่น ภาพนูนเพื่อให้สัมผัส</li>
                                <li>บริการให้ยืมหนังสือเสียงระบบเดซี จำนวน 1,400 เรื่อง</li>
                                <li>บริการจัดหาและเปลี่ยนอุปกรณ์อำนวยความสะดวก เช่น ไม้เท้าขาว แว่นตา แว่นขยาย</li>
                                <li>บริการ Braille Printer รุ่น Express 150 (เครื่อง Print อักษรเบรลล์)</li>
                                <li>บริการ Braille Printer รุ่น Tiger ELITE 150 (เครื่องพิมพ์นูนระบบคอมพิวเตอร์)</li>
                                <li>บริการให้ยืม Braille Display (เครื่องแสดงผลอักษรเบรลล์)</li>
                                <li>บริการให้ยืมเครื่องขยายภาพและตัวอักษรแบบพกพา (CCTV)</li>
                                <li>บริการเครื่องขยายภาพและตัวอักษรแบบตั้งโต๊ะ (CCTV)</li>
                                <li>บริการให้ยืมเครื่องจดบันทึกอักษรเบรลล์ มีแป้นอักษรเบรลล์และเสียงสังเคราะห์</li>
                                <li>บริการให้ยืมเครื่องบันทึกและเล่นสื่อเสียงระบบเดซี่</li>
                                <li>บริการให้ยืมกระดานและดินสอเขียนเบรลล์ (Slate and Stylus)</li>
                                <li>บริการออกแบบและกำหนดอักษรเบรลล์แทนสัญลักษณ์เฉพาะในบางกระบวนวิชา เช่น Phonetic ภาษาบาลี และคณิตศาสตร์</li>
                                <li>การสร้างความคุ้นเคยกับสภาพแวดล้อมและการเคลื่อนไหว (O&M : Orientation and Mobility Training)</li>
                            </ol><br />
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-3.png') }}" alt="dss-3">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>บริการสนับสนุนและพัฒนาผู้บกพร่องทางการได้ยิน(หูหนวก/หูตึง)</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>บริการล่ามภาษามือ</li>
                                <li>บริการยืมกล้องวีดีทัศน์</li>
                                <li>ประสานงานซ่อมบำรุงรักษาเครื่องช่วยฟัง</li>
                                <li>ประสานงานเข้ารับการตรวจการได้ยิน</li>
                                <li>ประสานงานเทียบแทนกระบวนวิชาให้สอดคล้องกับข้อจำกัดของผู้พิการ</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-4.png') }}" alt="dss-4">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>บริการสนับสนุนและพัฒนาผู้บกพร่องทางร่างกาย การเคลื่อนไหว หรือสุขภาพ</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>ประสานงานเรื่องการปรับสถาปัตยกรรม และสภาพแวดล้อมภายในมหาวิทยาลัย เช่น ทางลาด ห้องน้ำผู้พิการ ที่จอดรถผู้พิการ ราวจับ ห้องพัก ห้องอ่านหนังสือ</li>
                                <li>ประสานงานการจัดห้องเรียนให้อยู่ชั้น 1 เพื่อนักศึกษาใช้เก้าอี้รถเข็นหรือเครื่องช่วยเดิน</li>
                                <li>ประสานงานและให้คำแนะนำเรื่องการยกวีลแชร์ที่ถูกวิธีให้กับผู้เกี่ยวข้อง</li>
                                <li>ประสานงานจัดทำ ปรับเปลี่ยน และซ่อมแซมขาเทียม</li>
                                <li>บริการให้ยืมเมาส์แบบพิเศษ (Trackball) สำหรับนักศึกษาที่มีข้อจำกัดด้านการใช้มือ</li>
                                <li>บริการจัดหาสิ่งอำนวยความสะดวก เช่น เก้าอี้รถเข็น เครื่องช่วยเดิน เก้าอี้อาบน้ำเก้าอี้สุขภัณฑ์ ไม้ค้ำยัน รองเท้าแบบพิเศษ โต๊ะปรับระดับ</li>
                                <li>ปรับแต่งและประดิษฐ์สิ่งอำนวยความสะดวกตามความต้องการจำเป็นรายบุคคล เช่น ที่พักเท้าสำหรับนักศึกษาที่มีลักษณะตัวเล็กกว่าปกติ ลูกเทนนิสรองขาเครื่องช่วยเดิน</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/dss-5.png') }}" alt="dss-5">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>บริการและพัฒนาผู้บกพร่องทางการเรียนรู้ ออทิสติก และกลุ่มอื่นๆ</h4><br />
                            <span></span>
                            <ol style="margin-left: 30px;">
                                <li>บริการสนับสนุนสำหรับนักศึกษาออทิสติกศักยภาพสูง (Autism Spectrum Disorder: ASD)
                                    <span>1.1 ประสานงานเข้าพบนักจิตวิทยาและจิตแพทย์ ประสานงานจัดหาครูประกบ</span>
                                    <span>1.2 ประสานงานเข้ารับการปรับพฤติกรรมที่ไม่พึงประสงค์</span>
                                    <span>1.3 บริการพบปะพูดคุยบอกเล่าเรื่องราวประจำวัน</span>
                                    <span>1.4 ประสานนักสหวิชาชีพเพื่อพัฒนาทักษะด้านสังคม การปรับตัว พฤติกรรมและอารมณ์ของบุคคลออทิสติก เช่น ศิลปะบำบัด ดนตรีบำบัด Social Story และ
                                        การใช้ออกซิเจนแรงดันสูง (HBO: Hyperbaric Oxygen Therapy) เป็นต้น</span>
                                </li>
                                <li>บริการสนับสนุนสำหรับนักศึกษาบกพร่องทางการเรียนรู้ (Learning Disabilities: LD)
                                    <span>การให้ความช่วยเหลือนักศึกษากลุ่มนี้จะแบ่งไปตามประเภทของการบกพร่องทางการเรียนรู้ ซึ่งแบ่งออกเป็น 3 ด้านหลัก โดยนักศึกษา 1 คน อาจจะมีความบกพร่องด้านใดด้านหนึ่งหรือหลายด้านร่วมกัน ได้แก่</span>
                                    <span style="margin-left: 2rem;">ด้านการอ่าน (Reading)</span>
                                    <span style="margin-left: 2rem;">ด้านการเขียน (Written expression)</span>
                                    <span style="margin-left: 2rem;"> ด้านคณิตศาสตร์ (Mathematics)</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem;">
                        <h3 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">ส่วนที่ 3 ติดต่อเรา</h3>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div class="d-flex align-items-start flex-column">
                            <div class="flex">
                                <h4>1. ให้บริการดูแลนักศึกษาด้านสุขภาพจิต</h4>
                                <p style="margin-left: 2rem;">
                                    <b>โทรศัพท์ : </b><span>053-943057-8 , 053-943062-3</span>
                                    <br/>
                                    <b>Facebook : </b><a href="http://www.facebook.com/sportscenterCMU" target="_blank">http://www.facebook.com/sportscenterCMU</a>
                                    
                                </p>
                            </div>
                            <div class="flex">
                                <h4>2. บริการจัดหางานพิเศษเพื่อหารายได้ระหว่างเรียนและการส่งเสริมการมีงานทำเมื่อสำเร็จการศึกษา</h4>
                                <p style="margin-left: 2rem;">
                                    <b>โทรศัพท์ : </b><span>053-943042</span>
                                    <br/>
                                    <b>Facebook : </b><a href="https://www.facebook.com/CMUJobSearch" target="_blank">https://www.facebook.com/CMUJobSearch</a>
                                </p>
                            </div>
                            <div class="flex">
                                <h4>3. ส่งเสริมความเป็นสากลให้กับนักศึกษาด้วยกิจกรรมเสริมหลักสูตร</h4>
                                <div style="margin-left: 2rem;">
                                    <b>โทรศัพท์ : </b><span>053-943034</span>
                                    <br/>
                                    <div class="d-flex">
                                        <b>Facebook : </b>
                                        <div style="margin-left: 0.5rem" class="flex">
                                            <a href="https://www.facebook.com/CMUExchangeActivities" target="_blank">https://www.facebook.com/CMUExchangeActivities</a><br/>
                                            <a href="https://www.facebook.com/CMUINTCLUB" target="_blank">https://www.facebook.com/CMUINTCLUB</a>
                                        </div>
                                    </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </section><!-- #content end -->
@endsection
@section('page-scripts')
@endsection
