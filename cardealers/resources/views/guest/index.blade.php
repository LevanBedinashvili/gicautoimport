@extends('guest.layout.app')
@section('content')

<style>
    .find-car-form .form-select,
    .find-car-form .form-control {
        padding: 5px 10px 5px 25px;
        border-radius: 12px;
        font-size: 18px;
        box-shadow: none;
        color: var(--body-text-color);
    }

</style>

<main class="main">
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single"
                style="background: url({{ asset('guest/img/slider/slider-1.jpg') }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <a href="{{ route('info_one') }}" class="hero-title"
                                    data-animation="fadeInRight" data-delay=".50s"
                                    style="font-family: 'BPG Arial Caps', sans-serif;">
                                    არ გაუშვა შესაძლებლობა, შექმნა ავტონომიური ბიზნესი.
                                </a>
                                <a href="{{ route('info_one') }}" data-animation="fadeInLeft"
                                    data-delay=".75s" style="color: white;">
                                    Do not miss the opportunity to create an autonomous business
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single"
                style="background: url({{ asset('guest/img/slider/slider-2.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <a href="{{ route('info_two') }}" class="hero-title"
                                    data-animation="fadeInRight" data-delay=".50s"
                                    style="font-family: 'BPG Arial Caps', sans-serif;">
                                    ოპტიმალური გადაწყვეტილება დილერებისთვის, ჩვენთან თანამშრომლობა კომფორტულია.
                                </a>
                                <a href="{{ route('info_two') }}" data-animation="fadeInLeft"
                                    data-delay=".75s" style="color: white;">
                                    Optimal solution for dealers, cooperation with us is comfortable.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single"
                style="background: url({{ asset('guest/img/slider/slider-3.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                    General Index Corp!</h6>
                                <a href="{{ route('info_three') }}" class="hero-title"
                                    data-animation="fadeInRight" data-delay=".50s"
                                    style="font-family: 'BPG Arial Caps', sans-serif;">
                                    ავტომობილის შეკვეთა გსურს? ის, რაც შენთვის მნიშვნელოვანია, აქ აღმოაჩენ.
                                </a>
                                <a href="{{ route('info_three') }}" data-animation="fadeInLeft"
                                    data-delay=".75s" style="color: white;">
                                    Do you want to order a car? You will find what is important to you here.
                                </a>
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
                <h4 class="find-car-title" style="font-family: 'BPG Arial Caps', sans-serif;">მოძებნეთ თქვენი ავტომობილი
                </h4>
                <div class="row">
                    <form action="{{ route("searchvehicle") }}">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label style="font-family: 'BPG Arial Caps', sans-serif;">შეიყვანეთ თქვენი პირადი
                                    ნომერი</label>
                                <input type="text" name="piradinomeri" class="form-control" style="width: 100%">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label style="font-family: 'BPG Arial Caps', sans-serif;" style="width: 100%">#VIN კოდის ბოლო 6 ციფრი </label>
                                <br>
                                <input type="text" name="vincode" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 align-self-end" style="margin-top: 20px; display:flex;">
                            <input class="btn btn-info"
                                style="font-family: 'BPG Arial Caps', sans-serif; width: 100%; background: #12487f; color: white; border: black;"
                                type="submit" value="მოძებნა">
                        </div>
                    </form>
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
                                Embark on a seamless car-buying journey, where an array of vehicles awaits your
                                exploration, from sleek sedans to robust SUVs. Our commitment to fair and transparent
                                pricing ensures that you experience affordable excellence with no hidden costs. Save
                                time with our streamlined buying process, featuring hassle-free paperwork, quick
                                approvals, and a straightforward approach. Plus, our dedicated team provides
                                personalized service, guiding you through every step, from choosing the perfect vehicle
                                to securing financing. Elevate your driving experience with us – where simplicity meets
                                satisfaction.

                            </p>
                        </div>
                        <div class="choose-img wow fadeInUp" data-wow-delay=".25s">
                            <img src="{{ asset('guest/img/choose/01.png') }}" alt>
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
                                        <p>Discover a range of vehicles tailored to your lifestyle, from sleek sedans to
                                            rugged SUVs and powerful trucks. Our curated selection ensures you find the
                                            perfect ride with the latest models and cutting-edge technology.
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
                                        <p>Beyond selling cars, we offer a personalized experience. Our knowledgeable
                                            team is here to guide you through every step, offering expert advice and
                                            assistance. From choosing the right vehicle to securing financing,
                                            experience the difference of personalized service
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
                                        <p>Your time is precious. Our streamlined buying process with hassle-free
                                            paperwork, quick approvals, and a straightforward approach makes it easier
                                            than ever to drive off in your dream car.
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
                                        <p>We believe in fair and transparent pricing. No hidden costs or surprise fees.
                                            Enjoy the peace of mind that comes with affordable excellence, ensuring you
                                            get the best value for your investment.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
</main>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
<script>
    $(document).ready(function () {
        $('#auctionSelect').change(function () {
            var auctionId = $(this).val();

            if (auctionId !== '') {
                $.ajax({
                    url: '{{ route("get-states", ":id") }}'
                        .replace(':id', auctionId),
                    type: 'GET',
                    success: function (data) {
                        // Clear and populate the states select box
                        $('#stateSelect').html('');
                        if (data.length > 0) {
                            $.each(data, function (index, state) {
                                $('#stateSelect').append(
                                    '<option class="option" value="' + state
                                    .rate + '" data-price="' + state.rate +
                                    '">' + state.name + '</option>');
                            });
                            $('#stateSelect').show();
                        } else {
                            $('#stateSelect').hide();
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            } else {
                $('#stateSelect').hide();
            }
        });
    });

</script>
@endsection
