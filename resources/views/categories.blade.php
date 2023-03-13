<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>


<div class="container">
    <div class="row">
      <div class="col-sm">
      @foreach($data as $cars)
        <div class="carbox">
          <div class="images">
            <img src="/carimage/{{$cars->image}}" alt="">
          </div>
          <div class="content1">
            <div class="carname">{{$cars->carname}}</div>
            <p>
              <span class="text-success">Theft Protection</span> | 
              <span class="text-success">Clean interior/Exterior</span> | <br>
              <span class="text-success">Cancellation Policies</span> | 
              <span class="text-success">Terms & Conditions</span> | 
            </p>
          </div>
          <div class="price">
            <h3> Rs-{{$cars->price}}</h3>
            <span>Per Day</span>
            <a href="{{ url('/rentform/'.$cars->id)}}"  class="btn rent-btn btn-primary" style="margin-top:1.5rem;">Book</a>
          </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center mb-4">
            {!! $data->links() !!}
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>