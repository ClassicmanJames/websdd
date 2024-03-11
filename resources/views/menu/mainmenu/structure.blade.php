@extends('layouts.app')

@section('content')

    <section id="content">

        <div class="content-wrap" style="padding-bottom: 20px !important;padding-top: 20px;!important; background-color: #f1f2f2">
            <div class="container clearfix" style="">
                <div class="col-12 col-lg">

                </div>

                <div class="col-12 col-lg " style="padding-top: 20px;">
                    <div class="fancy-title title-border title-center" style="margin-bottom: 0rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">{{ trans('message.Org') }}</h2>
                    </div>
                    <br/>

                    <div class="team-image">
                        <img src="{{ asset('upload/org/orf.jpg') }}" alt="John Doe">
                    </div>


                </div>



            </div>
        </div>
    </section>

@endsection
@section('page-scripts')

@endsection
