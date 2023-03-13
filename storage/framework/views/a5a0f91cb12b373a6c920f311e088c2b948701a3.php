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
        <li>
          <a href="/admin/users">
            <i class="now-ui-icons design_app"></i>
            <p>Users</p>
          </a>
        </li>
        <li>
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
        <li  class="active">
          <a href="/autopartlist">
            <i class="now-ui-icons users_single-02"></i>
            <p>Auto-Part List</p>
          </a>
        </li>
        <li>
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
                <h5 class="title heading">Upload a New Product</h5>
              <div class="card-body">

                <?php if($errors->any()): ?>
                <div class="alert alert-warning">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div><?php echo e($error); ?></div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>


              <?php if(session()->has('message')): ?>
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <?php echo e(session()->get('message')); ?>

              </div>
              <?php endif; ?>

                <form action="/uploadautopart" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <label class="font-weight-bolder text-dark">Category Name</label>
                      <select name="category_id" id="" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-bolder text-dark">Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter product name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Product Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter Slug">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Small description</label>
                        <input type="text" name="small_description" class="form-control" placeholder="Enter descriptions about product">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Enter descriptions about product">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Price</label>
                        <input type="string" name="price" class="form-control" placeholder="Enter price">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <label  class="font-weight-bolder text-dark">Product Image</label>
                        <input type="file" name="image[]" multiple class="form-control">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Quantity</label>
                        <input type="string" name="quantity" class="form-control" placeholder="Enter price">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Trending</label><br>
                        <input type="checkbox" name="trending" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Status</label><br>
                        <input type="checkbox" name="status" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Meta-Title</label>
                        <input type="string" name="meta_title" class="form-control">                
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Meta-Keyword</label>
                        <textarea name="meta_keyword" rows="4" class="form-control"></textarea>                      
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label  class="font-weight-bolder text-dark">Meta-Description</label>
                        <textarea name="meta_description" rows="4" class="form-control"></textarea>                      
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

</html><?php /**PATH E:\Autozone\resources\views/admin/addautopart.blade.php ENDPATH**/ ?>