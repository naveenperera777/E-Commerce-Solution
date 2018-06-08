@extends('layouts.app')
@section('title')
Add A Product
@endsection

@section('content')<br>
<div class="container">
  
<form method="POST" action="{{route('admin-add-new-product')}}"  enctype="multipart/form-data" class="needs-validation" novalidate>
  @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Product ID</label>
        <input type="text" class="form-control" id="productid" name="productid" placeholder="Product ID"  required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Product Name</label>
        <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

       <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
    </div>


    <div class="form-row">
            <div class="col-md-4 mb-3">
                    <label for="brand">Brand</label>
                  <select class="custom-select" name="brand" required>               
                    <option>Select a Brand</option>
                    <option>Armani</option>
                    <option>Gucci</option>
                    <option>Dolce & Gabbana</option>
                    <option>Versace</option>
                    <option>Louis Vuitton</option>
                    <option>Victoria's Secret</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>


      <div class="col-md-4 mb-3">
          <label for="category">Categoty</label>
        <select class="custom-select" name="category" required>               
          <option>Select a Categoty</option>
          <option>Tops</option>
          <option>Jeans</option>
          <option>Lingerie</option>
          <option>Dresses</option>
          <option>Pants</option>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
      </div>

      <div class="col-md-4 mb-3">
            <label for="validationCustom04">Sub-Categoty</label>
          <select class="custom-select" required>               
            <option value="">Select a Sub-Categoty</option></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
          </div>

          <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Price"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Available Quantity</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                </div>

    <div class="form-row">
            
    <label for="validationCustom04">Sizes Available &nbsp</label>        

    <label class="checkbox-inline">
            <input type="checkbox" name="size[]" id="size" value="XS">XS &nbsp
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="size[]" id="size"  value="S">S &nbsp
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="size[]" id="size"  value="M">M &nbsp
          </label>
          <label class="checkbox-inline">
                <input type="checkbox" name="size[]" id="size"  value="L">L &nbsp
            </label><label class="checkbox-inline">
                    <input type="checkbox"name="size[]" id="size"  value="XL">XL &nbsp
            </label><label class="checkbox-inline">
                <input type="checkbox" name="size[]" id="size"  value="XXL">XXL &nbsp
                </label>
            
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        
     </div> <br>
     <div class="form-row">

     {{-- <div class="form-group"> --}}
        <label for="exampleFormControlTextarea1">Product Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" cols="10"></textarea>
      {{-- </div> --}}

     </div> <br>

     <div class="form-row">
     
            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="attachment" name="attachment">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div><br>
          
     
  <button class="btn btn-primary" type="submit">Add Product</button>
</form>
  {{-- <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script> --}}


</div>
@endsection