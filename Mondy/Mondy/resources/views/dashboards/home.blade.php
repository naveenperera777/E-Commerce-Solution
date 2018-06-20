@extends('layouts.app')

@section('content')<br>
<div class="container-fluid content-row">
        
    <div class="row "> 
            @foreach($products as $product)

            
        <div class="col-md-4">
                <div class="card h-100" style="width: 18rem;">
                <img class="mx-auto d-block" width="60%" src="storage/storage/Admin Uploads/Product Uploads/{{$product->attachment}}.{{$product->ext}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{route('customer-view-product')}}" class="btn btn-primary">Shop</a>
                          
                        </div>
                      </div>
                   
            </div>
            
            @endforeach
            
        </div>
        
        </div>
 
@endsection
