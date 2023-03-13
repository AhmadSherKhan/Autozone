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

<body class="">
<div class="wrapper " >
    <div class="sidebar" data-color="orange">
  
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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Service Request</a>
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
                @if (Route::has('login'))
                @auth
                  <a class="dropdown-item" href="{{ url('/dashboard') }}" >
                    <i class="fas fa-user padd_right" aria-hidden="true"></i>
                    {{ Auth::user()->name }}
                  </a>
                  <a class="dropdown-item" href="{{ url('/logout') }}" >
                    <i class="fas fa-user padd_right" aria-hidden="true"></i>
                    Logout
                  </a>
                @endauth
                @endif
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
            <div class="servreq">
      <div class="heading">Customer Service Requests</div>
    <div class="row">
      <div class="col-sm-12">
        <!-- <div class="table-responsive"> -->
          <div class="table-responsive-xl">
        <table class="table">
          <thead>
            <tr>
              <th scop="col" style="font-weight:bold;">Id</th>
              <th scop="col" style="font-weight:bold;">Name</th>
              <th scop="col" style="font-weight:bold;">Contact</th>
              <th scop="col" style="font-weight:bold;">Email</th>
              <th scop="col" style="font-weight:bold;">Address</th>
              <th scop="col" style="font-weight:bold;">VehicleName</th>
              <th scop="col" style="font-weight:bold;">RegistrationNo</th>
              <th scop="col" style="font-weight:bold;">Model</th>
              <th scop="col" style="font-weight:bold;">ServiceType</th>
              <th scop="col" style="font-weight:bold;">Type</th>
              <th scop="col" style="font-weight:bold;">Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($servreqs as $sli)
           <tr>
            <th>{{ $sli->id }}</th>
            <td>{{ $sli->Name}}</td>
            <td>{{ $sli->Contact}}</td>
            <td>{{ $sli->Email}}</td>
            <td>{{ $sli->Address}}</td>
            <td>{{ $sli->VehicleName}}</td>
            <td>{{ $sli->RegNo}}</td>
            <td>{{ $sli->Model}}</td>
            <td>{{ $sli->ServiceType}}</td>
            <td>{{ $sli->Type}}</td>
            <td>
              <a href="{{ url('/sedit', $sli->id) }}" class="btn btn-info btn-sm mb-3">Edit</a>
              <a href="{{ url('/delete', $sli->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
           </tr> 
           @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
   </div>
           
          </div>
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

</html>