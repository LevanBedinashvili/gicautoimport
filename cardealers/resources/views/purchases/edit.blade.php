@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <br><br><br><br>
                        <h4 class="card-title">მონაცემების ცვლილება</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('purchase.update', $purchase->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    @if (session('Error'))
                                    <div class="alert alert-danger">
                                        {{ session('Error') }}
                                    </div>
                                    @endif
                                    @if (session('Success'))
                                    <div class="alert alert-success">
                                        {{ session('Success') }}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">მანქანის დასახელება</label>
                                        <input type="text" class="form-control" name="vehicle_title" value="{{ $purchase->vehicle_title }}" placeholder="შეიყვანეთ ვინ კოდი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">VIN#</label>
                                        <input type="text" class="form-control" name="vin_code" value="{{ $purchase->vin_code }}" placeholder="შეიყვანეთ ვინ კოდი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">აუქციონი</label>
                                        <select class="form-control" name="auction_name">
                                            <option value="{{ $purchase->auction_name }}" selected>{{ $purchase->auction_name }}</option>
                                            <option value="Copart">Copart</option>
                                            <option value="IAAI">IAAI</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ლოტი</label>
                                        <input type="text" class="form-control" name="stock_number" value="{{ $purchase->stock_number }}" placeholder="ლოტი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">შესყიდვის თარიღი</label>
                                        <input type="date" class="form-control" name="buy_date" value="{{ $purchase->buy_date }}" placeholder="შესყიდვის თარიღი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">შესყიდვის თანხა</label>
                                        <input type="text" class="form-control" name="buy_price" value="{{ $purchase->buy_price }}" placeholder="შესყიდვის თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ტრანსპორტირების თანხა</label>
                                        <input type="text" class="form-control" name="transport_price" value="{{ $purchase->transport_price }}" placeholder="ტრანსპორტირების თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">სრული ღირებულება</label>
                                        <input type="text" class="form-control" name="full_price" value="{{ $purchase->full_price }}" placeholder="სრული ღირებულება" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">პირველადი შენატანი</label>
                                        <input type="text" class="form-control" name="pirveladi_shenatani" value="{{ $purchase->pirveladi_shenatani }}" placeholder="პირველადი შენატანი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კლიენტის სახელი და გვარი</label>
                                        <input type="text" class="form-control" name="client_name" value="{{ $purchase->client_name }}" placeholder="კლიენტის სახელი და გვარი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">პირადი ნომერი</label>
                                        <input type="text" class="form-control" name="personal_number" value="{{ $purchase->personal_number }}" placeholder="პირადი ნომერი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ფაქტიური მისამართი</label>
                                        <input type="text" class="form-control" name="address" value="{{ $purchase->address }}" placeholder="ფაქტიური მისამართი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ტელეფონი</label>
                                        <input type="text" class="form-control" name="mobile_number" value="{{ $purchase->mobile_number }}" placeholder="ტელეფონი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კომენტარი</label>
                                        <input type="text" class="form-control" name="commentary" value="{{ $purchase->commentary }}" placeholder="კომენტარი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">დაზღვევის თანხა</label>
                                        <input type="text" class="form-control" name="insurance_price" value="{{ $purchase->insurance_price }}" placeholder="დაზღვევის თანხა">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">შენახვა</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Auth::user()->role_id == 1)
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">მონაცემების ცვლილება</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('purchase.updateAdmin', $purchase->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">შესყიდვის თანხა</label>
                                        <input type="text" class="form-control" name="buy_price" value="{{ $purchase->buy_price }}" placeholder="შესყიდვის თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ტრანსპორტირების თანხა</label>
                                        <input type="text" class="form-control" name="transport_price" value="{{ $purchase->transport_price }}" placeholder="ტრანსპორტირების თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">სრული ღირებულება</label>
                                        <input type="text" class="form-control" name="full_price" value="{{ $purchase->full_price }}" placeholder="სრული ღირებულება" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">გადახდილი თანხა</label>
                                        <input type="text" class="form-control" name="paid_price" value="{{ $purchase->paid_price }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">დავალიანება</label>
                                        <input type="text" class="form-control" name="davalianeba" value="{{ $purchase->davalianeba }}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კონტეინერი</label>
                                        <input type="text" class="form-control" name="container" value="{{ $purchase->container }}" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tracking link</label>
                                        <input type="text" class="form-control" name="container_link" value="{{ $purchase->container_link }}" >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">შენახვა</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@endif
<br>
<br>
@push('custom-javascript')

@endpush
@endsection
