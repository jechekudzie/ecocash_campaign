<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}" />

    <!-- Main JavaScript -->
    <script src="{{ asset('website/js/main.js') }}"></script>

    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />

    <!-- UIKit JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

    <style>
        /* Navbar styling */
        .uk-background-muted {
            background-color: #ffffff; /* White background */
            padding: 10px 0;
        }

        /* Navbar logo styling */
        .uk-navbar-item.uk-logo img {
            height: 40px;
        }

        /* Navbar link styling */
        .uk-navbar-nav > li > a {
            color: #004b91; /* EcoCash brand blue color */
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .uk-navbar-nav > li > a:hover,
        .uk-navbar-nav > li.uk-active > a {
            color: #ff0000; /* EcoCash brand red color */
        }

        /* 'Get Started' button styling */
        .uk-button-primary {
            background-color: #ff0000; /* EcoCash brand red color */
            border-color: #ff0000;
            color: #ffffff;
            font-weight: bold;
        }

        .uk-button-primary:hover {
            background-color: #cc0000;
            border-color: #cc0000;
        }


        footer {
            background-color: #f8f8f8;
            padding: 20px 0;
        }

        footer .uk-logo {
            font-weight: bold;
            color: #004b91;
        }

        footer a {
            color: #004b91;
            text-decoration: none;
        }

        footer a:hover {
            color: #ff0000;
        }

        footer p {
            color: #666;
        }



        .uk-modal-body ol {
            list-style-position: inside;
            padding-left: 0;
        }

        .uk-modal-body li {
            margin-bottom: 8px;
        }

        .uk-modal-title {
            color: #004b91; /* Use the EcoCash brand color for the title */
        }
    </style>
</head>


<body>



<nav class="uk-background-muted">
    <div class="uk-container">
        <div data-uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                    <img src="{{ asset('website/images/logo.png') }}" alt="EcoCash Logo">
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="{{ request()->is('/') ? 'uk-active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ request()->is('faqs') ? 'uk-active' : '' }}">
                        <a href="#faqs">FAQs</a>
                    </li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <a href="#" class="uk-button uk-button-primary">Get Started</a>
                </div>
                <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-navbar-toggle-icon data-uk-toggle></a>
            </div>
        </div>
    </div>
</nav>

<div id="offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <ul class="uk-nav uk-nav-default">
            <li class="{{ request()->is('/') ? 'uk-active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ request()->is('faqs') ? 'uk-active' : '' }}">
                <a href="#">FAQs</a>
            </li>
            <li class="{{ request()->is('getting-started') ? 'uk-active' : '' }}">
                <a href="{{ route('getting-started') }}">Getting Started</a>
            </li>
        </ul>
    </div>
</div>


@yield('content')

<footer class="uk-section uk-section-muted uk-padding-remove">
    <div class="uk-container">
        <div class="uk-text-center uk-padding-small">
            <a class="uk-logo" href="#">EcoCash</a>
        </div>

        <div class="uk-text-center uk-margin-top">
            <ul class="uk-subnav uk-flex-center" data-uk-margin>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#" uk-toggle="target: #terms-modal">Terms & Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="uk-text-center uk-margin-small">
            <p class="uk-text-small">&copy; {{ now()->year }} EcoCash. All rights reserved.</p>
        </div>

        <div class="uk-text-center uk-margin-small">
            <a href="https://twitter.com/" data-uk-icon="icon: twitter; ratio: 1" class="uk-icon-link uk-margin-small-right"></a>
            <a href="https://www.instagram.com/" data-uk-icon="icon: instagram; ratio: 1" class="uk-icon-link uk-margin-small-right"></a>
            <a href="https://www.facebook.com/" data-uk-icon="icon: facebook; ratio: 1" class="uk-icon-link uk-margin-small-right"></a>
            <a href="https://www.youtube.com/" data-uk-icon="icon: youtube; ratio: 1" class="uk-icon-link"></a>
        </div>
    </div>
</footer>

<div id="terms-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-width-1-1@m" style="max-width: 900px;">
        <button class="uk-modal-close-default" type="button" uk-close></button>

        <!-- Logo on the right -->
        <div class="uk-flex uk-flex-between">
            <h2 class="uk-modal-title">Terms & Conditions</h2>
            <img src="{{ asset('website/images/logo.png') }}" alt="EcoCash Logo" style="height: 40px; margin-left: 20px;">
        </div>

        <!-- Content of the modal -->
        <ol class="uk-text-left uk-margin-top">
            <li>Promotion to run from 12 September 2024.</li>
            <li>The following use cases qualify under transact – Airtime, send money, cash out, and payments.</li>
            <li>Payments include bill, merchant, and online payments.</li>
            <li>Customers will have an option to redeem for SMS, voice, or data via *151*300#.</li>
            <li>Customers will also be able to request their points balance via the same USSD code.</li>
            <li>Airtime validity to be pegged at 7 days; this will also be communicated to customers.</li>
            <li>Points will be redeemed in multiples of hundreds, e.g., a customer with 180 points can only redeem for 100 points.</li>
            <li>100 points will earn a customer USD0.50.</li>
            <li>A monthly limit on airtime redemption has been set at $10.</li>
            <li>Points will be zeroed at the end of each month.</li>
            <li>Customer to receive a points SMS after each successful transaction.</li>
            <li>Should a transaction be reversed, points relating to that transaction should also be reversed.</li>
            <li>Only billable transactions will earn points. This means that payments of less than $10 will not earn points as they are not charged.</li>
            <li>ZWG transactions will accrue points in the ZWG wallet, and redemption will be in local currency.</li>
            <li>USD transactions will accrue points in the USD wallet, and redemption will be in USD currency.</li>
            <li>Campaign to run for 3 months from 12 Sept to 17 November.</li>


<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" data-uk-close></button>

        <ul class="uk-nav uk-nav-primary uk-nav-offcanvas">
            <li class="uk-nav-header uk-logo uk-margin-bottom">SOUTIEN</li>
            <li class="uk-active"><a href="index.html">Home</a></li>
            <li ><a href="faq.html">Faq</a></li>
            <li ><a href="changelog.html">Changelog</a></li>
            <li ><a href="download.html">Download</a></li>
            <li ><a href="contact.html">Contact</a></li>
        </ul>

    </div>
</div>


<script src="{{asset('/website/js/awesomplete.js')}}"></script>



</body>

</html>
