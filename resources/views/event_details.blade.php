<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href="{{ asset('css/style8.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <header class="site-header" style="background-color: blue">
        <div class="header-bar" style="background-color: blue">
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



    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div" style="margin-top: 150px">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width:450px; height:450px" class="img-fluid" alt="category" /><a >
                    </div>
                </div>
                <div class = "product-div-right">
                    <p class="small text-dark">{{ $event->address }}</p>
                    <span class = "product-name" style="color: black">{{ $event->title }} </span>
                    <div style="display: flex; gap:250px">
                        <span class = "product-price" style="color: red; text-size:200px">{{ $event->price }} Dhs</span>
                        <span class="product-price" style="color: green; font-size: 15px;">{{ $event->placeNumber }} Place</span>
                    </div>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star" style="color: goldenrod"></i></span>
                        <span><i class = "fas fa-star" style="color: goldenrod"></i></span>
                        <span><i class = "fas fa-star" style="color: goldenrod"></i></span>
                        <span><i class = "fas fa-star" style="color: goldenrod"></i></span>
                        <span><i class = "fas fa-star" style="color: goldenrod"></i></span>
                        <span><i class = "fas fa-star-half-alt" style="color: goldenrod"></i></span>
                        <span style="color: black">(350 ratings)</span>
                    </div>
                    <p class = "product-description" style="color: black">{{ $event->description }}</p>
                    <div style="display: flex;  gap:290px" >
                        <span class = "event-category" style="color: black ">{{ $event->category->name }}</span>
                        <span class="product-date" style="color :black">{{ $event->date }}</span>
                    </div>
                    <div class = "btn-groups">
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src="{{ asset('js/myjs/custom.js') }}"></script>
</body>
</html>