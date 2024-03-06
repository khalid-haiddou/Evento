<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/mycss/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/mycss/fontawesome-all.min.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/mycss/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>

<body>
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">EVENTO</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">ARTISTS</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#"></a></li>
                                <form action="">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search">
                                      <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                                <li><a href="#"></a></li>
                                <li><a href="{{ route('logout') }}">LOGOUT</a></li>
                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="hero-content" style="background: url('{{ asset('images/myimages/cover.jpg') }}') no-repeat;     background-size: cover; padding: 220px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <h2 style="font-family: 'Madimi One', sans-serif; font-size: 200px; color: #333; text-transform: uppercase; letter-spacing: 2px;">Hello world!</h2>

                        <div class="entry-meta-date">
                            11.09.2024
                        </div><!-- .entry-meta-date -->
                    </div><!-- .entry-header -->

                    <div class="countdown flex flex-wrap justify-content-between" data-date="2024/06/06">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Hours</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Minutes</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div><!-- .countdown-holder -->
                    </div><!-- .countdown -->
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="#" class="btn">Buy Tickets</a>
                        <a href="#" class="btn current">See Lineup</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>CATEGORIES</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{ asset('images/myimages/image-5.jpg') }}" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{ asset('images/myimages/box.jpg') }}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2> Shows</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{ asset('images/myimages/image-6.jpg') }}"  alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{ asset('images/myimages/box.jpg') }}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Songs</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{ asset('images/myimages/image-7.jpg') }}" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{ asset('images/myimages/box.jpg') }}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Galas</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{ asset('images/myimages/image-8.jpg') }}"  alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{ asset('images/myimages/box.jpg') }}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Sports</h2>
                            </div><!-- artist-single -->
                        </div><!-- the-complete-lineup-artists -->
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Events</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <section style="background-color: #eee;">
                <div class="container py-5">
                  <div class="row justify-content-center">
                    <!-- Event 1  Test -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->
                        <!-- CardT TEST DESIGN CARD  -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->

                        <!-- CardT TEST DESIGN CARD  -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->
                        <!-- CardT TEST DESIGN CARD  -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->
                        <!-- CardT TEST DESIGN CARD  -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                                  
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->
                        <!-- CardT TEST DESIGN CARD  -->
                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                        <div class="card" style="border-radius: 15px;">
                          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                              alt="category" />
                            <a href="#!">
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                              <div>
                                <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                <p class="small text-muted">PARIS</p>
                              </div>
                              <div>
                                  <p class="small text-muted">Music Festival</p>
                                <p class="small text-muted">20-22, 2024</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body pb-0 d-fex">
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                  <p><a style="color: green; font-size: 15px;">10,000</a></p>
                              </div>
                              <div class="d-flex justify-content-between">
                                  <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                              </div>
                          </div>
                          <hr class="my-0" />
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                  <!-- Action buttons -->
                                  <a href="#" class="btn btn-success btn-sm">Discover Now !</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- CardT end -->





                        <!-- Card1 end -->
                    <!-- Event 1  Test End -->
                  </div>
                </div>
              </section>
              
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last News</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">10 Festival Tips</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">New event calendar for this year</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#">By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- .content-wrapper -->
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>

    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>Evento</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">EVENTO</a>
                        </div><!-- entry-title -->

                        <div class="entry-mail">
                            <a href="#">SAYHELLO@EVENTO.COM</a>
                        </div><!-- .entry-mail -->

                        <div class="copyright-info">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Evanto 
                        </div><!-- copyright-info -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->

    <script type='text/javascript' src="{{ asset('js/myjs/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/masonry.pkgd.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/myjs/custom.js') }}"></script>
</body>
</html>
