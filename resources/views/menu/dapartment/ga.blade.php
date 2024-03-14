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
                            งานบริหารทั่วไป</h2>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem;">
                        <h3 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">ส่วนที่ 1 โครงสร้างสายงาน
                        </h3>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-1.png') }}" alt="ga-1">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-2.png') }}" alt="ga-2">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-3.png') }}" alt="ga-3">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-4.png') }}" alt="ga-4">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-5.png') }}" alt="ga-5">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-6.png') }}" alt="ga-6">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-7.png') }}" alt="ga-">
                        </div>
                    </div>
                    <div style="margin-top: 2rem" class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>งานบริหารทั่วไป General Administration</h4><br />
                            <ol style="margin-left: 30px;">
                                <li>สารบรรณและเลขานุการ</li>
                                <li>บุคคล</li>
                                <li>การเงินและงบประมาณ</li>
                                <li>พัสดุ ครุภัณฑ์</li>
                                <li>บริการยานพาหนะ</li>
                                <li>สื่อสารองค์กรและเทคโนโลยี</li>
                                <li>ด้านควบคุมภายในและบริหารความเสี่ยง</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem;">
                        <h3 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">ส่วนที่ 2
                            หน้าที่และความรับผิดชอบ</h3>
                    </div>
                    {{-- <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <img src="{{ asset('upload/department/ga-1.png') }}" alt="ga-1">
                        </div>
                    </div> --}}
                    <div class="col-lg-12 d-flex justify-content-start">
                        <div>
                            <h4>บริหารทั่วไป General Administration</h4><br />
                            <ol style="margin-left: 30px;">
                                <li><b>สารบรรณและเลขานุการ</b> การดำเนินงานบริหารจัดการเกี่ยวกับงานด้านสารบรรณเอกสาร และเอกสารออนไลน์</li>
                                <li><b>เลขานุการ</b> ให้บริการและอำนวยความสะดวกให้แก่ผู้มาติดต่อผู้อำนวยการกองพัฒนานักศึกษา</li>
                                <li><b>ด้านบุคคล</b> ดูแลด้านบริการและสวัสดิการของบุคลากรกองพัฒนานักศึกษา</li>
                                <li><b>การเงินและงบประมาณ</b> บริการและสนับสนุนการดำเนินงานด้านการเงินและงบประมาณ</li>
                                <li><b>พัสดุ ครุภัณฑ์</b> บริการและดำเนินการงานจัดซื้อจัดจ้างของกองพัฒนานักศึกษา</li>
                                <li><b>บริการยานพาหนะ</b> การให้บริการ และอำนวยความสะดวกในการใช้ยานพาหนะ–จัดบริการรถยนต์รับส่งผู้บริหาร คณาจารย์ บุคลากร และนักศึกษา</li>
                                <li><b>สื่อสารองค์กรและเทคโนโลยี</b> การให้บริการงานเทคโนโลยีสารสนเทศ และสื่อประชาสัมพันธ์ทุกแขนงให้กับกองพัฒนานักศึกษา</li>
                                <li><b>ด้านควบคุมภายในและบริหารความเสี่ยง</b> จัดทำฐานข้อมูลเพื่อสนับสนุนการวางแผนบริหารจัดการความเสี่ยงของกองพัฒนานักศึกษา</li>
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
                                <p style="margin-left: 2rem;">
                                    <b>โทรศัพท์ : </b><span>053-943039</span>
                                    <br/>
                                    <b>Facebook : </b><a href="https://www.facebook.com/sddcmu" target="_blank">https://www.facebook.com/sddcmu</a>
                                </p>
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
