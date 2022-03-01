<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href={{asset("img/fav.png")  }}>
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Interior</title>
    {{-- mon css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href={{ asset("https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700") }} rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href={{ asset("css/linearicons.css") }}>
        <link rel="stylesheet" href={{ asset("css/font-awesome.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
        <link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
        <link rel="stylesheet" href={{ asset("css/nice-select.css") }}>
        <link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/owl.carousel.css") }}>
        <link rel="stylesheet" href={{ asset("css/main.css") }}>
    </head>
    <body>
        @include('partials.navigation')
        @yield('content')

        @include("partials.footer")

          {{-- <header id="header" id="home">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href={{ route("home") }}><img src={{ asset("img/logo.png") }} alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href={{ route("home") }}>Home</a></li>
                      <li><a href={{ route("services") }}>Services</a></li>
                      <li><a href={{ route("projects") }}>Projects</a></li>
                      <li><a href={{ route("blogHome") }}>Blog</a></li>
                      <li><a href={{ route("contact") }}>Contact</a></li>
                    </ul>
                  </nav><!-- #nav-menu-container -->
                </div>
            </div>
          </header><!-- #header --> --}}

       


        {{-- <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
                            </p>
                            <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href={{ asset("https://colorlib.com" ) }}target="_blank">Colorlib</a> and distributed by <a href={{ asset("https://themewagon.com/") }} target="_blank">ThemeWagon</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
                                        <button class="click-btn btn btn-default"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area --> --}}

        <script src={{ asset("js/vendor/jquery-2.2.4.min.js") }}></script>
        <script src={{ asset("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js") }} integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src={{ asset("js/vendor/bootstrap.min.js") }}></script>
        <script type="text/javascript" src={{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA") }}></script>
          <script src={{ asset("js/easing.min.js") }}></script>
        <script src={{ asset("js/hoverIntent.js") }}></script>
        <script src={{ asset("js/superfish.min.js") }}></script>
        <script src={{ asset("js/jquery.ajaxchimp.min.js") }}></script>
        <script src={{ asset("js/jquery.magnific-popup.min.js") }}></script>
        <script src={{ asset("js/owl.carousel.min.js") }}></script>
        <script src={{ asset("js/jquery.nice-select.min.js") }}></script>
        <script src={{ asset("js/mail-script.js") }}></script>
        <script src={{ asset("js/main.js") }}></script>
    </body>
</html>
