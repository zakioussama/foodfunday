<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Color CSS -->
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/colors/orange.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('js/modernizer.js') }}"></script>
</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>

    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- Navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#our_team">Team</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#blooog">Blog</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#reservation">Reservation</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="book-btn-boob">Logout</button>
                                        </form>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- Banner Section -->
<div id="banner" class="banner full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h1>
                            Dinner with us 
                            <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span>
                            <span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span>
                        </h1>
                        <h2>Accidental appearances</h2>
                        <p>Experience unforgettable flavors, warm ambiance, and meaningful moments — all in one perfect place.</p>
                        <div class="book-btn">
                            <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                        </div>
                        <a href="#about">
                            <div class="mouse"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About Section -->
<div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <!-- About Text -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title"> About Us </h2>
                    <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                    <p>What began as a humble kitchen with a passion for food and hospitality quickly grew into a community favorite. We set out with one goal: to create a dining experience that feels just like home — only with better lighting and fewer dishes to wash.</p>

                    <p>Our founders believed that great meals bring people together. With that vision, we’ve crafted a space where flavors from around the world meet local favorites, served with a side of heart and soul. From cozy dinners to lively celebrations, every guest becomes part of our story.</p>

                    <p>We invite you to pull up a chair, savor every bite, and let your taste buds do the talking. Whether it’s your first visit or your hundredth, welcome to the table.</p>
                </div>
            </div>

            <!-- About Images -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="about-images">
                        <img class="about-main" src="{{ asset('images/about-main.jpg') }}" alt="About Main Image">
                        <img class="about-inset" src="{{ asset('images/about-inset.jpg') }}" alt="About Inset Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="special-menu pad-top-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center">Today's Special</h2>
                    <h5 class="title-caption text-center">
                        Handpicked with care and crafted by our chefs — explore today’s featured dishes, each made to surprise your senses and satisfy your cravings.
                    </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Grilled to perfection and served with herb butter, seasonal vegetables, and lemon zest.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{ asset('images/special-menu-1.jpg') }}" alt="Salmon Steak">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        ITALIAN PIZZA
                                        <div class="line"></div>
                                        <div class="dit-line">Wood-fired crust topped with fresh mozzarella, tomato basil sauce, and oregano.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{ asset('images/special-menu-2.jpg') }}" alt="Italian Pizza">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">A crisp medley of seasonal vegetables wrapped in flaky pastry, served with mint chutney.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{ asset('images/special-menu-3.jpg') }}" alt="Veg Roll">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Rich in flavor and omega-3s — our house favorite served with roasted potatoes.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{ asset('images/special-menu-1.jpg') }}" alt="Salmon Steak Repeat">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Crispy outside, hearty inside — a perfect plant-based treat for every appetite.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{ asset('images/special-menu-2.jpg') }}" alt="Veg Roll Repeat">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<!-- end special-menu -->
