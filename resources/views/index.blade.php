@extends('layout/main')


@section('title', 'Travel Skuy')
@section('style_navbar')
<link href="{{asset('style/css/styles.css')}}" rel="stylesheet">
@endsection
@section('container')


<!-- Header -->
<header id="header" class="header">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-container">
            <h1>DISCOVER NEW <span id="js-rotating">PLACES, FRIENDS, EXPERIENCES</span></h1>
            <p class="p-heading p-large">Travel with us, find new friends and whole new holiday experiences you've never felt.</p>
            <a class="btn-solid-lg page-scroll" href="#package">BOOK NOW</a>
            <a class="btn btn-primary" href="/createTrip">CREATE YOUR TRIP</a>
          </div>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Intro -->
<div id="intro" class="basic-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="text-container">
          <div class="section-title">THE NEW WAY OF TRAVELING</div>
          <h2>Want To Travel At a Cheaper Cost?</h2>
          <p>Now you can travel at a lower cost with the price sharing feature on Travel Skuy.</p>
          <p class="testimonial-text">"We want people who have a hobby of traveling to continue to do their hobby without worrying about travel costs incurred."</p>
          <div class="testimonial-author">Fauzi Arifin - Founder</div>
        </div> <!-- end of text-container -->
      </div> <!-- end of col -->
      <div class="col-lg-7">
        <div class="image-container">
          <img class="img-fluid" src="{{asset('style/images/intro-office.jpg')}}" alt="alternative">
        </div> <!-- end of image-container -->
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->

<!-- Services -->
<div id="package" class="cards-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">TRAVEL LIST</div>
        <h2>Choose Your Travel Packages</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="{{asset('style/images/bandung.jpg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">Bandung</h3>
            <p>List of trips to the city of Bandung.</p>

            <p class="price">Trip to Bandung <br><span>Check the list</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#bandung">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="{{asset('style/images/bali.jpg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">Bali</h3>
            <p>List of trips to the city of Bali.</p>
            <p class="price">Trip to Bali <br><span>Check the list</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#bali">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="{{asset('style/images/kebumen.jpg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">Kebumen</h3>
            <p>List of trips to the city of Kebumen.</p>
            <p class="price">Trip to Kebumen <br><span>Check the list</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#kebumen">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->

<!-- Articles -->
<div id="article" class="filter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">Articles</div>
        <h2>Welcome Travelers! Here's Some Travel Articles</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Filter -->
        <div class="button-group filters-button-group">
          <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
          <a class="button" data-filter=".domestikdes"><span>DOMESTIC DESTINATIONS</span></a>
          <a class="button" data-filter=".highlight"><span>TRAVEL HIGHLIGHT</span></a>
          <a class="button" data-filter=".idea"><span>TRAVEL IDEAS</span></a>
          <a class="button" data-filter=".interdes"><span>INTERNATIONAL DESTINATIONS</span></a>
        </div> <!-- end of button group -->
        <div class="grid">
          <div class="element-item domestikdes">
            <a class="popup-with-move-anim" href="#cirebon"><div class="element-item-overlay"><span>Liburan di Cirebon? <br>Coba Deh Menginap di Sini</span></div><img src="{{asset('style/images/news1.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item highlight">
            <a class="popup-with-move-anim" href="#pik"><div class="element-item-overlay"><span>Ada Kebun Hijau Instagramable di Tengah PIK</span></div><img src="{{asset('style/images/news2.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item domestikdes idea">
            <a class="popup-with-move-anim" href="#garut"><div class="element-item-overlay"><span>4 Wisata Alam untuk Foto-foto Estetik di Garut</span></div><img src="{{asset('style/images/news3.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item interdes idea">
            <a class="popup-with-move-anim" href="#masjidinter"><div class="element-item-overlay"><span>Berencana Keliling Asia? Wajib Mampir ke 3 Masjid Terindah di Asia Ini</span></div><img src="{{asset('style/images/news4.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item interdes">
            <a class="popup-with-move-anim" href="#hawaii"><div class="element-item-overlay"><span>Main ke Pulau Ini Bakal Disambut Ribuan Ayam Liar</span></div><img src="{{asset('style/images/news5.jpg')}}" alt="alternative"></a>
          </div>
        </div> <!-- end of grid -->
        <!-- end of filter -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->


