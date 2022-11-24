 <!-- slider-area start -->
 @extends('frontend.layouts.master')
@section('title')
Home Page
@endsection
 @section('frontend_content')
@include('frontend.pages.widgets.slider')
@include('frontend.pages.widgets.featured')
@include('frontend.pages.widgets.count-down')
@include('frontend.pages.widgets.best_seller')
@include('frontend.pages.widgets.product')
@include('frontend.pages.widgets.testmonial')


@endsection
