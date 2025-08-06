@extends('layouts.app')

@section('content')
 <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg spad" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>Register</h3>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-text">
                        <div class="contact-title">
                            <h3>Join UAConquer</h3>
							<p>Please fill form below to create new account.</p>
                        </div>
                        <div class="contact-form">
                            <div class="signup-text">
                                <form action="https://www.classiclords.com/index.php?page=register" class="signup-form" method="POST">
                                    <div class="sf-input-list">
										<input type="text" class="input-value" name="name" placeholder="User Name">
										<input type="password" class="input-value" name="pass" placeholder="Password">
										<input type="password" class="input-value" name="pass2" placeholder="Confirm Password">
										<input type="email" class="input-value" name="email" placeholder="Email">
										<input type="text" class="input-value" name="captcha_str" placeholder="Verification code">
										<p><img style="cursor: wait;" title="Click to reload" onclick="reloadCaptcha();" src="captcha/captchab36d.png?0.94550900%201753426217" alt="captcha" name="captcha" id="captchaImage"></p>
									</div>
                                    <button type="submit"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
						<div class="text-center"><p class="text-danger">
												</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
