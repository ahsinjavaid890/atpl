@extends('layouts.front')
@section('content')
@include('partials.global.common-header')
<!-- breadcrumb -->
<div class="full-row bg-light overlay-dark py-5" style="background-image: url({{ $gs->breadcrumb_banner ? asset('assets/images/'.$gs->breadcrumb_banner):asset('assets/images/noimage.png') }}); background-position: center center; background-size: cover;">
   <div class="container">
      <div class="row text-center text-white">
         <div class="col-12">
            <h3 class="mb-2 text-white">{{ __('Blog') }}</h3>
         </div>
         <div class="col-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                  <li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ __('Blog') }}</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb -->
<!--==================== Blog Section Start ====================-->
<div class="full-row">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 md-mb-50 order-lg-2">
            <div id="sidebar" class="sidebar-blog bg-light p-30">
               <div class="widget border-0 py-0 search-widget">
                  <form action="#" method="post">
                     <input type="text" class="form-control bg-light" name="search" placeholder="Search">
                     <button type="submit" name="submit" class="bg-light"><i class="flaticon-search flat-mini text-secondary"></i></button>
                  </form>
               </div>
               <div class="widget border-0 py-0 widget_categories">
                  <h4 class="widget-title down-line">{{ __('Categories') }}</h4>
                  <ul>
                     
                  </ul>
               </div>
               
               
            </div>
         </div>
         <div class="col-lg-8 order-lg-1">
            <div class="single-post">
               <div class="single-post-title">
                  <h3 class="mb-2 text-secondary">{{ $service->title }}</h3>
                  <div class="post-meta mb-4">
                     <a href="#"><i class="flaticon-user-silhouette flat-mini"></i> <span>{{ __('By Admin') }}</span></a>
                     <a href="#"><i class="flaticon-calendar flat-mini"></i> <span>{{ date('M d - Y',(strtotime($service->created_at))) }}</span></a>
                     <a href="#"><i class="flaticon-like flat-mini"></i> <span>{{ $service->views }} {{ __('View(s)') }}</span></a>
                     <span><i class="flaticon-document flat-mini text-primary"></i> <a href="#"><span>{{ __('Source') }} : </span></a><a href="#"><span>{{ $service->source }}</span></a></span>
                  </div>
               </div>
               <div class="img">
                  <img data-src="{{ asset('assets/images/services/'.$service->photo) }}" class="img-fluid lazy" alt="">
               </div>
               <div class="post-content pt-4 mb-5">
                  <p>{!! clean($service->details , array('Attr.EnableID' => true)) !!}</p>
               </div>
               <div class="share-post mt-5">
                  <span><b>{{ __('Share This Post:') }}</b></span>

                  <a class="a2a_dd plus" href="https://www.addtoany.com/share">
                  <i class="fas fa-plus"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--==================== Blog Section End ====================-->
@includeIf('partials.global.common-footer')
@endsection
