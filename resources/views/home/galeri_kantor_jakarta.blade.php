<section id="portfolio"  class="section-bg">
   <!-- Page Header Start -->
   <div class="page-header">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <h2>KANTOR JAKARTA</h2>
               </div>
           </div>
       </div>
   </div>

    <div class="container">     
      <div class="row portfolio-container">

        @foreach ($galeris as $galeri)
            
        
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('public/upload/image/'.$galeri->gambar)}}" class="img-fluid" alt="">
              <a href="{{asset('public/upload/image/'.$galeri->gambar)}}" data-lightbox="portfolio" data-title=" {{$galeri->judul_galeri}} " class="link-preview" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">

              <h4><a href="#">{{ strip_tags($galeri->judul_galeri)}}</a></h4>
            </div>
          </div>
        </div>

        @endforeach
        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Web 3</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">App 2</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Card 2</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Web 2</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">App 3</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Card 1</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Card 3</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="fas fa-eye"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#">Web 1</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- #portfolio -->