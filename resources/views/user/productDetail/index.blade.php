@extends('user.layouts.master')
@section('content')

<div class="page">
    <!--site-main start-->
    <div class="site-main">

        <!-- single-product-section -->
        <section class="single-product-section layout-1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-single-product-details">
                            <div class="ttm-single-product-info clearfix">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-sm-12 ml-auto mr-auto">
                                        <div class="product-gallery easyzoom-product-gallery">
                                            <div class="product-look-views left">
                                                <div class="mt-35 mb-35">
                                                    <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":true}'>
                                                        @foreach($product->images as $productImage)
                                                        <li>
                                                            <a href="{{$productImage->path}}" data-standard="{{asset($productImage->path)}}">
                                                                <img class="img-fluid" src="{{asset("uploads/products/" . $productImage->image)}}" alt="" />
                                                            </a>
                                                        </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-look-preview-plus right">
                                                <div class="pl-35 res-767-pl-15">
                                                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                                        <a href="{{$product->images[0]->path}}">
                                                            <img class="img-fluid" src="{{asset("uploads/products/" . $product->images[0]->image)}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                                            <h2 class="product_title entry-title">{{ $product["name_" . app()->getLocale()] }}</h2>
                                            <div>
                                                <small>{{__("Product Code")}}: </small>
                                                <small>{{ $product->code }}</small>

                                            </div>

                                            <div class="pt-15">
                                                <h6>{{__("Product Base")}}</h6>
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    <li><i class="fa fa-arrows-alt"></i><span class="ttm-list-li-content">{{ $product["base_" . app()->getLocale()] }}</span></li>
                                                </ul>
                                            </div>

                                            <div class="pt-15">

                                                <h6>{{__("Product Color")}}</h6>
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    <li><i class="fa fa-tint"></i><span class="ttm-list-li-content">{{ $product["color_" . app()->getLocale()] }}</span></li>
                                                </ul>
                                            </div>

                                            <div class="pt-15">

                                                <h6>{{__("Product Material")}}</h6>
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    <li><i class="fa fa-cube"></i><span class="ttm-list-li-content">{{ $product["material_" . app()->getLocale()] }}</span></li>
                                                </ul>
                                            </div>

                                            <div class="pt-15">

                                                <h6>{{__("Product Assortment")}}</h6>
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                    @foreach(explode(',', $product->size) as $item)
                                                    <li><i class="fa fa-check"></i><span class="ttm-list-li-content">{{ $item }}</span></li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">{{__("Product description")}}</a></li>
                                </ul>
                                <div class="content-tab">
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <p>{!!($product["description_" . app()->getLocale()])!!}</p>
                                    </div><!-- content-inner end-->
                                </div>
                            </div>
                        </div>
                        @if(count($products)>0)
                        <div class="pt-35 related products">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h5>{{__("Our Other Products")}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- slick_slider -->
                                    <div class="slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":true, "autoplay":true, "infinite":false}'>
                                        <!-- product -->
                                        @foreach($products as $product)
                                        <div class="product">
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
                                        </div><!-- product end -->
                                        @endforeach


                                    </div><!-- slick_slider end -->
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- single-product-section end -->


    </div>
    <!--site-main end-->
</div>
@endsection
