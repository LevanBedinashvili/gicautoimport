@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">რეიტინგი: {{ $get_rating->start_date }}-დან {{ $get_rating->end_date }}-მდე</h4>
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
                                <table id="example" class="display table" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>სახელი</th>
                                        <th>რაოდენობა</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($ratings as $rating)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $rating->name }}
                                            </td>
                                            <td>{{ $rating->purchases_count }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
                                <form action="{{ route('rating.update') }}" method="post">
                                    @method('post')
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
                                            <label class="form-label">სახელი</label>
                                            <input type="date" class="form-control" name="start_date" value="{{ $get_rating->start_date }}" placeholder="შეიყვანეთ ფილიალის დასახელება">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">სახელი</label>
                                            <input type="date" class="form-control" name="end_date" value="{{ $get_rating->end_date }}" placeholder="შეიყვანეთ ფილიალის დასახელება">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">რედაქტირება</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br><br><br><br>
@endsection
