<!-- ======= Hero Section ======= -->
<?php
use Illuminate\Support\Facades\DB;
use App\Galeri_model;
// Produk
$galeri             = new Galeri_model();
$galeris           = $galeri->galeri_csr();

?>

<section id="details" class="details">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>CORPORATE SOCIAL RESPONSIBILITY</h2>
                </div>
            </div>
        </div>
    </div>
    <section id="portfolio" class="section-bg">
    <div class="container">
        <div class="row content align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('public/upload/image/csr-1.jpg') }}" alt="" class="img-fluid img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                    <h4>Program Penghijauan dan Lingkungan</h4>
                    <p>Konsep dasar program ini adalah memupuk kesadaran sekaligus perilaku nyata masyarakat mengenai betapa pentingnya melestarikan lingkungan hidup.</p>
                </div><!-- end messagebox -->
            </div><!-- end col -->

           
        </div>
        <div class="row content align-items-center">
           
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                    <h2>Program Pendidikan dan Pelatihan</h2>
                    <p>Pendidikan merupakan jembatan penting menuju kesejahteraan. Sayangnya, keterbatasan ekonomi 
                        seringkali menjadi penyebab utama bagi masyarakat sehingga kurang memperhatikan pendidikan.</p>

                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('public/upload/image/csr-2.jpg') }}" alt="" class="img-fluid img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->


        </div><!-- end row -->
        
    </div><!-- end container -->

    <!-- end about -->
    <!-- for_box -->
</section>

<!-- ======= Hero Section ======= -->

<section id="details" class="details">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>PEMEGANG SAHAM</h2>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row content align-items-center">
            <div class="col-xl-12 col-lg-12">
                <!-- Section Tittle -->
                <div class="section-title text-center mb-80">
                    <h2>KOMPOSISI PEMEGANG SAHAM</h2>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="row content align-items-center">
            <div class="col-md-12" data-aos="fade-right">
                <img src="{{ asset('public/upload/image/kepemilikan-saham.png') }}" class="center" alt="Responsive image">
            </div>
        </div>
        
        <div class="row content align-items-center">
            <div class="col-md-5" data-aos="fade-right">
                <img src="{{ asset('public/upload/image/parna_raya.png') }}" class="img-fluid" alt="" width="500" height="500">
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-left">
                <h1>PT PARNA RAYA</h1>
                <p>
                   PT PARNA RAYA adalah suatu badan usaha swasta nasional yang didirikan pada 7 Juni 1972
                   oleh Bapak Marihad Simon Simbolon dengan bidang usaha awal berupa transportasi darat yang berbekal
                   satu unit truk untuk pengiriman barang ke Pelabuhan Tanjung Priok di Jakarta.
                </p>
                <p>
                    Selanjutnya satu unit truk berkembang sampai membuahkan 125 truk semi-trailer dan tronton. Bisnis pengangkutan
                    pun mengalami perluasan dengan transportasi laut untuk pengiriman semen dan pupuk.
                </p>
                <p>
                    Selanjutnya satu unit truk berkembang sampai membuahkan 125 truk semi-trailer dan tronton. Bisnis pengangkutan
                    pun mengalami perluasan dengan transportasi laut untuk pengiriman semen dan pupuk.
                </p>
                <p>
                   Sampai di pertengahan tahun 1990-an PT Parna Raya mendirikan pabrik Amoniak (PT Kaltim Parna Industri)
                   melalui kerjasama antara PT Parna Raya dengan afiliasi PT Pupuk Kalimantan Timur dan sejumlah investor
                   asing dari Jepang.
                </p>
                <p>
                  Saat ini PT Parna Raya memiliki sejumlah anak perusahaan dan afiliasi dengan bidang transportasi darat,
                  transportasi laut, perdagangan umum, pengaliran gas melalui pipa, petrokimia, perhotelan, pertambangan,
                  energi, perkebunan sawit, dan bahan bakar.
                 </p>

                 <h5><b>Marching on the right path</b></h5>
                {{-- <ul>
                    <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul> --}}
            </div>
        </div>

        <div class="row content align-items-center">
            <div class="col-md-5" data-aos="fade-right">
                <img src="{{ asset('public/upload/image/marihad_simbolon.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-right">
                <h1><b>BAPAK MARIHAD SIMON SIMBOLON</b></h1>
                <p>
                   Bapak Marihad Simon Simbolon adalah seorang pengusaha swasta nasional yang mengawali kiprah bisnisnya
                   sejak usia belia pada awal tahun 1960-an. Berbekal tekad dan semangat untuk membangun bisnis, Bapak 
                   Marihad Simon Simbolon muda berjuang dengan 1 unit truk pertamanya sampai akhirnya berkembang menjadi ratusan
                   truk dan bahkan selanjutnya membuat diversifikasi bisnis melalui Parna Raya Group.
                </p>
                <p>
                    Impian untuk menjajaki hilirisasi sumber daya gas bumi, mendorong Beliau untuk membangun pabrik Amoniak
                    PT Kaltim Parna Industri.
                </p>
                <p>
                  Beliau tidak pernah berhenti berinovasi untuk mengembangkan bisnisnya dengan tujuan untuk tujuan kemakmuran 
                  stakeholder dan kemajuan bangsa dan Negara Indonesia.
                </p>
               
                {{-- <ul>
                    <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul> --}}
            </div>
        </div>
    </div><!-- end container -->

