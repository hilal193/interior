@extends('layouts.index')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span
                        class="lnr lnr-arrow-right"></span> <a href="contact.html"> Contact Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            @foreach ($contactTout as $item)
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        {{-- <span class="lnr lnr-home"></span> --}}
                        <span class="{{ $item->logoAdresse }}"></span>
                    </div>
                    <div class="contact-details">
                        <h5>{{ $item->nomAdresse }}</h5>
                        <p>
                            {{ $item->rueAdresse }}
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="{{ $item->logoPhone }}"></span>
                    </div>
                    <div class="contact-details">
                        <h5>{{ $item->numero }}</h5>
                        <p>{{ $item->dispo }}</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="{{ $item->logoMail }}"></span>
                    </div>
                    <div class="contact-details">
                        <h5>{{ $item->email }}</h5>
                        <p>{{ $item->emailDescrip }}</p>
                    </div>
                </div>
            </div>

            @endforeach


            <div class="col-lg-8">
                <form class="form-area " method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your name'"
                                class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your subject'"
                                class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Messege"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary circle" style="float: right;">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->


@endsection


