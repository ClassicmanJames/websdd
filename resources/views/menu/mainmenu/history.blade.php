@extends('layouts.app')

@section('content')

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important; background-color: #f1f2f2">
            <div class="container clearfix" style="">
                <div class="col-12 col-lg">

                </div>

                <div class="col-12 col-lg " style="padding-top: 20px;">
                    <div class="fancy-title title-border title-center" style="margin-bottom: 0rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">{{ trans('message.historysdd') }}</h2>
                    </div>

                    <?php   if(session('locale') == 'en') {?>
                    <h4> {{ trans('message.historysdd') }}</h4>
                    <p style="">

                        Student Affair Division Chiang Mai University was established as a government division according to the Prime Minister’s Office announcement on the 8th November 1976 to be an agency operating on the development of student’s quality. By providing services and providing student welfare services such as providing scholarships, career guidance counseling and employment, organizing sport events, providing student dormitory, providing student counseling services, providing training to students in order to encourage and support the production of graduates to complete the body and mind. And on the 27th August 2008 it changes its name to Student Development Division (According to the university announcement, with regard to the division and assignment of authority and duty in university offices, dated 27th August 2008) Has the authority and responsibility for the management of student support and development, student activities and other duties as assigned.
                    </p>

                    <h4> {{ trans('message.historysdd') }}</h4>
                    <p style="">

                        Student Affair Division Chiang Mai University was established as a government division according to the Prime Minister’s Office announcement on the 8th November 1976 to be an agency operating on the development of student’s quality. By providing services and providing student welfare services such as providing scholarships, career guidance counseling and employment, organizing sport events, providing student dormitory, providing student counseling services, providing training to students in order to encourage and support the production of graduates to complete the body and mind. And on the 27th August 2008 it changes its name to Student Development Division (According to the university announcement, with regard to the division and assignment of authority and duty in university offices, dated 27th August 2008) Has the authority and responsibility for the management of student support and development, student activities and other duties as assigned.
                    </p>

                    <h4> Student Affair Division Chiang Mai University</h4>
                    <p style="">
                        Chiang Mai University focuses on the student’s development, a national human resource, to have quality, merit and value. Also, support student affairs along with academic work. The President assigned the Vice President of Student Quality Development as the commander, caring and responsible for the Student Affairs of Chiang Mai University as a whole. In the sub-level of the various faculties, Dean assigns a deputy dean, generally speaking, the name of Associate Dean for Student Affairs is responsible for overseeing student affairs at faculty level.
                    </p>

                    <h4> Management</h4>
                    <p style="">
                        The management of Student Affairs Division, Chiang Mai University has got 2 parts. A Central management, inside the University Office under the supervision of the Vice President for Student Quality Development and Special Affairs having a Student Development Division as a policy implementation agency. And a Faculty management, under the supervision of the Dean also have a deputy dean responsible for the Student Affairs Department of the Faculty as a policy implementation agency.
                    </p>


                    <div class=" col-md-12 col-sm-12 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=BysKk6XRbu0>
                                        <img src="{{ asset('upload/img/27.9.66 หน้าปก แนะนำ VDO กองพัฒน์.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=BysKk6XRbu0" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <?php  }else{?>

                    <h4> {{ trans('message.historysdd') }}</h4>
                    <p style="">
                        กองกิจการนักศึกษา มหาวิทยาลัยเชียงใหม่ ได้รับการจัดตั้งให้เป็นส่วนราชการระดับกองตามประกาศสำนักนายกรัฐมนตรี วันที่ 8 พฤศจิกายน 2519 เพื่อให้เป็นหน่วยงานดำเนินงานเกี่ยวกับการพัฒนาคุณภาพนักศึกษา โดยการให้บริการและ จัดสวัสดิการด้านต่าง ๆ แก่นักศึกษา เช่น จัดหาทุนการศึกษา แนะแนวอาชีพและจัดหางาน จัดกิจกรรมกีฬา จัดกิจกรรมเสริมหลักสูตร ให้บริการด้านหอพักนักศึกษา บริการให้คำปรึกษาแก้ปัญหาแก่นักศึกษา จัดอบรมให้ความรู้ต่าง ๆ แก่นักศึกษาเพื่อส่งเสริมและสนับสนุน การผลิตบัณฑิตให้สมบูรณ์ทั้งร่างกายและจิตใจ และในวันที่ 27 สิงหาคม 2551 ได้เปลี่ยนชื่อเป็น กองพัฒนานักศึกษา (ตามประกาศมหาวิทยาลัย ว่าด้วยการแบ่งและกำหนดอำนาจและหน้าที่ในสำนักงานมหาวิทยาลัย ลงวันที่ 27 สิงหาคม 2551) มีอำนาจและหน้าที่ความรับผิดชอบเกี่ยวกับการบริหารงานด้านการส่งเสริมและพัฒนานักศึกษา งานด้านกิจกรรมนักศึกษา และ งานอื่น ๆ ตามที่ได้รับมอบหมายให้ปฎิบัติ

                    </p>

                    <h4>งานกิจการนักศึกษามหาวิทยาลัยเชียงใหม่</h4>
                    <p style="">

                        มหาวิทยาลัยเชียงใหม่ให้ความสำคัญต่อการพัฒนานักศึกษา ซึ่งเป็นทรัพยากรบุคคลของชาติ ให้มีคุณภาพ คุณธรรม และคุณค่า ได้ให้การสนับสนุน ส่งเสริม งานกิจการนักศึกษา ควบคู่ไปกับงานด้านวิชาการ อธิการบดีมอบหมายให้รองอธิการบดีฝ่ายพัฒนาคุณภาพนักศึกษา เป็นผู้ สั่งการ ดูแล รับผิดชอบงานกิจการนักศึกษา มหาวิทยาลัยเชียงใหม่โดยรวม ในส่วนย่อยระดับคณะต่าง ๆ คณบดีมอบหมายให้รองคณบดีท่านหนึ่ง ซึ่งโดยทั่วไปใช้ชื่อรองคณบดีฝ่ายกิจการนักศึกษาเป็นผู้รับผิดชอบ ดูแลงานกิจการนักศึกษาระดับคณะ
                    </p>


                    <h4>การบริหารจัดการ</h4>
                    <p style="">
                        การบริหารจัดการงานกิจการนักศึกษา มหาวิทยาลัยเชียงใหม่ มีการจัดการ 2 ส่วนคือ ส่วนกลาง ในสำนักงานมหาวิทยาลัย อยู่ภายใต้การกำกับดูแลของรองอธิการบดีฝ่ายพัฒนาคุณภาพนักศึกษาและกิจการพิเศษ มีกองพัฒนานักศึกษา เป็นหน่วยงานปฏิบัติสนองนโยบาย และในส่วนคณะ อยู่ภายใต้การกำกับดูแลของคณบดี มีรองคณบดีท่านหนึ่งรับผิดชอบ หน่วยกิจการนักศึกษาคณะ เป็นหน่วยงานปฏิบัติสนองนโยบาย
                    </p>

                    <div class=" col-md-12 col-sm-12 col-12">
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="https://www.youtube.com/watch?v=NUiCHZt2VUU">
                                        <img src="{{ asset('upload/img/27.9.66 หน้าปก แนะนำ VDO กองพัฒน์.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a class="grid-item" href="https://www.youtube.com/watch?v=NUiCHZt2VUU" data-lightbox="iframe">
                                                <i class="icon-youtube-play"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <?php } ?>




                </div>



            </div>
        </div>
    </section>

@endsection
@section('page-scripts')

@endsection
