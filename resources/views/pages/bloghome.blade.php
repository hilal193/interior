@extends('layouts.index')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative blog-home-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content blog-header-content col-lg-12">
                <h1 class="text-white">
                    Dude You’re Getting
                    a Telescope
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start top-category-widget Area -->
<section class="top-category-widget-area pt-90 pb-90 ">
    <div class="container">
        <div class="row">
            @foreach ($categorieTout as $item)
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="#" target="_blank">
                            <div class="thumb">
                                {{-- <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/blog/cat-widget1.jpg") }}
                                    alt=""> --}}
                                <img class="content-image img-fluid d-block mx-auto pt-2" src={{ asset("img/". $item->imageUrl) }}
                                alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">{{ $item->nom }}</h4>
                                <span></span>
                                <p>{{ $item->mini_description }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach

            {{-- <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="#" target="_blank">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/blog/cat-widget2.jpg") }}
                                    alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">Politics</h4>
                                <span></span>
                                <p>Be a part of politics</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="#" target="_blank">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto" src={{ asset("img/blog/cat-widget3.jpg") }}
                                    alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">Food</h4>
                                <span></span>
                                <p>Let the food be finished</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto posts-list">
                {{-- @dd($articleTout->titre) --}}
                @foreach ($articleTout as $item)
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">{{ $item->tags }}</a></li>
                            {{-- <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li> --}}
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $item->auteur }}</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $item->creation }}</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                    class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                    class="lnr lnr-bubble"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            {{-- <img class="img-fluid" src={{ asset("img/blog/feature-img1.jpg") }} alt=""> --}}
                            <img class="img-fluid" src={{ asset('img/'. $item->url) }} alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html">
                            <h3>{{ $item->titre }}</h3>
                        </a>
                        <p class="excert">
                           {{$item->description}}
                        </p>
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div>

                @endforeach


                {{-- <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Food,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            <img class="img-fluid" src={{ asset("img/blog/feature-img2.jpg") }} alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html">
                            <h3>The Basics Of Buying A Telescope</h3>
                        </a>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction.
                        </p>
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div>
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Food,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                    class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                    class="lnr lnr-bubble"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="feature-img">
                            <img class="img-fluid" src={{ asset("img/blog/feature-img3.jpg") }} alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html">
                            <h3>The Glossary Of Telescopes</h3>
                        </a>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction.
                        </p>
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div>
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Food,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                    class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                    class="lnr lnr-bubble"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="feature-img">
                            <img class="img-fluid" src={{ asset("img/blog/feature-img4.jpg") }} alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html">
                            <h3>The Night Sky</h3>
                        </a>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction.
                        </p>
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div>
                <div class="single-post row">
                    <div class="col-lg-3 col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Food,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                    class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                    class="lnr lnr-bubble"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="feature-img">
                            <img class="img-fluid" src={{ asset("img/blog/feature-img5.jpg") }} alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html">
                            <h3>Telescopes 101</h3>
                        </a>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction.
                        </p>
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div> --}}
                @if (count($articleTout) > 5)
                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-left"></span>
                                </span>
                            </a>
                        </li>
                        <li class="page-item"><a href="#" class="page-link">01</a></li>
                        <li class="page-item active"><a href="#" class="page-link">02</a></li>
                        <li class="page-item"><a href="#" class="page-link">03</a></li>
                        <li class="page-item"><a href="#" class="page-link">04</a></li>
                        <li class="page-item"><a href="#" class="page-link">09</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-right"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>

                @endif
            </div>

        </div>
    </div>
</section>
<!-- End post-content Area -->

@endsection



