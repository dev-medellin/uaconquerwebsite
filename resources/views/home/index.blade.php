@extends('layouts.app')

@section('content')
 <!-- Hero Section Begin -->
    <section class="hero-section vs-hero-wrapper bg-header">
        <video autoplay="" loop="" muted="" class="ls-bg">
            <source src="{{ asset('assets/video/background_new.mp4') }}" type="video/mp4">
            Your browser does not support video.
        </video>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Screenshots</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
				<div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="{{ asset('assets/img/screenshot/imfdc1.jpg') }}">

                            </div>
                        </div>
                    </div><div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="{{ asset('assets/img/screenshot/im554d.jpg') }}">

                            </div>
                        </div>
                    </div><div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="{{ asset('assets/img/screenshot/ime353.jpg') }}">

                            </div>
                        </div>
                    </div><div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="{{ asset('assets/img/screenshot/im9ef7.jpg') }}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Preview Section End -->
    <!-- Instagram Post Section Begin -->
    <section class="instagram-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h5>Discord</h5>
                    </div>
                    <div class="ip-item">
                    </div>
                </div>

				<div class="col-lg-6">
                    <div class="section-title">
                        <h5>Facebook</h5>
                    </div>
                    <div class="ip-item">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->
@endsection
