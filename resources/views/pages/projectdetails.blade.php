@extends('layouts.index')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Project Details
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span
                        class="lnr lnr-arrow-right"></span> <a href="projects-details.html"> Project Details</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start project-details Area -->
<section class="project-details-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            @foreach ($projetTout as $item)
            <div class="col-lg-6 project-details-left">
                {{-- <img class="img-fluid" src={{ asset("img/project-details.jpg") }} alt=""> --}}
                <img class="img-fluid" src={{ asset('img/'. $item->url) }} alt="">
            </div>
            <div class="col-lg-6 project-details-right">
                {{-- <h3 class="pb-20">Lavendar ambient interior</h3> --}}
                <h3 class="pb-20">{{ $item->titre }}</h3>
                <p>
                    {{-- {{ str_limit($item->nextPost()['titre'], 10) }} --}}

                    Petite description : {{ Str::limit($item->description, 50) }}
                    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation... --}}
                </p>
                <div class="details-info d-flex flex-row">
                    <ul class="names">
                        <li>Author </li>
                        <li>Date added </li>
                    </ul>
                    <ul class="desc">
                        <li>: {{ $item->auteur }}</li>
                        <li>: {{ $item->dateCreate }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 project-desc mt-60">
                {{-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                    <br>
                    <br>
                    Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p> --}}
                <p>{{ $item->description }}</p>
            </div>

            @endforeach
        </div>
    </div>
</section>
<!-- End project-details Area -->

<!-- Start brands Area -->
<section class="brands-area pb-60 pt-60">
    <div class="container no-padding">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src={{ asset("img/l1.png") }} alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src={{ asset("img/l2.png") }} alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src={{ asset("img/l3.png") }} alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src={{ asset("img/l4.png") }} alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src={{ asset("img/l5.png") }} alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End brands Area -->

@endsection


