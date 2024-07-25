@extends('user.layouts.master')
@section('content')

<div class="page">
    {{-- <div class="ttm-page-title-row bg-img3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="page-title-heading">
                            <h1 class="title">{{__('About Us')}}</h1>
</div>
<div class="breadcrumb-wrapper">
    <span class="mr-1"><i class="ti ti-home"></i></span>
    <a title="{{__('Home')}}" href="{{route('index')}}">{{__('Home')}}</a>
    <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
    <span class="ttm-textcolor-skincolor">{{__('About Us')}}</span>
</div>
</div>
</div>
</div>
</div>
</div> --}}
<div class="site-main">
    <section class="sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-area">
                    <article class="post ttm-blog-classic clearfix">
                        <div class="entry-content">
                            <div class="ttm-box-desc-text">
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>{{__("Orthopedic And Comfortable")}}</h5>
                                        <h3 class="title">{{__('Our Products')}}</h3>
                                    </div>
                                </div>
                                <div class="mt-20">
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
                            </div>

                    </article>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
