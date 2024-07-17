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
                                        <input type="text" class="form-control" name="auction_name" value="{{ $purchase->auction_name }}" placeholder="აუქციონის სახელი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">სტოკის ნომერი</label>
                                        <input type="text" class="form-control" name="stock_number" value="{{ $purchase->stock_number }}" placeholder="სტოკის ნომერი">
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
                                        <input type="text" class="form-control" name="full_price" value="{{ $purchase->full_price }}" placeholder="სრული ღირებულება">
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
<br>
<br>
<br>
<br>
@push('custom-javascript')

@endpush
@endsection
