@extends('user.layouts.master')
@section('content')


<!--site-main start-->

<div id="rev_slider_5_3_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery">
    <!-- START REVOLUTION SLIDER -->
    <div id="rev_slider_5_3" class="rev_slider fullwidthabanner" data-version="5.4.8">
        <ul>
            <li data-index="rs-6" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">

                <!-- MAIN IMAGE -->
                <video width="100%" height="100%" autoplay muted loop>
                    <source src="{{ asset('uploads/videos/video1.mp4') }}" type="video/mp4">
                </video>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','top']" data-voffset="['176','120','80','65']" data-fontsize="['45','45','45','40']" data-lineheight="['55','55','55','55']" data-fontweight="['400','400','400','400']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="600" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText11")}}
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-2" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','middle']" data-voffset="['233','190','140','-30']" data-fontsize="['70','70','70','55']" data-lineheight="['80','80','75','70']" data-fontweight="['600','600','600','600']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="800" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText2")}}
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-3" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','middle']" data-voffset="['320','285','225','25']" data-fontsize="['40','40','40','35']" data-lineheight="['50','50','50','50']" data-fontweight="['400','400','400','400']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="1000" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText3")}}
                </div>


                <!-- LAYER NR. 4 -->
                <a class="tp-caption rev-button ttm-bgcolor-highlight" href="{{route('products')}}" target="_self" id="slide-6-layer-4" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['184','120','80','96']" data-fontsize="['15','15','14','12']" data-lineheight="['20','20','16','15']" data-fontweight="['600','600','600','600']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power4.easeInOut;" data-style_hover="c:rgb(255, 255, 255);bg:rgb(0, 11, 28);" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="1200" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,14,14]" data-paddingright="[30,30,22,22]" data-paddingbottom="[14,14,12,12]" data-paddingleft="[30,30,22,22]" data-type="text" data-responsive_offset="on">{{__("View Now")}}<span class="ml-2"><i class="themifyicon ti-angle-right"></i></span>
                </a>

            </li>

            <!-- SLIDE  -->
            <li data-index="rs-7" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">

                <!-- MAIN IMAGE -->
                <video width="100%" height="100%" autoplay muted loop>
                    <source src="{{ asset('uploads/videos/video2.mp4') }}" type="video/mp4">
                </video> <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','top']" data-voffset="['176','120','80','65']" data-fontsize="['45','45','45','40']" data-lineheight="['55','55','55','55']" data-fontweight="['400','400','400','400']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="600" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText12")}}
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-2" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','middle']" data-voffset="['233','190','140','-30']" data-fontsize="['70','70','70','55']" data-lineheight="['80','80','75','70']" data-fontweight="['600','600','600','600']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="800" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText2")}}
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-3" data-x="['left','left','left','left']" data-hoffset="['80','40','30','30']" data-y="['top','top','top','middle']" data-voffset="['320','285','225','25']" data-fontsize="['40','40','40','35']" data-lineheight="['50','50','50','50']" data-fontweight="['400','400','400','400']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="1000" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-type="text" data-responsive_offset="on">{{__("BannerText4")}}
                </div>


                <!-- LAYER NR. 4 -->
                <a class="tp-caption rev-button ttm-bgcolor-highlight" href="{{route('products')}}" target="_self" id="slide-7-layer-4" data-x="['left','left','left','center']" data-hoffset="['80','40','30','0']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['184','120','80','96']" data-fontsize="['15','15','14','12']" data-lineheight="['20','20','16','15']" data-fontweight="['600','600','600','600']" data-color="['rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)','rgba(10, 28, 55,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power4.easeInOut;" data-style_hover="c:rgb(255, 255, 255);bg:rgb(0, 11, 28);" data-transform_in="x:[-175%];y:0px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:auto;y:auto;opacity:0;s:1500;e:Power4.easeIn;" data-mask_in="x:[100%];y:0px;s:inherit;e:inherit;" data-start="1200" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,14,14]" data-paddingright="[30,30,22,22]" data-paddingbottom="[14,14,12,12]" data-paddingleft="[30,30,22,22]" data-type="text" data-responsive_offset="on">{{__("View Now")}}<span class="ml-2"><i class="themifyicon ti-angle-right"></i></span>
                </a>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<div class="site-main">

    <!-- testimonial-section -->
    {{-- <section class="testimonial-section ttm-bgcolor-darkgrey clearfix">
        <div class="row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-7 ml-auto mr-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text style2">
                        <div class="title-header">
                            <h5>{{__("TESTIMONIAL")}}</h5>
    <h2 class="title">{{__("What Our Customers Saying")}}</h2>
</div>
</div><!-- section title end -->
</div>
</div><!-- row end -->
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <!-- slick_slider -->
        <div class="slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2}'>
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Leaax May</h5>
                        <label>CEO At Founder</label>
                    </div>


                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Alan Sears</h5>
                        <label>CEO At Founder</label>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Alex Ritchell</h5>
                        <label>CEO At Founder</label>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Leaax May</h5>
                        <label>CEO At Founder</label>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Alan Sears</h5>
                        <label>CEO At Founder</label>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials">
                <div class="testimonial-content">
                    <blockquote>Lorem Ipsum is simply dummy text of tled it te spec. It has survived not only five centuries,</blockquote>
                    <div class="testimonial-caption">
                        <h5>Alex Ritchell</h5>
                        <label>CEO At Founder</label>
                    </div>
                </div>
            </div><!-- testimonials end -->
        </div><!-- testimonial-slide end-->
    </div>
</div><!-- row end-->
</div>
</section> --}}
<!-- testimonial-section end-->

