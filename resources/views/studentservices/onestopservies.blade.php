@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.SDOneStopService')  }}</h1>

            <span>{{ trans('message.SDOneStopService')  }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ secure_url('/') }}">{{ trans('message.index') }}</a></li>

            </ol>
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    <h3 style="text-align: center">{{ trans('message.SDOneStopService')  }}</h3>



                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <img src="{{ asset('upload/studentservices/380420938_273861502128618_109178893508375898_n.png') }}">
                        </div>
                    </div>

                </div>

            </div>





            <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
                <div class="container clearfix">
                    <div class="col-12 col-lg">


                        <p> 1. บริการยืมคืนอุปกรณ์ในการจัดกิจกรรมและอุปกรณ์กีฬา (ONE STOP SERVICE ONE RESORCE) ลดขั้นตอนการทำหนังสือขอความอนุเคราะห์ เป็นระบบยืม-คืน ติดต่อประสานผ่าน FANPAGE สำหรับนักศึกษาและบุคลากรภายในมหาวิทยาลัยเชียงใหม่ เท่านั้น </p>
                        <p style="margin-left: 40px">
                            1.1  <a target="_blank" href="https://www.facebook.com/SDonestopservice/posts/pfbid02mAJo4S78uiUxJaQDQgJnHnVBYdz">อุปกรณ์จัดกิจกรรม</a>
                        </p>

                        <p style="margin-left: 40px">
                            1.2  <a target="_blank" href="https://www.facebook.com/SDonestopservice/posts/pfbid0247CXmfcwfq2kf1Em4xnkEAskWv1fyKjAp2nvYzXsSQTRA5mzVt9wJvCR8HVQKGZml">อุปกรณ์กีฬา</a>
                        </p>

                        <p>2.  บริการของหายได้คืน (ONE LOST&FOUND HUB) ไม่ต้องเอาไปฝากใครที่ไหนเอามาไว้กับเรา รับรองปลอดภัย เราจะช่วยหาเจ้าของให้เอง
                            <a target="_blank" href="https://cmu.to/LO-FO">อุปกรณ์กีฬา</a>
                        <p/>
                        <p>3.   ยินดีตอบทุกถาม พร้อมหาทุกคำตอบ (ONE STOP CHATBOT)
                            เรื่องภายในมช. พร้อมหาคำตอบให้ภายใน 24 ชั่วโมง เรื่องภายนอกมช. พร้อมหาคำตอบให้ภายใน 48 ชั่วโมง
                        <p/>
                        <p>4.  บริการอื่นๆ (ONE OTHER SERVICE) เช่น รับฝากแจกของรางวัล เสื้อ อุปกรณ์การเรียนและอื่นๆ จากสโมสรนักศึกษาและส่วนงานภายในมหาวิทยาลัย สามารถติดต่อและร่วมออกแบบบริการเพื่อนักศึกษาได้เลย

                        <p/>


                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
