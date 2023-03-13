<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span class="headline">BUY AUTO PARTS</span>
                                 <p>Autozone is one of the most leading units specializing in providing car care equipment and tools world wide.Need to buy car tools, accessories, this will be a useful choice.</p>
                                 <a href="/autoparts" class="cta-main">More Info</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/slider-bg1.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span class="headline">RENT A CAR</span>
                                 <p>Worry no more, Now you can book your car online and also get benefitted<br>from the discounts.With online booking, you can save your time and money both.</p>
                                 <a href="/rentacar" class="cta-main">More Info</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/slider-bg1.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span class="headline">car repair services</span>
                                 <p>It is a long established fact that a reader will be distracted by the readable<br> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                                 <a href="/serviceform" class="cta-main">More Info</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/slider-bg1.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                  <span class="title"> AUTO RENTAL</span>
                     <i><img src="images/thr.png" alt="#"/></i>
                     <p>Now you can easily make your car rental online booking just by pressing following Button</p>
                     <a href="/rentacar" class="cta-main cta-secondary">RENT A CAR</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                  <span class="title"> AUTO SERVICES</span>
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <p>Send service request and Hire Mechanics at your Doorstep just by Submitting Online Request</p>
                     <a href="/servicelist" class="cta-main cta-secondary">SERVICE REQUEST</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <span class="title"> AUTO PARTS</span>
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <p>Buy your car Accessories and Genuine Car Parts Online through Autozone in ease of your Home</p>
                     <a href="/autoparts" class="cta-main cta-secondary">BUY PARTS</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- three_box -->
      <!--  footer -->
     <?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone\resources\views/home.blade.php ENDPATH**/ ?>