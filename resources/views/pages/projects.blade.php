@extends('layouts.index')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Projects
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span
                        class="lnr lnr-arrow-right"></span> <a href="projects.html"> Projects</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Our Recent Works may impress you</h1>
            </div>
        </div>
        <div class="row">

            @forelse ($projetTout as $item)
            @if ($loop->index % 4 == 0 || $loop->index % 4 == 3)
            <div class="col-lg-8">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            {{-- <img class="content-image img-fluid d-block mx-auto" src={{ "img/g1.jpg" }} alt=""> --}}
                            <img class="content-image img-fluid d-block mx-auto" src={{ asset('img/'. $item->url) }} alt="">
                            <div class="content-details fadeIn-bottom">
                                {{-- <h3 class="content-title mx-auto">Lavendar ambient interior</h3> --}}
                                <h3 class="content-title mx-auto">{{ $item->titre }}</h3>
                                <a href="project-details.html" class="primary-btn text-uppercase mt-20">More
                                    Details</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @else

            <div class="col-lg-4">
                <div class="single-gallery">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            {{-- <img class="content-image img-fluid d-block mx-auto" src="img/g2.jpg" alt=""> --}}
                            <img class="content-image img-fluid d-block mx-auto" src={{ asset('img/'. $item->url) }}  alt="">
                            <div class="content-details fadeIn-bottom">
                                {{-- <h3 class="content-title mx-auto">Ambient interior</h3> --}}
                                <h3 class="content-title mx-auto">{{ $item->titre }}</h3>
                                <a href="project-details.html" class="primary-btn text-uppercase mt-20">More
                                    Details</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <p>rien ne se passe</p>
            @endforelse
          
        </div>
    </div>
</section>
<!-- End gallery Area -->

@endsection