</section>

<section id="testimonials" class="testimonials" style="background: url({{ asset('public/upload/image/wana-khatulistiwa.jpg') }}) no-repeat fixed; background-size: cover;">
    {{-- <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
              <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
          </svg> --}}
        <div class="parallax section db parallax-off">
            <div class="container">
                <div class="section-title text-center">
                    <h1>Wana Khatulistiwa</h1>
                </div><!-- end title -->
    
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <p>Wana Khatulistiwa, Dengan lahan seluas 8 ha diresmikan dan dikelola KPI sejak tahun 2012 dan 
                                        hingga akhir tahun 2016 telah ditanami kurang lebih 3.500 pohon berbagai tanaman khususnya tanaman lokal 
                                        Kalimantan: Bangkirai, Ulin, Gaharu, Pulai, Meranti, Mahoni, juga berbagai tanaman buah lokal seperti Manggis, Lai, Rambutan, Durian, Wanyi, Pasak Bumi. </p>


                                        <p>Wana Khatulistiwa, Dengan lahan seluas 8 ha diresmikan dan dikelola KPI sejak tahun 2012 dan 
                                            hingga akhir tahun 2016 telah ditanami kurang lebih 3.500 pohon berbagai tanaman khususnya tanaman lokal 
                                            Kalimantan: Bangkirai, Ulin, Gaharu, Pulai, Meranti, Mahoni, juga berbagai tanaman buah lokal seperti Manggis, Lai, Rambutan, Durian, Wanyi, Pasak Bumi. </p>
                                        <p>Selain itu juga telah dibangun Gazebo seluas 6 x 4 meter, dengan memanfaatkan kayu ulin bekas dari pabrik dan dikerjakan secara swadaya oleh petugas jaga Hutan Kota. Diharapkan dengan adanya Gazebo dan kelengkapan koleksi tanaman ini akan menambah infrastruktur yang ada sehingga layak dikembangkan menjadi tempat belajar ekstrakulikuler siswa tentang tanaman asli Kalimantan. Direncanakan tahun 2017, koleksi tanaman akan ditambah 
                                            lagi 1000 pohon dengan fokus penambahan tanaman rawa dan tanaman herbal.</p>
                                            

                                </div>
                                <!-- end testi-meta -->
                            </div><!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->

                
            </div><!-- end container -->
        </div><!-- end section -->
    </section>

<section id="portfolio" class="section-bg">
    <div class="container">

        <div class="row portfolio-container">

            @foreach ($galeris as $galeri)


            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('public/upload/image/'.$galeri->gambar)}}" class="img-fluid" alt="">
                        <a href="{{asset('public/upload/image/'.$galeri->gambar)}}" data-lightbox="portfolio"
                            data-title=" {{$galeri->judul_galeri}} " class="link-preview" title="Preview"><i
                                class="fas fa-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">

                        <h4><a href="#">{{ strip_tags($galeri->judul_galeri)}}</a></h4>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section><!-- #portfolio -->
   