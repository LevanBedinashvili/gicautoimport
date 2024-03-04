@extends('guest.layout.app')
@section('content')

<main class="main">
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url({{ asset('guest/img/slider/slider-1.jpg') }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Best Way To Find Your <span>Dream</span> Car
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Drive into a world of possibilities with us. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url({{ asset('guest/img/slider/slider-2.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Best Way To Find Your <span>Dream</span> Car
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Drive into a world of possibilities with us. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url({{ asset('guest/img/slider/slider-3.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Best Way To Find Your <span>Dream</span> Car
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Drive into a world of possibilities with us. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="find-car">
        <div class="container">
            <div class="find-car-form">
                <h4 class="find-car-title">Let's Find Your Perfect Car</h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Auctions</label>
                                <select class="select">
                                    <option value="#">All Auctions</option>
                                    @foreach($auction as $item_auction)
                                    <option value="#">{{ $item_auction->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>States</label>
                                <select class="select" id="stateSelect">
                                    <option value="#">All States</option>
                                    @foreach($state as $item_states)
                                    <option value="{{ $item_states->rate }}" data-price="{{ $item_states->rate }}">{{ $item_states->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Ports</label>
                                <select class="select">
                                    <option value="#">All Ports</option>
                                    @foreach($port as $item_ports)
                                    <option value="#">{{ $item_ports->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Vehicle Types</label>
                                <select class="select">
                                    <option value="#">All Vehicle Types</option>
                                    @foreach($vehicle as $item_vehicle)
                                    <option value="#">{{ $item_vehicle->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div id="displayPrice" style="margin-top: 10px; color: red; display: none;">
                            Vehicle import price: <span id="selectedPrice"></span>
                        </div>

                        <div class="col-lg-12 align-self-end" style="margin-top: 20px; display:flex;">
                            <button class="btn btn-info" style="width: 100%; background: #12487f; color: white; border: black;" type="button" onclick="calculatePrice()">Calculate</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="({{ asset('guest/img/about/01.png') }}" alt>
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <i class="flaticon-car"></i>
                            </div>
                            <b>5 Years Of <br> experiance</b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline justify-content-start">
                                <i class="flaticon-drive"></i> About Us
                            </span>
                            {{-- <h2 class="site-title">
                                World Largest <span>Car Dealer</span> Marketplace.
                            </h2> --}}
                        </div>
                        <p class="about-text">
                            Drive into a world of possibilities with our dealership. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                        </p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    Reasonable Prices
                                </li>
                                <li>
                                    Reasonable Time and Simplicity
                                </li>
                                <li>
                                    Personalized Service
                                </li>
                            </ul>
                        </div>
                        <a href="about.html" class="theme-btn mt-4">Discover More<i
                                class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter-area pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-car-rental"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                            <h6 class="title">+ Available Cars </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-car-key"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="900" data-speed="3000">900</span>
                            <h6 class="title">+ Happy Clients</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-screwdriver"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="1500" data-speed="3000">1500</span>
                            <h6 class="title">+ Team Workers</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-review"></i>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                            <h6 class="title">+ Years Of Experience</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="car-category py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="flaticon-drive"></i> Car Category</span>
                        <h2 class="site-title">Car By Body <span>Types</span></h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/01.png') }}" alt>
                        </div>
                        <h5>Sedan</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/02.png') }}" alt>
                        </div>
                        <h5>Compact</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".75s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/03.png') }}" alt>
                        </div>
                        <h5>Convertible</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/04.png') }}" alt>
                        </div>
                        <h5>SUV</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/05.png') }}" alt>
                        </div>
                        <h5>Crossover</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.50s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/06.png') }}" alt>
                        </div>
                        <h5>Wagon</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/07.png') }}" alt>
                        </div>
                        <h5>Sports</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/08.png') }}" alt>
                        </div>
                        <h5>Pickup</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay=".75s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/09.png') }}" alt>
                        </div>
                        <h5>Family MPV</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/10.png') }}" alt>
                        </div>
                        <h5>Coupe</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/11.png') }}" alt>
                        </div>
                        <h5>Electric</h5>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.50s">
                        <div class="category-img">
                            <img src="{{ asset('guest/img/category/12.png') }}" alt>
                        </div>
                        <h5>Luxury</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="choose-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-content">
                        <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline text-white justify-content-start">
                                <i class="flaticon-drive"></i> Why Choose Us
                            </span>
                            <h2 class="site-title text-white mb-10">We are dedicated <span>to provide</span> quality
                                service</h2>
                            <p class="text-white">
                                Embark on a seamless car-buying journey, where an array of vehicles awaits your exploration, from sleek sedans to robust SUVs. Our commitment to fair and transparent pricing ensures that you experience affordable excellence with no hidden costs. Save time with our streamlined buying process, featuring hassle-free paperwork, quick approvals, and a straightforward approach. Plus, our dedicated team provides personalized service, guiding you through every step, from choosing the perfect vehicle to securing financing. Elevate your driving experience with us – where simplicity meets satisfaction.

                            </p>
                        </div>
                        <div class="choose-img wow fadeInUp" data-wow-delay=".25s">
                            <img src="assets/img/choose/01.png" alt>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content-wrapper wow fadeInRight" data-wow-delay=".25s">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mt-lg-5">
                                <div class="choose-item">
                                    <span class="choose-count">01</span>
                                    <div class="choose-item-icon">
                                        <i class="flaticon-car"></i>
                                    </div>
                                    <div class="choose-item-info">
                                        <h3>Vehicle Types</h3>
                                        <p>Discover a range of vehicles tailored to your lifestyle, from sleek sedans to rugged SUVs and powerful trucks. Our curated selection ensures you find the perfect ride with the latest models and cutting-edge technology.
                                        </p>
                                    </div>
                                </div>
                                <div class="choose-item mb-lg-0">
                                    <span class="choose-count">03</span>
                                    <div class="choose-item-icon">
                                        <i class="flaticon-drive-thru"></i>
                                    </div>
                                    <div class="choose-item-info">
                                        <h3>Personalized Service</h3>
                                        <p>Beyond selling cars, we offer a personalized experience. Our knowledgeable team is here to guide you through every step, offering expert advice and assistance. From choosing the right vehicle to securing financing, experience the difference of personalized service
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="choose-item">
                                    <span class="choose-count">02</span>
                                    <div class="choose-item-icon">
                                        <i class="flaticon-chauffeur"></i>
                                    </div>
                                    <div class="choose-item-info">
                                        <h3>Reasonable Time and Simplicity</h3>
                                        <p>Your time is precious. Our streamlined buying process with hassle-free paperwork, quick approvals, and a straightforward approach makes it easier than ever to drive off in your dream car.
                                        </p>
                                    </div>
                                </div>
                                <div class="choose-item mb-lg-0">
                                    <span class="choose-count">04</span>
                                    <div class="choose-item-icon">
                                        <i class="flaticon-online-payment"></i>
                                    </div>
                                    <div class="choose-item-info">
                                        <h3>Reasonable Price</h3>
                                        <p>We believe in fair and transparent pricing. No hidden costs or surprise fees. Enjoy the peace of mind that comes with affordable excellence, ensuring you get the best value for your investment.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="car-brand py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="flaticon-drive"></i> Popular Brands</span>
                        <h2 class="site-title">Our Top Quality <span>Brands</span></h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/01.png') }}" alt>
                        </div>
                        <h5>Ferrari</h5>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/02.png') }}" alt>
                        </div>
                        <h5>Hyundai</h5>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay=".75s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/03.png') }}" alt>
                        </div>
                        <h5>Mercedes Benz</h5>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay="1s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/04.png') }}" alt>
                        </div>
                        <h5>Toyota</h5>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/05.png') }}" alt>
                        </div>
                        <h5>BMW</h5>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="#" class="brand-item wow fadeInUp" data-wow-delay="1.50s">
                        <div class="brand-img">
                            <img src="{{ asset('guest/img/brand/06.png') }}" alt>
                        </div>
                        <h5>Nissan</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>


</main>

<script>
    function calculatePrice() {
        // Get the selected state element
        var stateSelect = document.getElementById("stateSelect");

        // Get the selected option
        var selectedOption = stateSelect.options[stateSelect.selectedIndex];

        // Get the price attribute value
        var price = selectedOption.getAttribute("data-price");

        // Display the price on the HTML page
        var displayPriceDiv = document.getElementById("displayPrice");
        var selectedPriceSpan = document.getElementById("selectedPrice");

        selectedPriceSpan.innerHTML = price;
        displayPriceDiv.style.display = "block";
    }
</script>
@endsection
