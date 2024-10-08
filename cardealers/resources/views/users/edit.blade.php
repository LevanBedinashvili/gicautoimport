@extends('layouts.app')
@section('content')
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
                            <form action="{{ route('users.update', $edit_user_data->id) }}" method="post">
                                @method('patch')
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
                                        <label class="form-label">სახელი, გვარი</label>
                                        <input type="text" class="form-control" name="name" placeholder="შეიყვანეთ ადმინისტრატორის სახელი"
                                                                                value="{{ $edit_user_data->name }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ავტორიზაციის ელ.ფოსტა</label>
                                        <input type="email" class="form-control" name="email" placeholder="შეიყვანეთ ადმინისტრატორის ელ.ფოსტა"
                                                                                 value="{{ $edit_user_data->email }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ავტორიზაციის პაროლი</label>
                                        <input type="password" class="form-control" name="password" placeholder="შეიყვანეთ პაროლი">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">ადმინისტრატორის როლი</label>
                                        <select id="inputState" name="role_id" class="default-select form-control wide">
                                            <option value="{{ $edit_user_data->role_id }}" selected>{{ $edit_user_data->role->role_name }}</option>
                                            @forelse ($get_all_user_roles as $role_item)
                                            <option value="{{ $role_item->id }}">{{ $role_item->role_name }}</option>
                                            @empty
                                            <option disabled>როლები არ მოიძებნა</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">კალკულატორის მთვლელის ფასი</label>
                                        <input type="text" class="form-control" name="calculator_price" placeholder="შეიყვანეთ პაროლი" value="{{ $edit_user_data->calculator_price }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">მონაცემის ცვლილება</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div
@endsection
