@extends('layouts.app')
@section('content')
@if(Auth::user()->role_id == 1)
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">დილერის მანქანები</h4>

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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ავტორი</th>
                                        <th>მანქანის დასახელება</th>
                                        <th>VIN#</th>
                                        <th>სტოკის ნომერი</th>
                                        <th>სახელი,გვარი</th>
                                        <th>მდგომარეობა</th>
                                        <th>რედაქტირება</th>
                                        <th>დადასტურება</th>
                                        <th>ინვოისის ფაილი</th>
                                        <th>ფოტოები</th>
{{--                                    <th>წაშლა</th>--}}
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($get_all_purchases as $purchase)
                                    <tr>
                                        <td>{{ $purchase->id }}</td>
                                        <td>{{ $purchase->user->name }}</td>
                                        <td>{{ $purchase->vehicle_title }}</td>
                                        <td>{{ $purchase->vin_code }}</td>
                                        <td>{{ $purchase->stock_number }}</td>
                                        <td>{{ $purchase->client_name }}</td>
                                        @if($purchase->is_accepted == 0)
                                            <td style="color: red;">არ არის დადასტურებული</td>
                                        @else
                                            <td style="color: black;">დადასტურებულია</td>
                                        @endif
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('purchase.edit', $purchase->id) }}"
                                                   class="btn btn-primary shadow btn-xs sharp me-1"></i>რედაქტირება</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('purchase.approve', $purchase->id) }}"
                                                   class="btn btn-success shadow btn-xs sharp me-1">დადასტურება</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('adminka.showUploadForm', $purchase->id) }}"
                                                   class="btn btn-warning shadow btn-xs sharp me-1">ფაილი</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('adminka.showPhotoUploadForm', $purchase->id) }}"
                                                   class="btn btn-danger shadow btn-xs sharp me-1">ფოტოები</a>
                                            </div>
                                        </td>
{{--                                        <td>--}}
{{--                                            <div class="d-flex">--}}
{{--                                                 <form action="{{ route('users.destroy', $user_item->id) }}" method="post">--}}
{{--                                                    @method('delete')--}}
{{--                                                    @csrf--}}
{{--                                                    <button class="btn btn-danger shadow btn-xs sharp"><i--}}
{{--                                                        class="fa fa-trash"></i>წაშლა</button>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        ადმინისტრატორები არ მოიძებნა
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    {{ $get_all_purchases->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@else

@endif
@endsection
