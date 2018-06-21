@extends('layouts.app')
@section('title') Product
@endsection
@section('content') <br>
<div class="container">
    <div class="card"> 
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    {{-- <img src="storage\storage\Admin Uploads\Product Uploads\top.jpg" /> --}}
                    {{-- <img src="C:\Users\ASUS\Desktop\E-Commerce-Solution\Mondy\Mondy\public\storage\storage\Admin Uploads\Product Uploads\top.jpg"> --}}
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="https://sslimages1.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/FCC31746DDA64A439BC19211908B480E/203986279_9126_FCC31746DDA64A439BC19211908B480E.jpg" /></div>
                      {{-- <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> --}}
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="storage\app\public\storage\Admin Uploads\Product Uploads\top.jpg" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="" /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                <h3 class="product-title">{{$product->name}}</h3></h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                <p class="product-description">{{$product->description}}</p>
                    <h4 class="price">current price: <span>Rs.{{$product->price}}</span></h4>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>
                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                        <span class="color green"></span>
                        <span class="color blue"></span>
                    </h5>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        {{-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection