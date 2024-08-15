@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">მონაცემების ცვლილება</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('discount.update') }}" method="post">
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
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">აქციის აღწერა</label>
                                        <textarea name="description" id="editor">{{ $discount->description }}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">აქციის ჩართვა/გამორთვა</label>
                                        <select id="inputState" name="is_enabled" class="default-select form-control wide">
                                            <option value="{{ $discount->is_enabled }}" selected>
                                                @if($discount->is_enabled == 1)
                                                    ჩართულია
                                                @else
                                                    გამორთულია
                                                @endif
                                            </option>
                                            <option value="1">ჩართვა</option>
                                            <option value="0">გამორთვა</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">რედაქტირება</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