<!-- featured-product-section -->
@if(count($products)>0)
<section class="featured-product-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <!-- section-title -->
                <div class="section-title title-style-center_text style2">
                    <div class="title-header">
                        <h5>{{__("Orthopedic")}}</h5>
                        <h2 class="title">{{__("The Newest Products")}}</h2>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
        <div class="products row">
            @foreach($products as $product)
            <div class="product col-md-3 col-sm-6 col-xs-12">
                <div class="product-box">
                    <!-- product-box-inner -->
                    <div class="product-box-inner">
                        <div class="product-image-box">
                            <img class="img-fluid @if(isset($product->images[1])) pro-image-front @endif" src="{{ asset('uploads/products/' . $product->images[0]->image) }}" alt="">
                            @if(isset($product->images[1]))
                            <img class="img-fluid pro-image-back" src="{{ asset('uploads/products/' . $product->images[1]->image) }}" alt="">
                            @endif
                        </div>
                    </div><!-- product-box-inner end -->
                    <div class="product-content-box">
                        <a class="product-title" href="{{ route('productDetail', ['urun' => slugify($product["name_" . app()->getLocale()]), 'id' => $product->id]) }}">
                            <h2>{{ $product["name_" . app()->getLocale()] }}</h2>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- featured-product-section end -->
@endif
{{-- <!-- banner-section -->
    <section class="banner-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- banner-image -->
                    <div class="banner-image">
                        <figure class="ttm-figure">
                            <a href="#"><img class="img-fluid" src="images/banner-five.jpg" alt=""></a>
                        </figure>
                    </div><!-- banner-image end -->
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end --> --}}

<!-- blog-section -->
@if(count($news)>0)
<section class="blog-title-section bg-img3 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
                <!-- section-title -->
                <div class="section-title title-style-center_text style2">
                    <div class="title-header">
                        <h5>{{ __("Our Blog") }}</h5>
                        <h2 class="title">{{__("Our Latest News")}}</h2>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
    </div>
</section>

<section class="blog-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- slick_slider -->
                <div class="slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true}'>
                    @foreach($news as $item)
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" stl src="{{asset('uploads/news/' . $item["image_".app()->getLocale()])}}" alt="{{$item["name_".app()->getLocale()]}}">


                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>{{$item->date->format('d.m.Y')}}</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="blog-single.html">{{$item["title_".app()->getLocale()]}}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div><!-- slick_slider end -->
            </div>
        </div>
    </div>
</section>
@endif
<!-- multi-section end -->

</div>
<!--site-main end-->

@endsection
