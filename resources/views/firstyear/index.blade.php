@extends('layouts.appfy')

@section('content')


    <section id="slider" class="slider-element h-auto" style="background-color: #222;">
        <div class="slider-inner">

            <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

                <a href="#"><img src="{{asset('upload/silder/coverv3.jpg')}}" alt="Slider"></a>


            </div>

        </div>
    </section>




<section id="content">

</section><!-- #content end -->


@endsection
@section('page-scripts')

@endsection
