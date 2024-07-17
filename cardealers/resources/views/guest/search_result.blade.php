@extends('guest.layout.app')
@section('content')
<main class="main">

    <div class="site-breadcrumb"
        style="background: url({{ asset('guest/img/breadcrumb/01.jpg') }})">

    </div>

   <style>
    label, p, h1, h2, h3, h4, h5, h6, input, li, button {
        font-family: 'BPG Arial Caps', sans-serif;
    }

    .img-fluid {
        width: 70px;
        height: 70px;
        margin-top: 10px;
    }
   </style>

    <div class="shop-checkout py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget">
                        <h4 class="checkout-widget-title">მომხმარებლის ინფორმაცია</h4>
                        <div class="checkout-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>მომხმარებლის სახელი</label>
                                            <input type="text" value="{{ $result->client_name }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>პირადი ნომერი</label>
                                            <input type="text" value="{{ $result->personal_number }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ფაქტობრივი მისამართი</label>
                                            <input type="text" value="{{ $result->address }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>მობილურის ნომერი</label>
                                            <input type="text" value="{{ $result->mobile_number }}" class="form-control"readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="checkout-widget">
                        <h4 class="checkout-widget-title">ინფორმაცია ავტომობილის შესახებ</h4>
                        <div class="checkout-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ავტომობილის დასახელება</label>
                                            <input type="text" value="{{ $result->vehicle_title }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ავტომობილის #VIN კოდი</label>
                                            <input type="text" value="{{ $result->vin_code }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>აუქციონი</label>
                                            <input type="text" value="{{ $result->auction_name }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ლოტი</label>
                                            <input type="text" value="{{ $result->stock_number }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Photo Gallery Start -->
                    <div class="checkout-widget">
                        <h4 class="checkout-widget-title">შესყიდვის ფოტოები</h4>
                        <div class="checkout-form">
                            <div id="lightgallery0" style="width: 100%;">
                                @foreach($result->galleriesBuy as $photo)
                                    <a href="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}">
                                        <img src="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}" class="img-fluid" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="checkout-widget">
                        <h4 class="checkout-widget-title">ავტომობილის ფოტოები ამერიკიდან</h4>
                        <div class="checkout-form">
                            <div id="lightgallery1" style="width: 100%;">
                                @foreach($result->galleries as $photo)
                                    <a href="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}">
                                        <img src="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}" class="img-fluid" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="checkout-widget">
                        <h4 class="checkout-widget-title">ავტომობილის ფოტოები ფოთის პორტში</h4>
                        <div class="checkout-form">
                            <div id="lightgallery2">
                                @foreach($result->galleriesPort as $photo)
                                    <a href="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}">
                                        <img src="{{ asset('cardealers/storage/app/public/' . $photo->image_path) }}" class="img-fluid" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Photo Gallery End -->
                </div>
                <div class="col-lg-4">
                    <div class="checkout cart-summary">
                        <h4 class="mb-30">ინვოისი</h4>
                        <ul>
                            <li><strong>შესყიდვის დრო:</strong> <span>{{ $result->buy_date }}</span></li>
                            <li><strong>შესყიდვის თანხა:</strong> <span>{{ $result->buy_price }}$</span></li>
                            <li><strong>ტრანსპორტირების თანხა:</strong> <span>{{ $result->transport_price }}$</span></li>
                            <li><strong>სრული ღირებულება:</strong> <span>{{ $result->full_price }}$</span></li>
                            <li class="cart-total"><strong>ინვოისის სახელი:</strong> <span>{{ $result->filename }}</span></li>
                        </ul>
                        <div class="text-end mt-40">
                            <a href="{{ asset('cardealers/storage/app/public/'. $result->filepath) }}" target="_blank">
                                <button class="theme-btn">ჩამოტვირთვა</button>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Include lightGallery CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.5.0/css/lightgallery.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.5.0/lightgallery.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        lightGallery(document.getElementById('lightgallery0'));
    });
    document.addEventListener("DOMContentLoaded", function() {
        lightGallery(document.getElementById('lightgallery1'));
    });
    document.addEventListener("DOMContentLoaded", function() {
        lightGallery(document.getElementById('lightgallery2'));
    });
</script>
@endsection
