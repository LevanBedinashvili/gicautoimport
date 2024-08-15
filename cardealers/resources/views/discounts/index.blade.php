@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="text-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-secondary text-center">
                        <br>
                        <h4>აქცია</h4>
                    </div>
                    @if($discount->is_enabled == 1)
                        <div class="alert alert-secondary">
                            <p>{!! $discount->description !!}</p>
                        </div>
                    @else
                        <div class="alert alert-secondary">
                            <p style="color: red;">მიმდინარე კვირაში აქცია არ არის</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
