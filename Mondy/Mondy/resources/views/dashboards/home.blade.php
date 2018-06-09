@extends('layouts.app')

@section('content')<br>
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-4">

            {{-- {{dd($products)}} --}}

            @foreach($products as $product)
            
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="storage/storage/Admin Uploads/Product Uploads/{{$product->attachment}}.{{$product->ext}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>

                      @endforeach


            </div>
        </div>
    </div>
</div>
@endsection
