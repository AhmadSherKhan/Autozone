@include('head')
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="/home"><i class="fas fa-car"></i>Auto<span>zone</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/home') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <div class="dropdown nav-link  drdo">
                                    <button class="btn-primary nav-link bg-transparent dropdown-toggle " type="button" data-toggle="dropdown">Services
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li ><a href="/rentacar" class="dropdown-item bg-transparent">Rent a Car</a></li>
                                                    <li ><a href="/servicelist" class="dropdown-item bg-transparent">Service Request</a></li>
                                                    <li ><a href="/autoparts" class="dropdown-item bg-transparent">Buy Parts</a></li>
                                                </ul>
                                                </div>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/contactussec">Contact Us</a>
                              </li>
                              @if (Route::has('login'))

                              @auth

                              <li class="nav-item">
                                 <a class="nav-link active" href="{{ url('/dashboard') }}" ><i class="fas fa-user padd_right" aria-hidden="true"></i>{{ Auth::user()->name }}</a>
                              </li>

                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/logout') }}" ><i class="fas fa-user padd_right" aria-hidden="true"></i>Logout</a>
                              </li>

                              @else

                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}" ><i class="fas fa-user padd_right" aria-hidden="true"></i>Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user padd_right" aria-hidden="true"></i>Register</a>
                              </li>
                              @endauth
                              @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>