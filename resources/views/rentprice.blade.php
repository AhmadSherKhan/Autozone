@include('header')

<div class="container my-4">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <p class="heading border-0">Rent Details</p>
                </div>

                <div class="card-body">
                    <p class="ml-auto">No.of days : <?php 

                        $date1 = $data->pickup_date;
                        $date2 = $data->dropoff_date; 
                        
                        $dat1 = strtotime($date1);
                        $dat2 = strtotime($date2);

                        $diff = ($dat2 - $dat1)/60/60/24;
                        echo $diff.' days';

                  ?>
                        
                    </p>
                    <p>Rent per day : {{ $data->price }}

                        
                    </p>
                    <p class="bg-dark text-white p-2 mt-2">Total Amount :-
                      
                    <?php
                    // PHP program to illustrate bcmul() function
                    
                    // input numbers with arbitrary precision
                   
                    $rentprice = $data->price;
                    
                    // calculates the multiplication of the two
                    // numbers when $scaleVal is not specified
                    $res = bcmul($diff, $rentprice);
                    
                    echo $res;
                    
                    ?>
                    </p>
                    <a href="/home" class="btn-block btn-primary btn-lg mt-4">OK, Back to Home Page</a>
                </div>

            </div>
        </div>
    </div>
</div>






@include('contactus')