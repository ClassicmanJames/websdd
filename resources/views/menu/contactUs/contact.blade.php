@extends('layouts.app')

@section('content')
    <section id="content">

        <div class="content-wrap" 
            style="padding-bottom: 20px !important;padding-top: 20px !important; background-color: #f1f2f2">
            <div class="container clearfix" style="">
                <div class="col-12 col-lg">
                </div>

                <div class="col-12 col-lg " style="padding-top: 20px;">
                    <div class="fancy-title title-border title-center" style="margin: 1rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">
                            {{ trans('message.ContactSdd') }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 0px;">
                    <div class="col-md-4">
                        <p style="margin-bottom: 10rem">
                            <b>{{ trans('message.address') }} : </b><span>{{ trans('message.addressSDD') }}</span><br/>
                            <b>{{ trans('message.tel') }} : </b><span>{{ trans('message.telNum') }}</span><br/>
                            <b>{{ trans('message.fax') }} : </b><span>{{ trans('message.faxNum') }}</span><br/>
                            <b>{{ trans('message.email') }} : </b><span>sddcmu@cmu.ac.th</span><br/>
                        </p>
                        
                    </div>
                    <div class="fancy-title title-border title-center" style="margin-top: 2rem; margin-bottom: 4rem; margin-left: 1.5rem; margin-right: 1.5rem;">
                        <h2 class="cosdd" style="text-align: center;margin-bottom: 0 !important;">
                            {{ trans('message.map') }}
                        </h2>
                    </div>
                    <img src="{{ asset('upload/sddMap.jpg') }}"/>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
@endsection
@section('page-scripts')
@endsection