<!-- resources/views/home.blade.php -->
<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">Our Menu</h2>
                    <p class="title-caption text-center">
                        Explore our chef-curated menu featuring a variety of starters, hearty mains, indulgent desserts, and refreshing beverages — all crafted with the freshest ingredients.
                    </p>
                </div>
                <div class="tab-menu">
                    <div class="slider slider-nav">
                        <div class="tab-title-menu">
                            <h2>STARTERS</h2>
                            <p><i class="flaticon-canape"></i></p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>MAIN DISHES</h2>
                            <p><i class="flaticon-dinner"></i></p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>DESSERTS</h2>
                            <p><i class="flaticon-desert"></i></p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>DRINKS</h2>
                            <p><i class="flaticon-coffee"></i></p>
                        </div>
                    </div>

                    <div class="slider slider-single">
                        @foreach ($menuItems as $category => $items)
                            <div>
                                @foreach ($items as $item)
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="offer-item">
                                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-responsive">
                                            <div>
                                                <h3>{{ $item['name'] }}</h3>
                                                <p>{{ $item['description'] }}</p>
                                            </div>
                                            <span class="offer-price">${{ $item['price'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- end tab-menu -->
            </div>
        </div>
    </div>
</div>

<div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                        Meet Our Team
                    </h2>
                    <p class="title-caption text-center">
                        Our team is dedicated to providing you with the best dining experience. Get to know the talented people who make it all possible!
                    </p>
                </div>
                <div class="team-box">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('images/staff-01.jpg') }}" alt="John Doggett"></a>
                                </div>
                                <div class="text-col">
                                    <h3>John Doggett</h3>
                                    <p>John is the visionary behind our restaurant, with years of experience in hospitality and a passion for food.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('images/staff-02.jpg') }}" alt="Jeffrey Spender"></a>
                                </div>
                                <div class="text-col">
                                    <h3>Jeffrey Spender</h3>
                                    <p>Jeffrey is our head chef, known for blending diverse cuisines and creating amazing dishes.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('images/staff-03.jpg') }}" alt="Monica Reyes"></a>
                                </div>
                                <div class="text-col">
                                    <h3>Monica Reyes</h3>
                                    <p>Monica is our customer relations manager, ensuring every guest feels at home with her welcoming personality.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end team-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                        Our Gallery
                    </h2>
                    <p class="title-caption text-center">
                        Explore some of the best moments captured at our establishment.
                    </p>
                </div>
                <div class="gal-container clearfix">
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#1">
                                <img src="{{ asset('images/gallery_01.jpg') }}" alt="Gallery Image 1" />
                            </a>
                            <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_01.jpg') }}" alt="Gallery Image 1" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the first image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#2">
                                <img src="{{ asset('images/gallery_02.jpg') }}" alt="Gallery Image 2" />
                            </a>
                            <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_02.jpg') }}" alt="Gallery Image 2" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the second image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#3">
                                <img src="{{ asset('images/gallery_03.jpg') }}" alt="Gallery Image 3" />
                            </a>
                            <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_03.jpg') }}" alt="Gallery Image 3" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the third image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#4">
                                <img src="{{ asset('images/gallery_04.jpg') }}" alt="Gallery Image 4" />
                            </a>
                            <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_04.jpg') }}" alt="Gallery Image 4" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the fourth image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#5">
                                <img src="{{ asset('images/gallery_05.jpg') }}" alt="Gallery Image 5" />
                            </a>
                            <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_05.jpg') }}" alt="Gallery Image 5" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the fifth image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#9">
                                <img src="{{ asset('images/gallery_06.jpg') }}" alt="Gallery Image 6" />
                            </a>
                            <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_06.jpg') }}" alt="Gallery Image 6" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the sixth image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#10">
                                <img src="{{ asset('images/gallery_07.jpg') }}" alt="Gallery Image 7" />
                            </a>
                            <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_07.jpg') }}" alt="Gallery Image 7" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the seventh image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#11">
                                <img src="{{ asset('images/gallery_08.jpg') }}" alt="Gallery Image 8" />
                            </a>
                            <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_08.jpg') }}" alt="Gallery Image 8" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the eighth image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#12">
                                <img src="{{ asset('images/gallery_09.jpg') }}" alt="Gallery Image 9" />
                            </a>
                            <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_09.jpg') }}" alt="Gallery Image 9" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the ninth image from our gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#13">
                                <img src="{{ asset('images/gallery_10.jpg') }}" alt="Gallery Image 10" />
                            </a>
                            <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/gallery_10.jpg') }}" alt="Gallery Image 10" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the tenth image from our gallery</h4>

                                            <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
                                        </div> <!-- .col-md-12.description -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->
                            </div> <!-- .modal -->
                        </div> <!-- .box -->
                    </div> <!-- .gal-item -->
                </div> <!-- .gal-container -->
            </div> <!-- .col-lg-12 -->
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> 
    
    
    
    

