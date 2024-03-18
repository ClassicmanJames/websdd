@extends('layouts.app')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ trans('message.SDOneStopService')  }}</h1>

            {{-- <span>{{ trans('message.SDOneStopService')  }}</span> --}}
        </div>

    </section><!-- #page-title end -->

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important;">
            <div class="container clearfix">
                <div class="col-12 col-lg">
                    {{-- <h3 style="text-align: center">{{ trans('message.SDOneStopService')  }}</h3> --}}
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
                        <p> 1. <b>บริการยืมคืนอุปกรณ์ในการจัดกิจกรรมและอุปกรณ์กีฬา (ONE STOP SERVICE ONE RESORCE)</b> ลดขั้นตอนการทำหนังสือขอความอนุเคราะห์ เป็นระบบยืม-คืน ติดต่อประสานผ่าน FANPAGE สำหรับนักศึกษาและบุคลากรภายในมหาวิทยาลัยเชียงใหม่ เท่านั้น </p>
                        <p style="margin-left: 40px">
                            1.1  <a target="_blank" href="https://www.facebook.com/SDonestopservice/posts/pfbid02m8mijqJgUmBFyfxAD2aaE3RXdWuUgsEuoHRXqfr8a1DK9p1NpqcujGm8VeHrYHGgl">อุปกรณ์จัดกิจกรรม</a>
                        </p>

                        <p style="margin-left: 40px">
                            1.2  <a target="_blank" href="https://www.facebook.com/SDonestopservice/posts/pfbid0247CXmfcwfq2kf1Em4xnkEAskWv1fyKjAp2nvYzXsSQTRA5mzVt9wJvCR8HVQKGZml">อุปกรณ์กีฬา</a>
                        </p>

                        <p>2. <b>บริการของหายได้คืน (ONE LOST&FOUND HUB)</b> ไม่ต้องเอาไปฝากใครที่ไหนเอามาไว้กับเรา รับรองปลอดภัย เราจะช่วยหาเจ้าของให้เองที่
                            <a target="_blank" href="https://www.facebook.com/SDonestopservice/posts/pfbid0PVjHam9jFWR7cYQrbmrd63oNVZTP2be981F1tFxR2VBMi7RerxREKjannMxVJ4Whl">ของหายอยากได้คืน</a>
                        </p>
                        <p>3. <b>ยินดีตอบทุกถาม พร้อมหาทุกคำตอบ (ONE STOP CHATBOT)</b>
                            เรื่องภายในมช. พร้อมหาคำตอบให้ภายใน 24 ชั่วโมง เรื่องภายนอกมช. พร้อมหาคำตอบให้ภายใน 48 ชั่วโมง
                        </p>
                        <p>4. <b>บริการอื่นๆ (ONE OTHER SERVICE)</b> เช่น รับฝากแจกของรางวัล เสื้อ อุปกรณ์การเรียนและอื่นๆ จากสโมสรนักศึกษาและส่วนงานภายในมหาวิทยาลัย สามารถติดต่อและร่วมออกแบบบริการเพื่อนักศึกษาได้เลย

                        </p>


                    </div>

                </div>







    </section><!-- #content end -->
@endsection
@section('page-scripts')

@endsection
