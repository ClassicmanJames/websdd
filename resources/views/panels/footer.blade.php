<footer id="footer" class="dark">
    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
                <div class="col-lg-8">

                    <div class="row col-mb-50">
                        <div class="col-md-4">

                            <div class="widget clearfix">

{{--                                <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">--}}


                                <h4>{{ trans('message.Namesite')  }}</h4>

                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>{{ trans('message.AddH') }}</strong><br>
                                        {{ trans('message.Adddress') }}<br>
                                        {{ trans('message.AdddressD') }}<br>
                                    </address>
                                    <abbr title="Phone Number"><strong>{{ trans('message.Phone')  }}</strong></abbr>  {{ $sitephone }}<br>
                                    <abbr title="Fax"><strong>{{ trans('message.Fax')  }}</strong></abbr> {{ $sitefax }}<br>
                                    <abbr title="Email Address"><strong>{{ trans('message.Email')  }}</strong></abbr> {{ $sitemail }}
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget widget_links clearfix">

                                <h4>Campus life</h4>

                                <ul>
                                    <li><a href="https://scmc.cmu.ac.th/web/">{{ trans('message.Cmumb') }}</a></li>
                                    <li><a href="https://transit.scmc.cmu.ac.th/">{{ trans('message.RoutesofCMUTransit') }}</a></li>
                                    <li><a href="https://scmc.cmu.ac.th/web/">{{ trans('message.CMUPass') }}</a></li>
                                    <li><a href="{{ url('/maintenance') }}">{{ trans('message.ParttimeJob') }}</a></li>
                                    <li><a href="{{ url('/maintenance') }}">{{ trans('message.Volunteer') }}</a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063037729911">{{ trans('message.FoodFocus') }}</a></li>
                                    <li><a href="{{ url('/maintenance') }}">{{ trans('message.CMUHealthCenter') }}</a></li>
                                    <li><a href="https://healthycmu.com/clinic/">{{ trans('message.Healthrelatedapplication') }}</a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100046257596308">{{ trans('message.Visitcmu') }}</a></li>
                                    <li><a href="https://www.facebook.com/cmucoopfan/">{{ trans('message.CMUCooperativeStore') }}</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=5unbpbNlIV0">{{ trans('message.Landmarksintheuniversity') }}</a></li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget widget_links clearfix">
                                <h4>{{ trans('message.Relatedorganizations') }}</h4>




                                    <ul>
                                        <li><a href="https://www.cmu.ac.th/">{{ trans('message.Linkstoeachfaculty') }}</a></li>
                                        <li><a href="https://www.reg.cmu.ac.th/webreg/th/">{{ trans('message.RegistrationOffice') }}</a></li>
                                        <li><a href="https://itsc.cmu.ac.th/">{{ trans('message.Itsc') }}</a></li>
                                        <li><a href="https://library.cmu.ac.th/cmul_manual/manual_2561_th/">{{ trans('message.Libcmu') }}</a></li>
                                        <li><a href="https://udo.oop.cmu.ac.th/">{{ trans('message.Dorm') }}</a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=100067679965613/">{{ trans('message.Scmc') }}</a></li>
                                        <li><a href="http://finance.oop.cmu.ac.th/">{{ trans('message.FD') }}</a></li>


                                    </ul>






                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="row col-mb-50">

                        <div class="col-md-3 col-lg-12">
                            <div class="widget clearfix" style="margin-bottom: -20px;">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0&appId=1013294896308625&autoLogAppEvents=1" nonce="soUvkX2O"></script>

                                <div class="fb-page" data-href="https://www.facebook.com/sddcmu/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sddcmu/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sddcmu/">กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่ - Student Development Division of CMU</a></blockquote></div>

                                <div class="row">
                                    <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                        <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.facebook.com/sddcmu/"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-6 clearfix">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
        <div class="container">

            <div class="row col-mb-30">

                <div class="col-md-6 text-center text-md-start">
                    Copyrights &copy; 2023 All Rights Reserved by กองพัฒนานักศึกษา มหาวิทยาลัยเชียงใหม่.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <a href="https://www.facebook.com/sddcmu/" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>




                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> {{ $sitemail }} <span class="middot">&middot;</span> <i class="icon-phone"></i>  {{ $sitephone }} <span class="middot">&middot;</span>
                </div>

            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->

</div><!-- #wrapper end -->





