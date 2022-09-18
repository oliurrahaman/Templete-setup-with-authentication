@extends('admin.layout.master')
@section('title')
    Product
@endsection
@section('admin_content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success text-center "> PRODUCT DETAILS</h2>
                    </div>

                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="me" style="width: 60%;float: left;margin-left:50px">
                                    <h5 class="card-title">Name: {{ $product->name }}</h5>
                                    <p class="card-text">Category: {{ $product->category }}</p>

                                    <p class="card-text">Date: {{ $product->date }}</p>
                                    <p class="card-text">Unit: {{ $product->unit}}</p>
                                    <p class="card-text">Price: {{ $product->price }}</p>
                                     <p class="card-text">Is sample product? {{ $product->is_sample_product }}</p>
                                    <p class="card-text">Details: {{ $product->Details }}</p>
                                    <p class="card-text">Country: {{ $product->country }}</p>
                                    <p class="card-text">Time: {{ $product->time }}</p>
                                    <p class="card-text">Sale Range: {{ $product->sale_range }}</p>
                                    <p class="card-text">Features: {{ $product->features }}</p>

                                  </div>

                            </div>
                            <div class="col">
                                <div style="float: right;">

                                    <div class="card card-text"><img src="{{ asset($product->img ) }}" style="width: 250px; height:250px;" alt=""></div>
                                    <div class=" card-text text-center mt-1"> Caption: {{ $product->title }}</div>
                                </div>
                             </div>
                        </div>
                      </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
