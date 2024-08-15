@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">შესყიდვაზე ინფორმაციის დამატება</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('purchase.store') }}" method="post">
                                @csrf
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
                                        <input type="text" class="form-control" name="vehicle_title" placeholder="შეიყვანეთ მანქანის დასახელება">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">VIN#</label>
                                        <input type="text" class="form-control" name="vin_code" placeholder="შეიყვანეთ ვინ კოდი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">აუქციონი</label>
                                        <select class="form-control" name="auction_name">
                                            <option value="" disabled selected>აირჩიეთ აუქციონი</option>
                                            <option value="Copart">Copart</option>
                                            <option value="IAAI">IAAI</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ლოტი</label>
                                        <input type="text" class="form-control" name="stock_number" placeholder="ლოტი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">შესყიდვის თარიღი</label>
                                        <input type="date" class="form-control" name="buy_date" placeholder="ესყიდვის თარიღი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">შესყიდვის თანხა</label>
                                        <input type="text" class="form-control" name="buy_price" placeholder="შესყიდვის თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ტრანსპორტირების თანხა</label>
                                        <input type="text" class="form-control" name="transport_price" placeholder="ტრანსპორტირების თანხა">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">სრული ღირებულება</label>
                                        <input type="text" class="form-control" name="full_price" placeholder="დაემატება შენახვის შემდეგ" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">პირველადი შენატანი</label>
                                        <input type="text" class="form-control" name="pirveladi_shenatani" placeholder="შეიყვანეთ პირველადი შენატანი" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კლიენტის სახელი და გვარი</label>
                                        <input type="text" class="form-control" name="client_name" placeholder="კლიენტის სახელი და გვარი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">პირადი ნომერი</label>
                                        <input type="text" class="form-control" name="personal_number" placeholder="პირადი ნომერი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ფაქტიური მისამართი</label>
                                        <input type="text" class="form-control" name="address" placeholder="ფაქტიური მისამართი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ტელეფონი</label>
                                        <input type="text" class="form-control" name="mobile_number" placeholder="ტელეფონი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კომენტარი</label>
                                        <input type="text" class="form-control" name="commentary" placeholder="კომენტარი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">დაზღვევის თანხა</label>
                                        <input type="text" class="form-control" name="insurance_price" value="0" placeholder="დაზღვევის თანხა">
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

