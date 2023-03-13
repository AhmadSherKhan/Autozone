

@include('header')



<div class="container">
    <div class="row">

     
        <div class="col-8">
            <div class="card my-4">
                <div class="card-header">
                    <h3>{{ $data->name }}</h3>
                </div>
                <div class="card-body">
                    <img src="{{ asset( $data->productimages[0]->image) }}" class="w-50 my-4" alt="{{ $data->name }}">
                   <p>{{ $data->description }} </p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card my-4">
                <div class="card-header">
                    <h3>{{$data->price}}</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-dark btn-success">Add to Cart</button>
                    <button class="btn btn-dark btn-success">Buy Now</button>
                </div>
            </div>
        </div>
     
        
    </div>
</div>




















@include('contactus')