<div id="blooog" class="blog-main pad-top-100 pad-bottom-100 parallax"> 
    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                        Our Blog
                    </h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('images/featured-image-01.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>25 NOVEMBER, 2014</span></p>
                                        <h2>LATEST RECIPES JUST IN!</h2>
                                        <h5>BY John Doggett</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('images/featured-image-02.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2014</span></p>
                                        <h2>NEW RECRUITS HAVE ARRIVED!</h2>
                                        <h5>BY Jeffrey Spender</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('images/featured-image-03.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>4 NOVEMBER, 2014</span></p>
                                        <h2>BAKING TIPS FROM THE PROS</h2>
                                        <h5>BY Monica Reyes</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('images/featured-image-04.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>12 NOVEMBER, 2014</span></p>
                                        <h2>ALL YOUR EGGS BELONG TO US</h2>
                                        <h5>BY John Doggett</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="#">View the Blog</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</div>

<div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="block-title text-center">
                    Our Meal Plans
                </h2>
                <p class="text-center">
                    Choose from our delicious meal packages, perfect for individuals, families, or parties!
                </p>
            </div>
            <div class="panel-pricing-in">
                <!-- Basic Plan -->
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="panel panel-pricing">
                        <div class="panel-heading">
                            <div class="pric-icon">
                                <img src="{{ asset('images/icons/breakfast.png') }}" alt="Basic Plan" />
                            </div>
                            <h3>Breakfast Deal</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$10/<span>Meal</span></strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> 1 Main Dish</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 1 Drink</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Free Coffee Refill</li>
                            <li class="list-group-item"><i class="fa fa-times"></i> Dessert Included</li>
                            <li class="list-group-item"><i class="fa fa-times"></i> Table Reservation</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Takeaway Available</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Order Now</a>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="panel panel-pricing">
                        <div class="panel-heading">
                            <div class="pric-icon">
                                <img src="{{ asset('images/icons/lunch.png') }}" alt="Pro Plan" />
                            </div>
                            <h3>Lunch Combo</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$20/<span>Meal</span></strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> 1 Main Dish</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 1 Side</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 1 Drink</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Dessert Included</li>
                            <li class="list-group-item"><i class="fa fa-times"></i> Table Reservation</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Takeaway Available</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Order Now</a>
                        </div>
                    </div>
                </div>

                <!-- Platinum Plan -->
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="panel panel-pricing">
                        <div class="panel-heading">
                            <div class="pric-icon">
                                <img src="{{ asset('images/icons/dinner.png') }}" alt="Platinum Plan" />
                            </div>
                            <h3>Gourmet Dinner</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$35/<span>Meal</span></strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> 2 Main Courses</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 2 Drinks</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Dessert Included</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Table Reservation</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Priority Service</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Takeaway Available</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="form-reservations-box">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">Reservations</h2>
                    </div>
                    <h4 class="form-title">BOOKING FORM</h4>
                    <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                    <form id="contact-form" method="POST" class="reservations-box" action="{{ route('reservation.store') }}">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="form_name" id="form_name" placeholder="Name" required data-error="Firstname is required.">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="email" name="email" id="email" placeholder="E-Mail ID" required data-error="E-mail id is required.">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="phone" id="phone" placeholder="Contact No.">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <select name="no_of_persons" id="no_of_persons" class="selectpicker" required>
                                    <option value="" disabled selected>No. Of persons</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="date" id="date-picker" placeholder="Date" required data-error="Date is required.">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="time" id="time-picker" placeholder="Time" required data-error="Time is required.">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <select name="preferred_food" id="preferred_food" class="selectpicker" required>
                                    <option selected disabled>Preferred Food</option>
                                    <option>Indian</option>
                                    <option>Continental</option>
                                    <option>Mexican</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <select name="occasion" id="occasion" class="selectpicker" required>
                                    <option selected disabled>Occasion</option>
                                    <option>Wedding</option>
                                    <option>Birthday</option>
                                    <option>Anniversary</option>
                                    <option>Casual</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="reserve-book-btn text-center">
                                <button class="hvr-underline-from-center" type="submit" id="submit">BOOK MY TABLE</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="footer-main">
    <div class="footer-news pad-top-100 pad-bottom-70 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="ft-title color-white text-center">Newsletter</h2>
                        <p>Subscribe to get the latest updates on our seasonal specials, discounts, and chef picks!</p>
                    </div>
                    <form>
                        <input type="email" placeholder="Enter your e-mail id" required>
                        <button type="submit" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-box pad-top-70">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo text-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-a">
                            <h3>About Us</h3>
                            <p>We are passionate about delivering unforgettable dining experiences with a menu inspired by both tradition and innovation.</p>
                            <ul class="socials-box footer-socials pull-left">
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-facebook"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
                                <li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-b">
                            <h3>New Menu</h3>
                            <ul>
                                <li><a href="#">Italian Bomba Sandwich</a></li>
                                <li><a href="#">Double Dose of Pork Belly</a></li>
                                <li><a href="#">Spicy Thai Noodles</a></li>
                                <li><a href="#">Triple Truffle Trotters</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-c">
                            <h3>Contact Us</h3>
                            <p>
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                            </p>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>+91 80005 89080</span>
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span><a href="mailto:support@foodfunday.com">support@foodfunday.com</a></span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-d">
                            <h3>Opening Hours</h3>
                            <ul>
                                <li><p>Monday - Thursday</p><span>11:00 AM - 9:00 PM</span></li>
                                <li><p>Friday - Saturday</p><span>11:00 AM - 5:00 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright" class="copyright-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6 class="copy-title text-center">Copyright &copy; 2025. Powered by <strong>Zaki Oussama</strong>.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- ALL JS FILES -->
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- ALL PLUGINS -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>