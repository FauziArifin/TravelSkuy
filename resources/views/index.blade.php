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
            <a class="btn btn-primary" href="/create">CREATE YOUR TRIP</a>
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
            <img class="img-fluid" src="{{asset('style/images/personal.jpeg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">Personal Trip</h3>
            <p>The perfect travel package if you want to travel alone and make new friends.</p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">New travel experience</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Make new friends</div>
              </li>
            </ul>
            <p class="price">Starting at <span>Rp100.000,00/Person</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#project-1">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="{{asset('style/images/family.jpg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">Family Trip</h3>
            <p>The best travel package if you want to travel with your family and save on travel costs</p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">More cost-effective</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Travel more planned</div>
              </li>
            </ul>
            <p class="price">Starting at <span>Rp85.000,00/Person</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#project-2">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="{{asset('style/images/follow.jpg')}}" alt="alternative">
          </div>
          <div class="card-body">
            <h3 class="card-title">See Existing Travel</h3>
            <p>This travel package is for those of you who are confused about where to go, see the existing travel list</p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">New experience</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Increase travel insight</div>
              </li>
            </ul>
            <p class="price">Starting at <span>Rp100.000,00/Person</span></p>
          </div>
          <div class="button-container">
            <a class="btn-solid-reg popup-with-move-anim" href="#project-3">DETAILS</a>
          </div> <!-- end of button-container -->
        </div>
        <!-- end of card -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->

<!-- Gallery -->
<div id="gallery" class="filter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">Gallery</div>
        <h2>Some Travel Photos</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Filter -->
        <div class="button-group filters-button-group">
          <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
          <a class="button" data-filter=".gunung"><span>MOUNTAIN</span></a>
          <a class="button" data-filter=".desa"><span>SUBURBAN</span></a>
          <a class="button" data-filter=".hutan"><span>FOREST</span></a>
          <a class="button" data-filter=".pantai"><span>BEACH</span></a>
          <a class="button" data-filter=".kota"><span>CITY</span></a>
        </div> <!-- end of button group -->
        <div class="grid">
          <div class="element-item pantai">
            <a class="popup-with-move-anim" href="#tengahlaut"><div class="element-item-overlay"><span>Tengah Laut</span></div><img src="{{asset('style/images/project-1.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item desa pantai">
            <a class="popup-with-move-anim" href="#pgrdanau"><div class="element-item-overlay"><span>Pinggir Danau</span></div><img src="{{asset('style/images/project-2.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item desa gunung">
            <a class="popup-with-move-anim" href="#jlngunung"><div class="element-item-overlay"><span>Jalan Pegunungan</span></div><img src="{{asset('style/images/project-3.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item gunung">
            <a class="popup-with-move-anim" href="#pegunungan"><div class="element-item-overlay"><span>Pegunungan</span></div><img src="{{asset('style/images/project-4.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item hutan">
            <a class="popup-with-move-anim" href="#tghhutan"><div class="element-item-overlay"><span>Tengah Hutan</span></div><img src="{{asset('style/images/project-5.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item pantai hutan">
            <a class="popup-with-move-anim" href="#danau"><div class="element-item-overlay"><span>Danau</span></div><img src="{{asset('style/images/project-6.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item hutan gunung">
            <a class="popup-with-move-anim" href="#htngunung"><div class="element-item-overlay"><span>Hutan Pegunungan</span></div><img src="{{asset('style/images/project-7.jpg')}}" alt="alternative"></a>
          </div>
          <div class="element-item hutan">
            <a class="popup-with-move-anim" href="#hutan"><div class="element-item-overlay"><span>Hutan</span></div><img src="{{asset('style/images/project-8.jpg')}}" alt="alternative"></a>
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
<div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/personal.jpeg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>Personal Trip</h3>
      <hr class="line-heading">
      <p>The perfect travel package if you want to travel alone and make new friends.</p>
      <div class="testimonial-container">
        <p class="testimonial-text">Need an itinerary for yourself? TravelSkuy will help you find travel partners who have the same destinations as you so you can save your costs with the sharing price feature</p>
        <p class="testimonial-author">Starting at <span>Rp100.000,00/Person</span></p>
      </div>
      <a class="btn-solid-reg" href="#your-link">BOOK NOW</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/family.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>Family Trip</h3>
      <hr class="line-heading">
      <p>The best travel package if you want to travel with your family and save on travel costs</p>
      <div class="testimonial-container">
        <p class="testimonial-text">Need an itinerary for you and your family? TravelSkuy will help you find travel partners who have the same destinations as you so you can save your costs with the sharing price feature and travel more planned</p>
        <p class="testimonial-author">Starting at <span>Rp85.000,00/Person</span></p>
      </div>
      <a class="btn-solid-reg" href="#your-link">BOOK NOW</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-8">
      <img class="img-fluid" src="{{asset('style/images/follow.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
    <div class="col-lg-4">
      <h3>See Existing Travel</h3>
      <hr class="line-heading">
      <p>This travel package is for those of you who are confused about where to go, see the existing travel list</p>
      <div class="testimonial-container">
        <p class="testimonial-text">Confused where to go on vacation? TravelSkuy will help you find travel lists that have been made by other people so that you get ideas for vacation destinations.</p>
        <p class="testimonial-author">Starting at <span>Rp100.000,00/Person</span></p>
      </div>
      <a class="btn-solid-reg" href="#your-link">BOOK NOW</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="pegunungan" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-4.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="tengahlaut" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-1.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="pgrdanau" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-2.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="jlngunung" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-3.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="tghhutan" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-5.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="danau" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-6.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="htngunung" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-7.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="hutan" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <img class="img-fluid" src="{{asset('style/images/project-8.jpg')}}" alt="alternative">
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="login" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="row">
    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    <div class="col-lg-15">
      <form id="contactForm" data-toggle="validator" data-focus="false">
        <div class="form-group">
          <input type="text" class="form-control-input" id="cname" required>
          <label class="label-control" for="cname">Name</label>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control-input" id="cemail" required>
          <label class="label-control" for="cemail">Email</label>
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
          <h2>Get In Touch With Us</h2>
          <p>Feel free to contact us by filling in the form on the side if you have any questions about us</p>
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
