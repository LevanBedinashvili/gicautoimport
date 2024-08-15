@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ადმინების სია</h4>

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
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>სიახლის სათაური</th>
                                        <th>თარიღი</th>
                                        <th>რედაქტირება</th>
{{--                                        <th>წაშლა</th>--}}
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($get_all_news as $news_item)
                                    <tr>
                                        <td>{{ $news_item->id }}</td>
                                        <td>{{ $news_item->title }}</td>
                                        <td>{{ $news_item->create_date }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('news.edit', $news_item->id) }}"
                                                   class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i>რედაქტირება</a>
                                            </div>
                                        </td>
{{--                                        <td>--}}
{{--                                            <div class="d-flex">--}}
{{--                                                 <form action="{{ route('users.destroy', $news_item->id) }}" method="post">--}}
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
                                        სიახლეები არ მოიძებნა
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
@endsection
