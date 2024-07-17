@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">ინვოისის ჩამოტვირთვა</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <p><strong>File Name:</strong> {{ $purchase->filename }}</p>
                            @if($purchase->filepath)
                                <p><strong>File:</strong></p>
                                <a href="{{ asset('cardealers/storage/app/public/'. $purchase->filepath) }}" target="_blank">
                                <button class="btn btn-success">დააწკაპუნეთ</button>
                                </a>
                            @else
                                <p>ფაილი არ არის ატვირთული</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        @if(Auth::user()->role_id == 1)
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">ინვოისის ატვირთვა</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('adminka.uploadFile', $purchase->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">აირჩიეთ ფაილი:</label>
                                    <input type="file" name="file" class="form-control" id="file">
                                    @error('file')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">ატვირთვა</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<br>
<br>
<br>
<br>
@push('custom-javascript')

@endpush
@endsection

