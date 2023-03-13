@include('header')


<!-- FORM SECTION STARTS -->


<section class="banner-main services-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col serviceshero">
                <div class="text-bg">
                    <p class="h1">Car Services in Lahore</p>
                    <p class="h3">Professional Car Services At Affordable Prices in Lahore</p>
                </div>
                <div class="images">
                    <img src="../images/mechanic.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="heading">Send Services Request</div>
        <div class="sub-heading instructions ml-10">Terms and Conditions
        </div>
            <div class="sub-instructions">● Every effort will be made to provide the services by the estimated time, but the Company shall not be liable for 
        any delay in completing the services<br>
        ● Payment for all services and repairs is due on completion of work.<br>
        ● Any work carried out by the mechanics at the request of the customer, will be at the customer’s risk from the point of completion of work.<br>
        ● The mechanic may refuse to carry out all, or part of any work for any reason whether or not an estimate has been provided.<br>
        ●  The price of the service provided shall be the price agreed between the Company and the Buyer, at the time the Buyer agrees to work being carried ou
            </div>
        <div><span class="badge">NOTE:</span>Please enter correct details for your booking. These details are necessary to verify your identity</div>
</div>
  
<div class="container con-1">
<div class="title">Car Services in Lahore</div>
  <div class="row">
    <div class="col servicetype">
      
@foreach($data as $item)
      <div class="servicebox">
        <div class="images">
          <img src="/serviceimage/{{$item->image}}" alt="">
        </div>
        <div class="cl2">
        <span class="servicename">{{ $item->servicename}}</span><br>
        <span class="price">Rs:{{ $item->price}}</span>
        <span>-Per Car</span>
        <p style="font-size:1rem;">{{ $item->description }}</p>
        <a href="/serviceform">
            <button class="btn btn-primary serv-btn ml-1" style="margin-top:1rem">Add Service</button>
        </a>

        </div>
      </div>
      @endforeach

      

   

    </div>
  </div>
</div>

@include('contactus')
