
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAConquer - Ultimate Arena Battle</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&amp;display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('assets/css/v1.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
	<link rel="SHORTCUT ICON" href="favicon.ico">
	<meta name="keywords" content="Conquer online, Conquer, Conquer Classic, OldSchool, Conquer private server, Conquer online private server, best Conquer server, good Conquer server, download Conquer">
	<meta name="description" content="Try UAConquer now ! Join the best PVP Conquer Online Classic Server ever created !">
	<meta content="img/fb.jpg?1753425640" property="og:image" />
	<meta content="UAConquer - PVP Conquer Online Classic Server" property="og:title">
	<meta content="Try UAConquer now ! Join the best PVP Conquer Online Classic Server ever created !" property="og:description">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            {{-- <a href="#"><img src="img/f-logo.png" alt=""></a> --}}
            <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="7831898" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="SERVER RELEASE" href="//www.tickcounter.com/">SERVER RELEASE</a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="download">Download</a></li>
                <li><a href="register">Register</a></li>
                {{-- <li><a href="index4c5a.html?page=vote">Vote</a></li> --}}
                {{-- <li><a href="javascript:;">Ranking <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="indexadf9.html?page=players">Players</a></li>
                    </ul>
                </li> --}}
				<li><a href="donate">Donate</a></li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-copyright">
            Copyright © 2025 UAConquer. All rights reserved
        </div>

    </div>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="fa fa-clock-o"></i><span id="datetime"></span></li>
                                <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Login
                                </li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-user"></i> Welcome to UAConquer : Ultimate Arena War
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="ht-widget">
						<ul>
							<li>
                                <i class="fa fa-users"></i> Online Players: <b style="color: red">0</b>
                            </li>
						</ul>
                        <ul>
                            <li>
                                <i class="fa fa-host"></i> Server Host: <b style="color: green">US / EU</b>
                            </li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-lan"></i> Server Status: <b style="color: orange">Local</b></li>
						</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
		function updateDateTime() {
			const dateTimeElement = document.getElementById('datetime');
			const now = new Date();

			// Set the timezone to Cairo
			const cairoTimezone = 'Africa/Cairo';

			// Format the date and time in Cairo timezone
			const formattedDateTime = now.toLocaleString('en-US', {
				year: 'numeric',
				month: 'long',
				day: 'numeric',
				hour: 'numeric',
				minute: 'numeric',
				second: 'numeric',
				hour12: true,
				timeZone: cairoTimezone
			});

			dateTimeElement.textContent = formattedDateTime;
		}

		updateDateTime();
		setInterval(updateDateTime, 1000);

		</script>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       {{-- <a href="#"><img src="img/logo.png" alt=""></a> --}}
                        <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script><a data-type="countdown" data-id="7831898" class="tickcounter" style="display:block; left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto;" title="SERVER RELEASE" href="//www.tickcounter.com/">SERVER RELEASE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>

                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="/"><span>Home</span></a></li>
						<li ><a href="download">Download</a></li>
												<li ><a href="register">Register</a></li>
												{{-- <li ><a href="index4c5a.html?page=vote">Vote</a></li>
						<li><a href="javascript:;">Ranking <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown">
								<li><a href="indexadf9.html?page=players">Players</a></li>
							</ul>
						</li> --}}
						<li ><a href="donate">Donate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
