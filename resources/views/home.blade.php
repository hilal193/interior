@extends('layouts.index')


@section('content')

 <!-- start banner Area -->
 <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex justify-content-center align-items-center">
            <div class="banner-content col-lg-9 col-md-12 justify-content-center ">
                <h1>
                    Precise concept design <br>
                    for stylish living
                </h1>
                <a href="#" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">What we offer to our clients</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Interior Design</h4></a>
                    <p>
                        Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Architecture Design</h4></a>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Concept Design</h4></a>
                    <p>
                        Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->

<!-- Start gallery Area -->
<section class="gallery-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Our Recent Works may impress you</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                               <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/g1.jpg") }} alt="">
                          <div class="content-details fadeIn-bottom">
                            <h3 class="content-title mx-auto">Lavendar ambient interior</h3>
                            <a href={{ route("projectDetails") }} class="primary-btn text-uppercase mt-20">More Details</a>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                               <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/g2.jpg") }} alt="">
                          <div class="content-details fadeIn-bottom">
                            <h3 class="content-title mx-auto">Ambient interior</h3>
                            <a href={{ route("projectDetails") }} class="primary-btn text-uppercase mt-20">More Details</a>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                               <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/g3.jpg") }} alt="">
                          <div class="content-details fadeIn-bottom">
                            <h3 class="content-title mx-auto">Ambient interior</h3>
                            <a href={{ route("projectDetails") }} class="primary-btn text-uppercase mt-20">More Details</a>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                               <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/g4.jpg") }} alt="">
                          <div class="content-details fadeIn-bottom">
                            <h3 class="content-title mx-auto">Lavendar ambient interior</h3>
                            <a href={{ route("projectDetails") }} class="primary-btn text-uppercase mt-20">More Details</a>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-user"></span>
                        <h4>Expert Technicians</h4>
                    </a>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-license"></span>
                        <h4>Professional Service</h4>
                    </a>
                    <p>
                        Finding the perfect learning tool for Flash is a daunting task to any novice web developer. One can find help.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-phone"></span>
                        <h4>Great Support</h4>
                    </a>
                    <p>
                        While most people enjoy casino ambling, sports betting, lottery and bingo playing for the fun and excitement.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Technical Skills</h4>
                    </a>
                    <p>
                        “The moment you think of buying a Web Hosting Plan, you know one thing – So many choices, which one to choose.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recomended</h4>
                    </a>
                    <p>
                        Many conventional colleges and universities are now offering online DVD repair courses, which are the exact same.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>
                    <p>
                        So you have your new digital camera and clicking away to glory anything and everything in sight. Now you want.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Ongoing Exhibitions from the scratch</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-blog-carusel">
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b1.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b2.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b3.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b1.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b2.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src={{ asset("img/b3.jpg") }} alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End blog Area -->

@endsection
