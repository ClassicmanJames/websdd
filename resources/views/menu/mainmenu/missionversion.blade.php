@extends('layouts.app')

@section('content')

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important; background-color: #f1f2f2">
            <div class="container clearfix" style="">
                <div class="col-12 col-lg">

                </div>

                <div class="col-12 col-lg " style="padding-top: 20px;">
                    <div class="fancy-title title-border title-center" style="margin-bottom: 0rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">{{ trans('message.missionversion') }}</h2>
                    </div>

                    <?php   if(session('locale') == 'en') {?>
                    <h4> {{ trans('message.historysdd') }}</h4>
                    <p style="">
                        Obligations and Responsibilities: (According to the university announcement, with regard to the division and assignment of authority and duty in university offices dated on the 27th August 2008) Student Development Division has the authority and responsibility for the management of student support and development, student activities and other duties as assigned.
                        Vision of Student Development Division, Chiang Mai University
                        “Focus on developing students to be a good person, an intellectual, and a dependable of the society.”

                    </p>

                    <h4> Mission </h4>
                    <p style="">
                        1. Encourage, support and organize student quality development activities towards a learning organization.<br/>
                        2. Organize services and welfare. Creating an environment conducive to learning quality and university life.<br/>
                        3. Promoting CMU students to have the characteristic of honesty, responsibility, and volunteerism.<br/>
                    </p>

                    <h4> Objective  </h4>
                    <p style="margin-left: 40px;">
                        1. To support the University’s strategy and approach according to the mission to produce graduates who has moral, ethical, quality, and global citizenship.<br/>
                        2. To develop students to be ready for their studies and also have the skills to live in the campus happily.<br/>
                    </br>

                    <h4> Strategy</h4>
                    <p style="margin-left: 40px;">
                        1. Students develop the ability to live in society with quality.<br/>
                        2. Integrated extracurricular activities that focus on student development and coexistence in a multicultural society.<br/>
                        3. Promote and develop cooperation in the field of student affairs both inside and outside the country.<br/>
                        4. Develop personnel in the field of student affairs to be knowledgeable and capable of developing social skills (soft skills) for students through extracurricular activities.<br/>
                        5. Develop student work to academic dimension by promoting routine development into research to drive the organization into a learning organization.<br/>
                        6. Develop corporate governance system with good corporate governance.<br/>
                    </p>


                    <h4> Main capacity </h4>
                    <p style="margin-left: 40px;">
                        1. Personnel are competent in the development of students. Be a learning process designer through social skills building activities. According to the identity of Chiang Mai University students. (Honesty, responsibility, volunteerism)<br/>
                        2. Is an organization capable of managing student development activities with a large number of participants.<br/>
                    </p>

                    <?php  }else{?>

                    <h4> ภาระหน้าที่และความรับผิดชอบ</h4>
                    <p style="">
                        (ตามประกาศมหาวิทยาลัย ว่าด้วยการแบ่งและกำหนดอำนาจและหน้าที่ในสำนักงานมหาวิทยาลัย ลงวันที่ 27 สิงหาคม 2551) กองพัฒนานักศึกษา มีอำนาจและหน้าที่ความรับผิดชอบเกี่ยวกับการบริหารงานด้านการส่งเสริมและ พัฒนานักศึกษา งานด้านกิจกรรมนักศึกษา และงานอื่น ๆ ตามที่ได้รับมอบหมายให้ปฎิบัติ
                    </p>

                    <h4>วิสัยทัศน์ : ของ กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่</h4>
                    <p style="">
                        “พัฒนานักศึกษาให้เป็นพลเมืองโลกที่เป็นคนดี คนเก่ง และรับผิดชอบต่อสังคม”
                    </p>


                    <h4>พันธกิจ</h4>
                    <p style="margin-left: 40px;">
                        1. ส่งเสริมสนับสนุนและจัดกิจกรรมพัฒนานักศึกษา สู่การเป็นพลเมืองโลกให้เป็นคนดี คนเก่ง และรับผิดชอบต่อสังคม<br/>
                        2. จัดบริการและสวัสดิการ เสริมสร้างสภาพแวดล้อมที่เอื้อต่อการเรียนรู้และการใช้ชีวิตในมหาวิทยาลัยอย่างมีคุณภาพ<br/>
                        3. สร้างเสริมนักศึกษามหาวิทยาลัยเชียงใหม่ ให้เป็นผู้มีคุณลักษณะด้านความซื่อสัตย์ รับผิดชอบ และมีจิตอาสา<br/>
                    </p>

                    <h4>วัตถุประสงค์</h4>
                    <p style="margin-left: 40px;">
                        1. ส่งเสริมสนับสนุนและจัดกิจกรรมพัฒนาคุณภาพนักศึกษามุ่งสู่องค์กรแห่งการเรียนรู้<br/>
                        2. จัดบริการและสวัสดิการ สร้างสภาพแวดล้อมที่เอื้อต่อการเรียนรู้และการใช้ชีวิตในมหาวิทยาลัยอย่างมีคุณภาพ<br/>
                        3. สร้างเสริมนักศึกษา มหาวิทยาลัยเชียงใหม่ให้เป็นผู้มีคุณลักษณะด้านความซื่อสัตย์ รับผิดชอบ และมีจิตอาสา<br/>

                    </p>

                    <h4>กลยุทธ์</h4>
                    <p style="margin-left: 40px;">
                        1. พัฒนานักศึกษาให้สามารถดำรงชีวิตอยู่ในสังคมได้อย่างมีคุณภาพ (Social Quality of Life)<br/>
                        2. บูรณาการกิจกรรมเสริมหลักสูตรที่มุ่งเน้นการพัฒนานักศึกษา และการอยู่ร่วมกันในสังคมพหุวัฒนธรรม<br/>
                        3. ส่งเสริมและพัฒนาความร่วมมือด้านเครือข่ายด้านกิจการนักศึกษาทั้งภายในและต่างประเทศ<br/>
                        4. พัฒนาบุคลากรด้านกิจการนักศึกษาให้เป็นผู้ที่มีความรู้ ความสามารถในการพัฒนาทักษะทางสังคม (Soft Skills) ให้แก่นักศึกษา ผ่านกิจกรรมเสริมหลักสูตร<br/>
                        5. พัฒนางานด้านกิจการนักศึกษาให้มีมิติเชิงวิชาการ โดยส่งเสริมการพัฒนางานประจำ สู่การศึกษา วิจัย เพื่อขับเคลื่อนองค์กรให้เป็นองค์กรแห่งการเรียนรู้ (Learning Organization)<br/>
                        6. พัฒนาระบบบริหารจัดการองค์กรด้วยหลักธรรมาภิบาล<br/>
                    </p>

                    <h4>สมรรถนะหลัก</h4>
                    <p style="margin-left: 40px;">
                        1. บุคลากรมีความรู้ความสามารถในการพัฒนานักศึกษา เป็นนักออกแบบกระบวนการเรียนรู้ผ่านกิจกรรมเสริมสร้างทักษะทางสังคม  ให้เป็นไปตามอัตลักษณ์ของนักศึกษามหาวิทยาลัยเชียงใหม่  (ซื่อสัตย์ รับผิดชอบ จิตอาสา)<br/>
                        2. เป็นองค์กรที่มีความสามารถในการบริหารจัดการกิจกรรมพัฒนาคุณภาพนักศึกษา ที่มีผู้เข้าร่วมกิจกรรมจำนวนมาก Crowd Management<br/>
                    </p>


                    <?php } ?>




                </div>



            </div>
        </div>
    </section>

@endsection
@section('page-scripts')

@endsection
