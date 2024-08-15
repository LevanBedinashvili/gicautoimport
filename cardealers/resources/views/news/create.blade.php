@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ადმინისტრატორის დამატება</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('news.store') }}" method="post">
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
                                        <label class="form-label">სიახლის სათაური</label>
                                        <input type="text" class="form-control" name="title" placeholder="შეიყვანეთ დასახელება">
                                    </div>
                                    <br><br>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">სიახლის აღწერა</label>
                                        <textarea name="description" id="editor"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">დამატება</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>    <br>    <br>
</div>
<br>    <br>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
