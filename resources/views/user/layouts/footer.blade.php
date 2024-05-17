        <!--footer start-->
        <footer class="footer widget-footer ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            {{-- <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                            <div class="widget ttm-footer-cta-wrapper">
                                <h5>{{__('E-Bulletin')}}</h5>

            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5 widget-area m-auto">
                <div class="widget ttm-footer-cta-wrapper">
                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                            <p>
                                <i class="fa fa-envelope-o"></i>
                                <input type="email" name="email" placeholder="Your Email Add.." required="">
                            </p>
                            <p><input type="submit" value="SUBMIT"></p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                <div class="social-icons social-hover widget text-center">
                    <ul class="list-inline">
                        <li class="social-facebook"><a class="tooltip-top" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-twitter"><a class="tooltip-top" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-gplus"><a class="tooltip-top" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="social-linkedin"><a class="tooltip-top" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            </div>
            </div>
            </div> --}}
            <div class="sep_holder_box">
                <span class="sep_holder"><span class="sep_line"></span></span>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area m-auto">
                            <div class="widget">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="logo-img img-center" src="{{asset('uploads/merlyn-logos/png/beyaz.png')}}" alt="{{$settings->company_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text ml-40">
                                <ul class="widget_info_text">
                                    <li><i class="fa fa-map-marker"></i><strong>{{__('Location')}}</strong> <br> Konya,Türkiye</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text">
                                <ul class="widget_info_text">
                                    <li><i class="fa fa-envelope-o"></i><strong>{{__('Email')}}</strong> <br> {{$settings->company_email}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text">
                                <ul class="widget_info_text">
                                    <li><i class="fa fa-phone"></i><strong>{{__('Call Us')}}</strong> <br> {{$settings->company_phone}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sep_holder_box">
                <span class="sep_holder"><span class="sep_line"></span></span>
            </div>
            <div class="third-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 widget-area mr-auto">
                            <div class="widget widget_text pr-25 clearfix">
                                <h3 class="widget-title">{{__('About Us')}}</h3>
                                <div class="textwidget widget-text">
                                    <p class="pb-10">{{ Str::limit($settings['about_us_' . "tr"], 200)  }}</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#" title="">{{__('Read More')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">{{__('Our Company')}}</h3>
                                <ul class="menu-footer-quick-links">
                                    <li><a href="#">{{__('About Us')}}</a></li>
                                    <li><a href="#">{{__('Contact Us')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">{{__('Our New Products')}}</h3>
                                <ul class="menu-footer-quick-links">
                                    @foreach($sharedProducts as $product)
                                    <li><a href="#">{{Str::limit($product["name_" . app()->getLocale()],20)}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sep_holder_box">
                <span class="sep_holder"><span class="sep_line"></span></span>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12 justify-content-center col-lg-12 ttm-footer2-center">
                            <span>Copyright © 2024 <a href="https://merlyn89.com/">Merlyn89</a></span>
                        </div>
                        <div class="col-md-12 col-lg-6 ttm-footer2-right">
                            <div class="supported_card-block">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        </div><!-- page end -->
        <!-- Javascript -->
        <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/front/js/tether.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.easing.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-waypoints.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-validate.js')}}"></script>
        <script src="{{asset('assets/front/js/numinate.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/front/js/price_range_script.js')}}"></script>
        <script src="{{asset('assets/front/js/easyzoom.js')}}"></script>

        <script src="{{asset('assets/front/js/getInstallments.js')}}"></script>
        <script src="{{asset('assets/front/js/imask.min.js')}}"></script>
        <script src="{{asset('js/jquery.lazyload.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>


        <!-- Revolution Slider -->
        <script src="{{asset('assets/front/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/slider.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

        <!-- Javascript end-->

        </body>
        </html>
