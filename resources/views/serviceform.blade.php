@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    
<div class="container my-4">
    <div><span class="badge mb-4">NOTE:</span>  Please enter correct details for your booking. These details are necessary to verify your identity</div>
    
      <div class="card p-4 my-4">
        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
        </div>
        @endif
      <form action="{{ url('/serviceform')}}" method="POST" >

      @csrf
      <div class="heading">Customer Details</div>
    <div class="row mt-2">
      
      <div class="col-md-6">
        <div class="form-group">
        <label class="font-weight-bolder text-dark">Customer Fullname</label>
          <input class="form-control" type="text" name="sname"   required placeholder="Enter your name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label  class="font-weight-bolder text-dark">Customer Contact</label>
          <input type="text" name="scontact"   required placeholder="Enter your contact"class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label  class="font-weight-bolder text-dark">Customer Email</label>
          <input type="email" name="semail"   required  placeholder="Enter your email" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label  class="font-weight-bolder text-dark">Customer Address</label>
          <input  type="text" rows="3" name="saddress" required   placeholder="Enter your address" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label  class="font-weight-bolder text-dark">Vehicle Name</label>
          <input  type="text" rows="3" name="svehiclename" required   placeholder="Enter your address" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label  class="font-weight-bolder text-dark">Vehicle Model</label>
          <input  type="text" rows="3" name="smodel" required   placeholder="Enter your address" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="font-weight-bolder text-dark">Choose Services</label>
          <select name="ServiceType[]"  class="js-example-basic-multiple form-control mb-3" multiple  required>
            <i class="bi bi-arrow-down"></i>
          <?php
          $con = mysqli_connect('localhost', 'root', '', 'autozone_db');

          $query = "SELECT * FROM service_lists";
          $query_run = mysqli_query($con, $query);

          if(mysqli_num_rows($query_run) > 0)
          {
              foreach($query_run as $row)
              {
                  ?>
                      <option value="<?=$row['servicename'];?>"> <?=$row['servicename'];?>  </option>
                  <?php
              }
          }
          else
          {
              ?>
              <option value="">No Record Found</option>
              <?php
          }
          ?>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="font-weight-bolder text-dark">Service Type</label>
          <input class="form-control"type="text" name="servtype" required placeholder="Enter your cnic" >
        </div>
      </div>
  
   
  
    </div>
    @if (Route::has('login'))
              @auth
         
                <button type="submit" name="submit" class="btn btn-block btn-primary d-flex align-items-center justify-content-center mx-auto mt-3">Submit</button>
             
            
              @else
              <a href="{{ route('login') }}" class="btn btn-danger text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
              <a href="{{ route('register') }}" class="btn btn-danger ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
              @endif
              @endauth
  </form>
   </div> 
  </div>
    
</body>
</html>

@include('contactus')