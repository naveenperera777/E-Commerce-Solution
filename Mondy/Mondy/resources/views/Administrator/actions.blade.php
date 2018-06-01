@extends('layouts.app')
@section('title')
    Actions
@endsection
@section('content')<br>


<div class="container">

{{-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">Enter a Product</div>
        <div class="card-body">
          <h5 class="card-title">Dark card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

</div> --}}

{{-- <div class="card text-dark bg-light" style="width: 18rem;">
  <div class="card-header">
   <strong>Featured</strong> 
  </div> --}}
  {{-- <ul class="w3-ul w3-hoverable"> --}}
  {{-- <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div> --}}

      {{-- <div class="card" style="width: 18rem;">
            <div class="card-header">
              Products
            </div>
            <ul class="list-group list-group-flush">
             <li class="list-group-item"><a href="">Add a New Product</a></li>
              <li class="list-group-item">Edit an existing Product</li>
              <li class="list-group-item">Delete an existing Product</li>
            </ul>
          </div> --}}

          <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color:black;">
                            <strong style="color:aliceblue">Products</strong>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                            <a href="{{route('admin-add-new-product')}}" class="list-group-item list-group-item-action">Add A New Product</a>
                            </div>
                                                                  
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Edit An Existing Item</a>
                            </div>
            
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Delete An Existing Item</a>
                            </div>
            
                        </div>
            
                    </div>
                </div>
            
                
            
            </div>
            


{{-- <div class="container">

        <div class="card" style="width: 10rem; height:5rem">
        <img class="card-img-top" src="https://media.missguided.com/s/missguided/Z9212767_set/1/vestido-petite-corto-ajustado-en-rojo" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

</div> --}}
@endsection
