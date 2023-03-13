<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:#eee;">
  

  <div class="container">
    <div class="row">

      <div class="col-md-4 my-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-header bg-dark text-light">Auto-parts Category</h2>
            <p class="card-text">
              @foreach ($categories as $category)
              <ul>
                  <li class="my-2 pl-2"><a href="{{ url ('/productswrtcategory/'.$category->slug) }}"> {{ $category->name }} </a></li>
              </ul>
              @endforeach
            </p>
          </div>
        </div>
      </div>
    
      <div class="col-md-8 my-4">
        <div class="card">
          <div class="card-body ">
            <h2 class="card-header bg-dark text-light text-center text-lg">Top Selling Products</h2>
            <div class="d-flex">

              @foreach($data as $product)
              <div class="card my-2 m-2" style="width:250px;">
                <div class="card-body">
                  <div>
                    <img src="{{ asset( $product->productimages[0]->image) }}" style='border-bottom:.1px solid rgba(0,0,0,.1)'  alt="{{ $product->name }}">
                  </div>
                  <div class="text-center">
                    <a href="{{ url ('/productcard/'.$product->id)}}" class="servicename mt-4">{{ $product->name }}</a><br>
                    <span class="price my-2">{{$product->price}}</span><br>
                    <p class="des">{{ $product->small_description }} </p>
                  </div>
                </div>
              </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    
      <div class="d-flex justify-content-center mx-auto my-4">
        {!! $data->links() !!}
    </div>

    </div>
  </div>




{{--  
<div class="container">
<div style="text-align:center;">
    <strong><i class="feature">Top Selling Products</i></strong>
</div>
  <div class="row">

  <div class="col-md-3 mb-4">
    <div class="category">
        <h3 style="font-weight: bolder; border-bottom:.1px solid rgb(80, 79, 79);">Auto-Parts Categories</h3>
        @foreach ($categories as $category)
        <ul>
            <li class="my-2"><a href="{{ url ('/productswrtcategory/'.$category->slug) }}"> {{ $category->name }} </a></li>
        </ul>
        @endforeach
    </div>
  </div>

    <div class="col-md-9  servicetype product-type">
    @foreach($data as $product)
      <div class="product-box">
        <div class="images">
          <img src="{{ asset( $product->productimages[0]->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="cl2">
        <a href="{{ url ('/productcard/'.$product->id)}}" class="servicename"> {{ $product->name }} </a><br>
        <p class="des"> {{ $product->small_description }} </p><br>
        <span class="price">{{$product->price}}</span>
        </div>

        <form action="{{url('/add_cart/'.$product->id)}}" method="Post">
          @csrf
            <div class="row">
              <div class="col-md-4">
                <input type="number" name="quantity" class="w-100" value="1" min="1" id="">
              </div>
              <div class="col-md-4">
                <input type="submit" class="btn btn-dark btn-sm" value="Add to Cart">
              </div>
            </div>
        </form>

      </div>
      @endforeach
      

    </div>
    <div class="d-flex justify-content-center mx-auto my-4">
            {!! $data->links() !!}
        </div>
  </div>
</div> --}}

</body>
</html>














































