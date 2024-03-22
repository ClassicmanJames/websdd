@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.Ssd') }}</h1>


        </div>

    </section><!-- #page-title end -->

    <section id="content">
        <style>
            .c-1-b {
                background-color: #dbfdd8cf;
            }
            .c-1-h {
                background-color: #C0DEBD;
            }
            .c-2-b {
                background-color: #daeaf6cf;
            }
            .c-2-h {
                background-color: #CBDAE6;
            }
            .c-3-b {
                background-color: #ffdfc8cf;
            }
            .c-3-h {
                background-color: #DEC2AE;
            }
            .c-4-b {
                background-color: #e1b7ffcf;
            }
            .c-4-h {
                background-color: #C6A1E0;
            }
            .b-p {
                padding: 2rem;
            }
            .bullet-data {
                margin-left: 2rem;
            }
        </style>
        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container">
                <div style="padding: 2rem 0rem 2rem 0rem;" class="container">
                    <h3>ยุทธศาสตร์การจัดการศึกษาสำหรับนักศึกษาพิการในระดับอุดมศึกษา</h3>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="c-1-h card-header">ยุทธศาสตร์ 1 สร้างโอกาสทางการศึกษา</div>
                            <div class="c-1-b b-p card-body text-dark">
                                <h5 class="card-title">กลยุทธ์: จัดสรรโอกาศทางการศึกษาให้นักเรียนพิการเข้าเรียน มช.</h5>
                                <ul class="card-text">
                                    <li>โครงการรับนักเรียนพิการผ่าน TCAS รอบ 1 และ 2</li>
                                    <li>โครงการแนะแนวสัญจร</li>
                                    <li>โครงการปฐมนิเทศเตรียมความพร้อมสู่การเป็นลูกช้างเชือกใหม่</li>
                                    <li>โครงการพี่เตรียมน้องอยู่ การเรียนร่วมในรั้วมหาวิทยาลัย</li>
                                    <li>โครงการค่ายสสานฝันพี่ปันน้อง</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="c-2-h card-header">ยุทธศาสตร์ 2 พัฒนาการจัดการเรียนรู้ของผู้พิการ</div>
                            <div class="c-2-b b-p card-body text-dark">
                                <h5 class="card-title">กลยุทธ์: พัฒนาระบบบริการสนับสนุนนักศึกษาพิการ (DSS)</h5>
                                <ul class="card-text">
                                    <li>โครงการจัดสิ่งอำนวยความสะดวก สื่อ เทคโลโนยี บริการและความช่วยเหลืออื่นใดทางการศึกษา</li>
                                    <li>โครงการประชุมจัดทำแผนการรับบริการเฉพาะบุคคลของนักศึกษาพิดาร (Individualized Services Plan:ISP)</li>
                                    <li>โครงการสำรวจสิ่งอำนวยความสะดวกภายในมหาวิทยาลัยเชียงใหม่</li>
                                    <li>โครงการให้คำปรึกษาสำหรับนักศึกษาพิการด้านการเรียนและการใช้ชีวิตประจำวัน</li>
                                </ul>
                                <h5 class="card-title">กลยุทธ์พัฒนาบุคลากร</h5>
                                <ul>
                                    <li>โครงการพัฒนาศักยภาพล่ามภาษามือ</li>
                                </ul>
                                <h5 class="card-title">กลยุทธ์: พัฒนากระบวนการเรียนรู้</h5>
                                <ul>
                                    <li>โครงการสอนเสริม</li>
                                    <li>โครงการสร้างสรรค์สิ่งดีดี จากพี่สู้น้อง</li>
                                    <li>โครงการเชื่อมสัมพันธ์อาสาสมัครนักศึกษาพิการ</li>
                                    <li>โครงการพัฒนาศักยภาพและสร้างแรงบันดาลใจในการใช้ชีวิต</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="c-3-h card-header">ยุทธศาสตร์ 3 พัฒนาองค์ความรู้</div>
                            <div class="c-3-b b-p card-body text-dark">
                                <h5 class="card-title">กลยุทธ์ที่: ผลิตงานวิจัยและสร้างองค์ความรู็ใหม่ด้านคนพิการ</h5>
                                <ul class="card-text">
                                    <li>โครงการมหาวิทยาลัยเชียงใหม่ใส่ใจผู้พิการ</li>
                                    <li>โครงการจัดทำวารสารการศึกษาพิเศษ</li>
                                    <li>โครงการเผยแพร่ภาษามือสู่บุคลากรมหาวิทยาลัยเชียงใหม่</li>
                                    <li>โครงการเตรียมความพร้อมคำศัพท์ภาษามือ</li>
                                    <li>งานวิจัย Routine to Research to Innovation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="c-4-h card-header">ยุทธศาสตร์ 4 ส่งเสริมการมีงานทาของบัณฑิตผู้พิการ</div>
                            <div class="c-4-b b-p card-body text-dark">
                                <h5 class="card-title">กลยุทธ์ที่: ส่งเสริม สนับสนุนการประกอบอาชีพของบัณฑิตพิการ</h5>
                                <ul class="card-text">
                                    <li>โครงการส่งเสริมแนวทางการประกอบอาชีพ</li>
                                    <li>โครงการน้องเตรียมพี่สู่การมีงานทำ</li>
                                    <li>แผนงานพัฒนานักศึกษาพิการตามโครงการ DSS ม.35</li>
                                    <li>แผนงานการส่งเสริมการมีงานทำสำหรับนักศึกษาพิการ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem;"/>
                    <div style="padding: 3rem 0rem 2rem 0rem;" class="container">
                        <h3>สิ่งอำนวยความสะดวก สื่อ เทคโนโลยี บริการและความช่วยเหลือทางการศึกษา</h3>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">บริการหลักสำหรับนักศึกษาทุกประเภทความพิการ</h4>
                            <ul class="bullet-data card-text">
                                <li>การสอนเสริม</li>
                                <li>บริการรับคำปรึกษา</li>
                                <li>บริการส่งเสริมการมีงานทำ</li>
                                <li>บริการยืมเครื่องบันทึกเสียง</li>
                                <li>บริการยืมอุปกรณ์คอมพิวเตอร์</li>
                                <li>บริการรถไฟฟ้าสำหรับผู้พิการ</li>
                                <li>บริการหอพักสำหรับผู้พิการ</li>
                                <li>การพบนักจิตวิทยา หรือจิตแพทย์</li>
                                <li>ระบบ BUDDY / เพื่อนผู้พิการ</li>
                            </ul>                                
                        </div>
                    </div>
                    <h4 style="margin: 2.5rem 0rem 0rem 0rem" class="card-title">บริการเฉพาะสำหรับนักศึกษาพิการแต่ละประเภท</h4>
                    <div class="row">
                        <div style="margin-top: 1.5rem" class="col-6">
                            <h5 class="card-title">พิการการมองเห็น</h5>
                            <ul class="bullet-data card-text">
                                <li>จัดทำเอกสารเบรลล์</li>
                                <li>โปรแกรมตาทิพย์/ โปรแกรม JAWS ซึ่งเป็นโปรแกรมอ่านจอภาพสำหรับคนตาบอด</li>
                                <li>การสร้างความคุ้นเคยกับสภาพแวดล้อมและการเคลื่อนไหว (Orientation and Mobility)</li>
                                <li>บริการนำทาง</li>
                                <li>บริการอ่านข้อสอบ</li>
                                <li>เพื่อนช่วยเพื่อน</li>
                                <li>ให้บริการเอกสารขยายใหญ่</li>
                                <li>โปรแกรม Zoom Text Magnifier/Screen Reader</li>
                                <li>เครื่องขยายภาพตัวอักษร(CCTV) แบบตั้งโต๊ะ และแบบพกพา</li>
                            </ul>                                
                        </div>
                        <div style="margin-top: 1.5rem" class="col-6">
                            <h5 class="card-title">พิการทางการได้ยิน</h5>
                            <ul class="bullet-data card-text">
                                <li>บริการล่ามภาษามือ</li>
                                <li>ประสานงานขอรับเครื่องช่วยฟัง</li>
                                <li>บริการฝึกพูด</li>
                            </ul>                                
                        </div>
                        <div style="margin-top: 1.5rem" class="col-6">
                            <h5 class="card-title">พิการทางร่างกายหรือการเคลื่อนไหวหรือสุขภาพ</h5>
                            <ul class="bullet-data card-text">
                                <li>บริการเก้าอี้รถเข็น (Wheelchair)</li>
                                <li>เครื่องช่วยเดิน (Walker)</li>
                                <li>เก้าอี้อาบน้ำ</li>
                                <li>บริการซ่อมบำรุงเก้าอี้รถเข็นและเครื่องช่วยเดิน</li>
                                <li>บริการย้ายห้องเรียน</li>
                            </ul>                                
                        </div>
                        <div style="margin-top: 1.5rem" class="col-6">
                            <h5 class="card-title">พิการทางพฤติกรรม หรืออารมณ์</h5>
                            <ul class="bullet-data card-text">
                                <li>บริการคำปรึกษาที่ยึดหลักจิตวิทยา</li>
                                <li>เทคนิคการปรับพฤติกรรม</li>
                            </ul>                                
                        </div>
                        <div style="margin-top: 1.5rem" class="col-6">
                            <h5 class="card-title">ออทิสติกศักยภาพสูง</h5>
                            <ul class="bullet-data card-text">
                                <li>บริการคำปรึกษาที่ยึดหลักจิตวิทยาสำหรับเด็กออทิสติก</li>
                                <li>เทคนิคการปรับพฤติกรรม</li>
                            </ul>                                
                        </div>
                    </div>
                </div>
                <div style="margin-top: 10px" class="">
                    
                </div>
            </div>
    </section>
@endsection
@section('page-scripts')
@endsection
