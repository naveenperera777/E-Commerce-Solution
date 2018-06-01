@extends('layouts.app')
@section('title')
Add A Product
@endsection

@section('content')<br>
<div class="container">

<form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Product ID</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Product ID"  required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Product Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Product Name" required>
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
                    <label for="validationCustom04">Brand</label>
                  <select class="custom-select" required>               
                    <option value="">Select a Brand</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>


      <div class="col-md-4 mb-3">
          <label for="validationCustom04">Categoty</label>
        <select class="custom-select" required>               
          <option value="">Select a Categoty</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
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
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Price"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Available Quantity</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Quantity" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                </div>

    <div class="form-row">
            
    <label for="validationCustom04">Sizes Available</label>        

    <label class="checkbox-inline">
            <input type="checkbox" value="">XS 
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" value="">S
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" value="">M
          </label>
          <label class="checkbox-inline">
                <input type="checkbox" value="">L
            </label><label class="checkbox-inline">
                    <input type="checkbox" value="">XL
            </label><label class="checkbox-inline">
                <input type="checkbox" value="">XXL
                </label>
           
            {{-- <div class="invalid-feedback">Example invalid custom select feedback</div> --}}
        
     </div>
     <div class="form-row">
            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div><br>
          
     
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
  <script>
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
  </script>


</div>
@endsection