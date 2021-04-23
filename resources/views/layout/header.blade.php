<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container-fluid d-flex align-items-center">

          <div class="logo mr-auto">
              <h1 class="text-light">
                  <a href="{{ asset('/') }}"><span>
                          <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt=""
                              style="min-height: 50px; width: auto;">
                      </span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="{{ asset('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav class="nav-menu d-none d-lg-block">
              <ul>

                  {{-- <li class="active"><a href="{{ asset('/') }}">HOME</a></li> --}}
                  <li><i class="fas fa-bars" onclick="openNav()"></i></li>
                  
              </ul>
          </nav><!-- .nav-menu -->
        
            
            
           

      </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->