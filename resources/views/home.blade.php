@extends('layouts.website')

@section('title', 'Ecocash Gives You More')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
    <style>
        /* Custom container with padding on both sides */
        .uk-container-custom {
            padding-left: 40px;
            padding-right: 40px;
        }

        /* Category card styling */
        .category-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #000;
            box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
        }

        .category-card p {
            margin-top: 10px;
            font-size: 16px;
        }

        .category-card:hover,
        .category-card.active {
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            background-color: #f9f9f9;
            color: #00BFA5;
        }

        /* Styling for category details section */
        #category-details {
            padding: 20px;
            margin-top: 30px;
        }

        #category-details .uk-flex-middle {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        #category-details #category-icon {
            color: #00BFA5;
        }

        #category-details h2 {
            margin-left: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        #category-details p {
            color: #666;
            margin-top: 10px;
        }

        #category-content h4 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 20px;
        }

        .uk-nav-default a {
            color: #000;
            text-decoration: none;
        }

        .uk-nav-default a:hover {
            color: #00BFA5;
        }

        .uk-nav-default li a.active {
            color: #00BFA5;
            font-weight: bold;
        }

        /* Padding on left and right */
        .uk-container-custom.container {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .uk-container-custom.container {
            padding: 0 20px;
            margin: 0 auto;
        }

        .uk-overlay-primary {
            background-color: rgba(0, 0, 0, 0.6); /* Optional: Darken the overlay */
        }

        h3, p {
            color: #ffffff; /* Ensure text stands out on overlay */
        }

        .uk-button-danger {
            background-color: #FF0000; /* Bright red button color */
            border: none;
            color: #fff;
        }

    </style>

    <!-- Full-Width Slider Section -->
    {{-- <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000; pause-on-hover: true">

         <ul class="uk-slider-items uk-child-width-1-1 uk-height-large" style="height: 100vh;">
             <li>
                 <img src="website/images/CASHOUT.png" alt="Cash Out Promotion" style="width: 100%; height: 100vh; object-fit: cover;">
                 --}}{{--<div class="uk-overlay uk-overlay-primary uk-position-center-left uk-width-1-2 uk-padding-large">
                     <h3 class="uk-margin-remove">Cash Out Promotion</h3>
                     <p class="uk-margin-remove">Get rewards for cashing out and earn points.</p>
                     <button class="uk-button uk-button-danger uk-margin-top">Read More</button>
                 </div>--}}{{--
             </li>
             <li>
                 <img src="website/images/Double Your Points.png" alt="Double Points" style="width: 100%; height: 100vh; object-fit: cover;">
                 --}}{{-- <div class="uk-overlay uk-overlay-primary uk-position-center-right uk-width-1-2 uk-padding-large">
                      <h3 class="uk-margin-remove">Double Points</h3>
                      <p class="uk-margin-remove">Earn double points when you transact using the EcoCash app.</p>
                      <button class="uk-button uk-button-danger uk-margin-top">Read More</button>
                  </div>--}}{{--
             </li>
             <li>
                 <img src="website/images/How To Redeem Your Points.png" alt="Redeem Your Points" style="width: 100%; height: 100vh; object-fit: cover;">
                 --}}{{--<div class="uk-overlay uk-overlay-primary uk-position-center-left uk-width-1-2 uk-padding-large">
                     <h3 class="uk-margin-remove">Redeem Your Points</h3>
                     <p class="uk-margin-remove">Redeem your points for airtime and more.</p>
                     <button class="uk-button uk-button-danger uk-margin-top">Read More</button>
                 </div>--}}{{--
             </li>
         </ul>

         <!-- Navigation Arrows -->
         <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
         <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

         <!-- Dots Navigation -->
         <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
     </div>
 --}}

    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000; pause-on-hover: true">

        <ul class="uk-slider-items uk-child-width-1-1 uk-height-large full-screen-slider">
            <li>
                <img src="website/images/CASHOUT.png" alt="Cash Out Promotion" class="slider-image">
            </li>
            <li>
                <img src="website/images/Double Your Points.png" alt="Double Points" class="slider-image">
            </li>
            <li>
                <img src="website/images/How To Redeem Your Points.png" alt="Redeem Your Points" class="slider-image">
            </li>
        </ul>

        <!-- Navigation Arrows -->
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        <!-- Dots Navigation -->
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>

    <style>
        /* Full screen height for desktop and mobile */
        .full-screen-slider {
            height: 100vh;
        }

        .slider-image {
            width: 100%;
            height: 100vh;
            object-fit: cover; /* Ensures full coverage on desktop */
            object-position: center;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .slider-image {
                height: auto;
                object-fit: contain; /* Show entire image on mobile without cutting */
                padding-top: 60px; /* Add padding for better spacing */
            }

            .full-screen-slider {
                height: auto; /* Allow auto height on mobile */
            }
        }
    </style>



    <div id="faqs" class="uk-section uk-background-muted uk-container-custom">
        <div class="uk-container uk-text-center">
            <h1 class="uk-heading-primary uk-margin-medium-bottom"> Ecocash Gives You More! </h1>

            <!-- Top Category Icon Grid - Always Visible -->
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center uk-margin-large-top"
                 data-uk-grid>
                <div>
                    <a href="#" onclick="showCategory('getting-started', this)"
                       class="uk-card card-box uk-card-body uk-border-rounded category-card" id="icon-getting-started">
                        <span data-uk-icon="icon: bolt; ratio: 2"></span>
                        <p class="uk-margin-top">Getting Started</p>
                    </a>
                </div>
                <div>
                    <a href="#" onclick="showCategory('transactions-redemption', this)"
                       class="uk-card card-box uk-card-body uk-border-rounded category-card"
                       id="icon-transactions-redemption">
                        <span data-uk-icon="icon: credit-card; ratio: 2"></span>
                        <p class="uk-margin-top">Eligible Transactions</p>
                    </a>
                </div>
                <div>
                    <a href="#" onclick="showCategory('currencies-points', this)"
                       class="uk-card card-box uk-card-body uk-border-rounded category-card"
                       id="icon-currencies-points">
                        <span data-uk-icon="icon: world; ratio: 2"></span>
                        <p class="uk-margin-top">Currencies & Points</p>
                    </a>
                </div>
                <div>
                    <a href="#" onclick="showCategory('airtime-redemption', this)"
                       class="uk-card card-box uk-card-body uk-border-rounded category-card"
                       id="icon-airtime-redemption">
                        <span data-uk-icon="icon: phone; ratio: 2"></span>
                        <p class="uk-margin-top">Airtime Redemption</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Details Section -->
    <div class="uk-section uk-container-custom container" id="category-details" style="display:none;">
        <div class="uk-container uk-grid-divider uk-grid-large" data-uk-grid>
            <!-- Left Column: Icon, Title, Description, Image, and Questions -->
            <div class="uk-width-expand@m">
                <div class="uk-flex uk-flex-middle">
                    <span id="category-icon" data-uk-icon="icon: bolt; ratio: 2"></span>
                    <h2 id="category-title" class="uk-margin-left">Getting Started</h2>
                </div>
                <p id="category-description">Here you’ll find information about setting up payment providers,
                    currencies, and many other topics.</p>
                <img id="category-image" src="website/images/getting_started.png" alt="Category Image"
                     class="uk-margin-medium-top uk-width-1-1">
                <div id="category-content">
                    <h4>How do I participate in the EcoCash Gives you More promotion?</h4>
                    <p>Dial *151# to transact on EcoCash and accumulate a minimum of 100 points to start redeeming
                        airtime.</p>
                    {{--<a href="#" class="uk-button uk-button-text">Read more</a>--}}
                </div>
            </div>

            <!-- Right Column: Categories List -->
            <div class="uk-width-1-4@m">
                <h4 class="uk-margin-small-bottom">Ecocash Gives you More</h4>
                <ul class="uk-nav uk-nav-default">
                    <li><a href="#" onclick="showCategory('getting-started')">Getting Started</a></li>
                    <li><a href="#" onclick="showCategory('transactions-redemption')">Eligible Transactions</a></li>
                    <li><a href="#" onclick="showCategory('currencies-points')">Currencies & Points</a></li>
                    <li><a href="#" onclick="showCategory('airtime-redemption')">Airtime Redemption</a></li>
                </ul>
            </div>
        </div>
    </div>


    <script>
        function showCategory(category) {
            const categories = {
                "getting-started": {
                    icon: "bolt",
                    title: "Getting Started",
                    description: "Here you’ll find information about setting up payment providers, currencies, and many other topics.",
                    content: `
                    <h4>How do I participate in the EcoCash Gives you More promotion?</h4>
                    <p>Dial *151# to transact on EcoCash and accumulate a minimum of 100 points to start redeeming airtime.</p>
                    <h4>What is the EcoCash Gives you More campaign?</h4>
                    <p>The EcoCash Gives you More campaign is a rewards-based program where customers get points for transacting on EcoCash, redeemable for airtime. Promotion runs from 13 September 2024 to 17 November 2024.</p>
                `,
                    image: "website/images/CASHOUT.png"
                },
                "transactions-redemption": {
                    icon: "credit-card",
                    title: "Eligible Transactions",
                    description: "Details about which transactions qualify for the promotion and how to redeem points.",
                    content: `
                    <h4>Which transactions qualify for the promo?</h4>
                    <p>Merchant payments, bill payments, send money, airtime, and cash out.</p>
                    <h4>How do I redeem my points?</h4>
                    <p>To redeem points, simply dial *151*7*7#.</p>
                `,
                    image: "website/images/Send Money.png"
                },
                "currencies-points": {
                    icon: "world",
                    title: "Currencies & Points",
                    description: "Learn about eligible currencies and how points are accumulated.",
                    content: `
                    <h4>Which currencies are eligible for this promotion?</h4>
                    <p>Both USD and ZWG. ZWG transactions will accrue points in the ZWG wallet and redemption will be in local currency, while USD transactions will accrue points in the USD wallet and redemption will be in USD.</p>
                    <h4>How many points do I need to redeem?</h4>
                    <p>100 points can be redeemed for USD 0.50 (50 cents) worth of airtime.</p>
                `,
                    image: "website/images/Double Your Points.png"
                },
                "airtime-redemption": {
                    icon: "phone",
                    title: "Airtime Redemption",
                    description: "Find out how to redeem points for airtime and the value you receive.",
                    content: `
                    <h4>How do I redeem my points?</h4>
                    <p>To redeem points, dial *151*7*7#.</p>
                    <h4>What is the value of the airtime I can receive?</h4>
                    <p>For every 100 points redeemed, you will receive USD 0.50 (50 cents) worth of airtime.</p>
                `,
                    image: "website/images/How To Redeem Your Points.png"
                }
            };

            const categoryIcon = document.getElementById("category-icon");
            const categoryTitle = document.getElementById("category-title");
            const categoryDescription = document.getElementById("category-description");
            const categoryContent = document.getElementById("category-content");
            const categoryImage = document.getElementById("category-image");

            // Update icon, title, description, content, and image
            categoryIcon.setAttribute("data-uk-icon", `icon: ${categories[category].icon}; ratio: 2`);
            categoryTitle.innerText = categories[category].title;
            categoryDescription.innerText = categories[category].description;
            categoryContent.innerHTML = categories[category].content;
            categoryImage.src = categories[category].image;

            // Show the details section and hide the slider
            document.getElementById("category-details").style.display = "block";
            document.querySelector(".uk-position-relative").style.display = "none";

            // Reinitialize UIkit icons to ensure the new icon is rendered
            UIkit.icon(categoryIcon);
        }

    </script>
@endsection

@push('scripts')
    <script src="{{ asset('js/blog.js') }}"></script>
@endpush