<!-- Project Lightboxes -->
<!-- Lightbox -->
<div id="bandung" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/bandung.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>List of trips to the city of Bandung.</h3>
      <hr class="line-heading">
      <p>Trip for Sunday, 17 January 2021.</p>
      <a class="btn-solid-reg" href="/create">JOIN TRIP</a> <a class="btn-outline-reg mfp-close as-button" href="#package">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="bali" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/bali.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>List of trips to the city of Bali.</h3>
      <hr class="line-heading">
      <p>Trip for Sunday, 17 January 2021.</p>
      <a class="btn-solid-reg" href="/create">JOIN TRIP</a> <a class="btn-outline-reg mfp-close as-button" href="#package">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="kebumen" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/kebumen.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>List of trips to the city of Kebumen.</h3>
      <hr class="line-heading">
      <p>Trip for Sunday, 17 January 2021.</p>
      <a class="btn-solid-reg" href="/create">JOIN TRIP</a> <a class="btn-outline-reg mfp-close as-button" href="#package">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="masjidinter" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-7">
      <img class="img-fluid" src="{{asset('style/images/news4.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>Berencana Keliling Asia? Wajib Mampir ke 3 Masjid Terindah di Asia Ini</h3>
      <hr class="line-heading">
      <p>Jakarta - Keliling Asia adalah liburan impian bagi banyak orang. Bagi traveler Muslim, mimpi ini sekaligus menjadi kesempatan untuk melihat megahnya rumah Allah SWT di belahan bumi lain.</p>
      <div class="testimonial-container">
        <p class="testimonial-text">
          1. Masjid Sultan Omar Ali, Bandar Sri Begawan.<br>
          Masjid bersejarah ini adalah bangunan tertinggi di Bandar Sri Begawan. Selain bangunannya yang megah, masjid ini juga memiliki sebuah laguna dan kapal dari batu yang merupakan peninggalan sejarah kerajaan Brunei sejak abad ke-16.<br><br>
          2. Masjidil Haram, Mekah<br>
          Betul, masjid suci ini berada di kawasan Asia. Jadi, Anda bisa memasukkannya ke dalam itinerary perjalanan. Masjid ini selalu berkembang semakin megah untuk mengakomodir hingga 1,5 juta jamaah setiap harinya. Ada 129 pintu masuk di Masjidil Haram dan semuanya punya nama yang berbeda-beda.<br><br>
          3. Masjid Syekh Zayed, Abu Dhabi<br>
          Sebelum tiba di masjid ini saja, Anda sudah bisa mengagumi keindahannya yang tampak dari kejauhan. Masjid ini merupakan pemandangan ikonik di Abu Dhabi. Dengan 82 kubah, lampu gantung berlapis emas murni, dan karpet handmade terbesar di dunia, kemegahannya membuat banyak orang terpana. Masjid ini pun menjadi salah satu masjid yang terbuka untuk pengunjung non-Muslim.</p>
          <p class="testimonial-author">Internasional</span></p>
        </div>
        <a class="btn-outline-reg mfp-close as-button" href="#article">BACK</a>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="cirebon" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
      <div class="col-lg-7">
        <img class="img-fluid" src="{{asset('style/images/news1.jpg')}}" alt="alternative">
      </div> <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan di Cirebon? Coba Deh Menginap di Sini</h3>
        <hr class="line-heading">
        <p>Cirebon - Banyak akomodasi menarik yang bisa dipilih di Cirebon. Salah satunya adalah resor berkonsep perdesaan ini. Namanya Desa Alamanis.</p>
        <div class="testimonial-container">
          <p class="testimonial-text">Sesuai namanya resor ini berdiri dengan konsep perdesaan dimana membawa tamunya merasakan kembali asrinya alam perdesaan. Serta mereka ingin membawa tamu-tamu ke dalam nuansa nostalgia kampung halaman.<br><br>

            Diintip dari websitenya, resor ini memiliki 43 kamar dengan konsep berbeda, menampilkan aksen etnik tradisional khas perdesaan Indonesia. Mereka menawarkan beranda dengan pemandangan asri perdesaan, dilengkapi dengan kamar mandi pribadi terbuka dengan fasilitas lengkap.
            Untuk menuju ke resor ini jika traveler menggunakan mobil, nanti keluar saja dari pintu tol Ciperna, lalu belok ke arah kuningan sejauh 1 Km. Bagi yang menggunakan kereta, atur saja penjemputan dengan pihak resor ke Stasiun Kejaksaan Cirebon.<br><br>

            Bisa dikatakan lokasi resor mudah dijangkau. Jaraknya hanya 5 menit dari pintu Tol Ciperna dan 10 menit dari pusat kota.

            Teruntuk fasilitas resor, kamu bisa nih mencicipi cita rasa kuliner khas di Rumah Makan Lawang Rasa. Beragam menu kuliner unggulan resto yang siap memanjakan lidah para pecinta kuliner Nusantara. Tentu saja kamu makan ditemani dengan panorama alam Desa Alamanis Resort Vila yang indah.
            Berapa harga menginap di sini? Dari websitenya, adapun harga per malam menginap di Desa Alamanis mulai dari Rp 750.000 - Rp 1.750.000.</p>
            <p class="testimonial-author">Cirebon</span></p>
          </div>
          <a class="btn-outline-reg mfp-close as-button" href="#article">BACK</a>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="pik" class="lightbox-basic zoom-anim-dialog mfp-hide">
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-7">
          <img class="img-fluid" src="{{asset('style/images/news2.jpg')}}" alt="alternative">
        </div> <!-- end of col -->
        <div class="col-lg-4">
          <h3>Ada Kebun Hijau Instagramable di Tengah PIK</h3>
          <hr class="line-heading">
          <p>Jakarta - Kawasan Pantai Indah Kapuk menjadi primadona baru bagi traveler pencinta sepeda dan pemburu konten. Di sana juga ada kebun hijau ala perkotaan.</p>
          <div class="testimonial-container">
            <p class="testimonial-text">Berlokasi di Pulau Maju atau Golf Island yang masih masuk kawasan Pantai Indah Kapuk atau yang biasa disingkat PIK di Jakarta Utara, kebun hijau itu adalah Urban Farm PIK.<br><br>
              Lokasinya memang sedikit tersembunyi di sisi kiri jembatan menuju PIK2, tapi tempat yang masuk satu komplek dengan restoran GIOI dan Toby's Estatet itu begitu hijau dan sulit untuk dilewatkan.<br><br>
              Diresmikan pada 20 November 2020 silam, kebun yang menyatu dengan kawasan kuliner ini dengan mudah menyita perhatian para pecinta tumbuhan yang tengah trend.<br><br>
              Diketahui, Urban Farm ini merupakan ide dari Natalia yang tak lain adalah CEO mall dan hotel div 2 Agung Sedayu Group. Di kebun itu sendiri tersedia aneka tanaman sayur, buah hingga rempah. Selain sebagai penghijauan, hasil kebun ini juga dimanfaatkan untuk jadi campuran masakan.<br><br>
              Selain menghijaukan Pulau Maju, Urban Farm PIK juga menjual sejumlah tumbuhan hingga pot lewat Kinetik Farm yang juga berada dalam satu komplek yang sama.<br><br>
              Tak hanya tumbuhan, traveler juga dapat menjumpai sepeda lipat yang juga dijual bagi pecinta sepeda. Biasanya mereka buka hingga pukul 19.00 WIB, mengingat PSBB yang diterapkan di DKI Jakarta.<br><br>
              Ke depannya, Urban Farm PIK ini akan diperluas dengan area kebun yang lebih besar dan juga tenant makanan yang lebih banyak. Meskipun berada di area pulau reklamasi yang terkesan panas, kamu akan dimanjakan dengan semilir angin yang bikin makin betah.<br><br>
              Untuk bisa masuk ke kawasan Urban Farm PIK ini, kamu tidak dikenakan biaya masuk alias gratis. Hanya jika ingin menikmati kopi atau makanan yang ada di sana, tentu kamu perlu mengeluarkan uang. Hitung-hitung ongkos foto Instagramable.<br><br></p>
              <p class="testimonial-author">Jakarta</span></p>
            </div>
            <a class="btn-outline-reg mfp-close as-button" href="#article">BACK</a>
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="garut" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
          <div class="col-lg-7">
            <img class="img-fluid" src="{{asset('style/images/news3.jpg')}}" alt="alternative">
          </div> <!-- end of col -->
          <div class="col-lg-4">
            <h3>4 Wisata Alam untuk Foto-foto Estetik di Garut</h3>
            <hr class="line-heading">
            <p>Jakarta - Garut memang memiliki destinasi wisata yang cukup banyak. Akan tetapi, ini rangkuman destinasi wisata Garut yang punya panorama indah nan instagramble.</p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                1. Leuwi Jurig<br>
                Leuwi Jurig cocok untuk Traveler yang mau foto-foto keren nan instagramable. Airnya masih jernih dan memantulkan warna hijau kebiruan, serta dihimpit oleh tebing di kanan dan kiri bisa menjadi latar belakang objek berswafoto.<br>
                Fasilitas mendasar untuk Leuwi ini pun sudah cukup baik karena tersedia kamar mandi, mushola, dan tentunya tempat parkir.<br><br>
                2. Leuwi Jubleg<br>
                Berada di titik lokasi Garut Selatan, Leuwi Jubleg tidak terlalu berjauhan dengan Leuwi Jurig. Kecantikannya pun tidak jauh berbeda! Leuwi Jubleg yang masih tidak banyak diketahui orang memiliki air jernih yang serupa dengan Leuwi Jurig.<br>
                Bedanya, bentuk Leuwi Jubleg tergolong unik karena terdapat air terjun kecil yang dikelilingi oleh tebing. Bentuknya sedikit menyerupai lingkaran yang terputus dan ke bawahnya mengalir air deras, mirip dengan jubleg atau lesung. Inilah yang menjadikan Leuwi Jubleg memiliki khas tersendiri.<br><br>
                3. Bukit Teletubbies<br>
                Beda dengan dua destinasi sebelumnya, Garut punya juga lho tempat wisata yang hijau-hijau. Nggak perlu lagi deh jauh-jauh ke Bali untuk lihat Bukit Teletubbies karena Garut juga punya!<br>
                Cikal bakalnya dari lahan pertanian dan melihat potensi wisata dari pemandangan yang disuguhkan, bukit ini dijadikan destinasi wisata. Untuk masuk ke situs wisata, Traveler harus datang melalui Pantai Sayang Heulang dan mengambil jalur kiri atau utara.<br><br>
                4. Bukit Pilar Angin<br>
                Destinasi yang belum banyak diketahui ini memiliki pemandangan yang bikin menganga, biru muda dan cahaya matahari dengan padang rumput dijadikan satu. Di sini, Traveler bisa foto ala-ala siluet ketika matahari tenggelam atau terbit.<br>
                Untuk lokasinya, Bukit Pilar Angin terletak di dekat Bukit Cikajar, Kecamatan Cikelet.<br><br>
              </p>
              <p class="testimonial-author">Garut</span></p>
            </div>
            <a class="btn-outline-reg mfp-close as-button" href="#article">BACK</a>
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="hawaii" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
          <div class="col-lg-7">
            <img class="img-fluid" src="{{asset('style/images/news5.jpg')}}" alt="alternative">
          </div> <!-- end of col -->
          <div class="col-lg-4">
            <h3>Main ke Pulau Ini Bakal Disambut Ribuan Ayam Liar</h3>
            <hr class="line-heading">
            <p>Kauai, Hawaii - Bila Jepang punya pulau kucing, Hawaii punya pulau ayam. Disebut demikian karena di sana hidup ribuan ekor ayam liar yang suka mendekati turis.</p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                Pulau ayam ini bernama asli Pulau Kauai. Di sana, ayam-ayam sangat antusias mendekati turis, mulai dari Pantai Lumbahai, stasiun pengisian bahan bakar, hingga area parkir Pulau Kauai.<br><br>
                Dilansir dari Oddity Central, mereka biasanya mendatangi turis untuk meminta makanan. Namun mereka tak rewel soal makanan alias doyan makan apa saja.<br><br>
                Mereka tak keberatan menyantap sisa makanan, makanan kucing, dan makanan-makanan lain yang diberikan turis. Para ayam ini tampaknya sudah dapat beradaptasi dengan lingkungan yang didominasi manusia itu.<br><br>
                Fenomena ribuan ayam liar hidup bebas di Pulau Kauai ini sudah berlangsung puluhan tahun. Namun jika ditanya penyebabnya, belum ada jawaban pasti.<br><br>
                Hanya saja penduduk lokal akan mengatakan, ayam itu berkeliaran bebas sejak terjadi badai Iwa pada 1982 dan badai Iniki tahun 1992 yang menghancurkan ratusan kandang ayam. Saat itu, ayam dibiarkan saja lepas liar dan berkembang biak.<br><br>
                Meskipun hidup liar, ayam-ayam ini tetap dilindungi dan menjadi bagian penting bagi masyarakat Kauai. Alih-alih menyakiti ayam bila mereka mengganggu, masyarakat biasanya akan menghindari mereka.</p>
                <p class="testimonial-author">Internasional</span></p>
              </div>
              <a class="btn-outline-reg mfp-close as-button" href="#article">BACK</a>
            </div> <!-- end of col -->
          </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->

        <!-- Lightbox -->
        <div id="login" class="lightbox-basic zoom-anim-dialog mfp-hide">
          <div class="row d-flex justify-content-center">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-md-5">
              <h2 class="text-center">LOGIN</h2>
              <form id="contactForm" data-toggle="validator" data-focus="false">
                <div class="form-group">
                  <input type="email" class="form-control-input" id="cemail" required>
                  <label class="label-control" for="cemail">Email</label>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control-input" id="cpass" required>
                  <label class="label-control" for="cpass">Password</label>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control-submit-button">LOGIN</button>
                </div>
                <div class="form-message">
                  <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                </div>
              </form>
            </div> <!-- end of col -->
          </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of project lightboxes -->

        <!-- member -->
        <div id="team" class="slider">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2>Our Great Team Member</h2>
                <p class="p-heading">These are the great people who are behind the creation of this great project, without them this project would not be complete.</p>
              </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
              <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                  <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                      <!-- Slide -->
                      <div class="swiper-slide">
                        <div class="card">
                          <img class="card-image" src="{{asset('style/images/fauzi.jpg')}}" alt="alternative">
                          <div class="card-body">
                            <div class="testimonial-author">Fauzi Arifin - Founder
                              <br>
                              <span class="social-icons">
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                  </a>
                                </span>
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                  </a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end of swiper-slide -->
                      <!-- end of slide -->

                      <!-- Slide -->
                      <div class="swiper-slide">
                        <div class="card">
                          <img class="card-image" src="{{asset('style/images/ria.png')}}" alt="alternative">
                          <div class="card-body">
                            <div class="testimonial-author">Ria Rahmawati - Co-Founder
                              <br>
                              <span class="social-icons">
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                  </a>
                                </span>
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                  </a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end of swiper-slide -->
                      <!-- end of slide -->

                      <!-- Slide -->
                      <div class="swiper-slide">
                        <div class="card">
                          <img class="card-image" src="{{asset('style/images/profile.png')}}" alt="alternative">
                          <div class="card-body">
                            <div class="testimonial-author">Leonard - UI/UX
                              <br>
                              <span class="social-icons">
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                  </a>
                                </span>
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                  </a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end of swiper-slide -->
                      <!-- end of slide -->

                      <!-- Slide -->
                      <div class="swiper-slide">
                        <div class="card">
                          <img class="card-image" src="{{asset('style/images/profile.png')}}" alt="alternative">
                          <div class="card-body">
                            <div class="testimonial-author">Jonathan Bonar - Designer
                              <br>
                              <span class="social-icons">
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                  </a>
                                </span>
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                  </a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end of swiper-slide -->
                      <!-- end of slide -->

                      <!-- Slide -->
                      <div class="swiper-slide">
                        <div class="card">
                          <img class="card-image" src="{{asset('style/images/profile.png')}}" alt="alternative">
                          <div class="card-body">
                            <div class="testimonial-author">Rizky Aditya Nugroho - UI/UX
                              <br>
                              <span class="social-icons">
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                  </a>
                                </span>
                                <span class="fa-stack">
                                  <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                  </a>
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div> <!-- end of swiper-slide -->
                      <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                  </div> <!-- end of swiper-container -->
                </div> <!-- end of sliedr-container -->
                <!-- end of card slider -->

              </div> <!-- end of col -->
            </div> <!-- end of row -->
          </div> <!-- end of container -->
        </div> <!-- end of slider -->
        <!-- end of member -->


        <!-- Contact -->
        <div id="contact" class="form-2">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="text-container">
                  <div class="section-title">CONTACT</div>
                  <h2 class="hkotak">Get In Touch With Us</h2>
                  <p class="pkotak">Feel free to contact us by filling in the form on the side if you have any questions about us.<br>
                    Interested in becoming a tour guide? Contact the contact below.</p>
                    <ul class="list-unstyled li-space-lg">
                      <li class="address"><i class="fas fa-map-marker-alt"></i>1st Telekomunikasi Street, Bandung City, West Java 40257, ID</li>
                      <li><i class="fas fa-phone"></i><a href="tel:003024630820">+62 838 7908 1890</a></li>
                      <li><i class="fas fa-phone"></i><a href="tel:003024630820">+62 822 1873 8143</a></li>
                      <li><i class="fas fa-envelope"></i><a href="mailto:travel.skuy1@gmail.com">travel.skuy1@gmail.com</a></li>
                    </ul>
                  </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                </div> <!-- end of col -->
              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div> <!-- end of form-2 -->
          <!-- end of contact -->

          @endsection
