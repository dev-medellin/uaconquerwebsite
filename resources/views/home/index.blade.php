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
                        <iframe src="https://discord.com/widget?id=1402516277473443851&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                </div>

				<div class="col-lg-6">
                    <div class="section-title">
                        <h5>Facebook</h5>
                    </div>
                    <div class="ip-item">
                        <div class="fb-page" data-href="https://www.facebook.com/uaconquerpvp/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/uaconquerpvp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uaconquerpvp/">UAConquer</a></blockquote></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->
@endsection
