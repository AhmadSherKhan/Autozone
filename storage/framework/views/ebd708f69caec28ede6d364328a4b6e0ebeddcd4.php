
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Autozone
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <a href="/" class="simple-text logo-mini">
        <i class="fas fa-car"></i>
      </a>
      <a href="/home" class="simple-text logo-normal">
        Autozone
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="/dashboard">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="active" >
          <a href="/servicerequest">
            <i class="now-ui-icons education_atom"></i>
            <p>Service Request</p>
          </a>
        </li>
        <li>
          <a href="/rentrequest">
            <i class="now-ui-icons location_map-big"></i>
            <p>Rent Requests</p>
          </a>
        </li>
        <li>
            <a href="/rentcarlist">
              <i class="now-ui-icons location_map-big"></i>
              <p>Rent-Cars List</p>
            </a>
          </li>
        <li>
          <a href="/serviceavail">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Services List</p>
          </a>
        </li>
        <li>
          <a href="/autopartlist">
            <i class="now-ui-icons users_single-02"></i>
            <p>Auto-Part List</p>
          </a>
        </li>
        <li >
            <a href="/mechanicslist">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Mechanics List</p>
            </a>
          </li>
          <li >
            <a href="/autopartcategory">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Autopart-Category</p>
            </a>
          </li>
      </ul>
    </div>
  </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Add New Product</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                  <a class="dropdown-item" href="<?php echo e(url('/dashboard')); ?>" >
                    <i class="fas fa-user padd_right" aria-hidden="true"></i>
                    <?php echo e(Auth::user()->name); ?>

                  </a>
                  <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>" >
                    <i class="fas fa-user padd_right" aria-hidden="true"></i>
                    Logout
                  </a>
                <?php endif; ?>
                <?php endif; ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
     
      

<div class="row">
          <div class="col-md-12">
            <div class="card">
                <h5 class="title heading">Edit Customer Request</h5>
              <div class="card-body">
              <?php if(session()->has('message')): ?>
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <?php echo e(session()->get('message')); ?>

              </div>
              <?php endif; ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                      <label class="font-weight-bolder text-dark">Owner Fullname</label>
                        <input class="form-control" type="text" name="sname" value="<?php echo e($servreq->Name); ?>" id="owner_name" placeholder="Enter your name">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="font-weight-bolder text-dark">Owner Contact</label>
                        <input class="form-control" type="text" name="scontact" value="<?php echo e($servreq->Contact); ?>" id="contact" placeholder="Enter your contact" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Owner email</label>
                        <input type="email" name="semail" value="<?php echo e($servreq->Email); ?>" id="email" placeholder="Enter your email"class="form-control">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Address</label>
                        <input rows="3" name="saddress" value="<?php echo e($servreq->Address); ?>" id="address"  placeholder="Enter your address" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Vehicle Name</label>
                        <input  type="text" name="svehiclename" value="<?php echo e($servreq->VehicleName); ?>" id="vehicle_name" placeholder="Enter your vehicle" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Vehicle Reg No</label>
                        <input type="text" name="sregnum" value="<?php echo e($servreq->RegNo); ?>" id="vehicle_registration_number" placeholder="Enter your vehicle" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Vehicle Model</label>
                        <input type="text" name="smodel" value="<?php echo e($servreq->Model); ?>" id="vehicle_model" placeholder="Enter your vehicle" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Service Type</label>
                        <input  type="text" name="smodel" value="<?php echo e($servreq->ServiceType); ?>" id="servicetype" placeholder="Enter your vehicle" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="service_id" class="control-label">Assigned To</label>
                        <select name="assigned" id="assigned" class="form-control mb-3"  required>
                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'autozone_db');
    
                        $query = "SELECT * FROM mechanics";
                        $query_run = mysqli_query($con, $query);
    
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <option value="<?=$row['name'];?>"> <?=$row['name'];?>  </option>
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


                    <div class="col-md-4">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Service Type</label>
                        <select name="servtype" value="<?php echo e($servreq->Type); ?>" id="service_type">
                        <option>Drop Off</option>
                        <option>Pick Up</option>
                    </select>
                      </div>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-secondary btn-success">
                </form>
              </div>
            </div>
          </div>
        </div>
    

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html><?php /**PATH E:\Autozone\resources\views/admin/sedit.blade.php ENDPATH**/ ?>