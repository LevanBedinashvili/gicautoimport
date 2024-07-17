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
                        <h4 class="card-title">შესყიდვის ფოტოები</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ფოტო</th>
                                        <th>სურათის წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($galleriesbuy as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td><a target="_blank" href="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}"><img src="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}" width="100" alt="Image"></a></td>
                                        <td>
                                            <form action="{{ route('adminka.deleteGalleryBuyPhoto', $gallery->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        ფოტოები არ მოიძებნა
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">შესყიდვის ფოტოების</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('adminka.storeGalleryBuyPhoto', $purchase->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">აირჩიეთ ფაილი:</label>
                                    <input type="file" name="photos[]" class="form-control" id="file" multiple>
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
    </div>
</div>
<br><br>
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
                        <h4 class="card-title">ფოტოები ამერიკაში</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ფოტო</th>
                                        <th>სურათის წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td><a target="_blank" href="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}"><img src="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}" width="100" alt="Image"></a></td>
                                        <td>
                                            <form action="{{ route('adminka.destroyGalleryPhotos', $gallery->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        ფოტოები არ მოიძებნა
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">ფოტოების ატვირთვა (ამერიკა)</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('adminka.storeGalleryPhoto', $purchase->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">აირჩიეთ ფაილი:</label>
                                    <input type="file" name="photos[]" class="form-control" id="file" multiple>
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
    </div>
</div>
<br>
<br>
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
                        <h4 class="card-title">ფოტოები ფოთის პორტიდან</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ფოტო</th>
                                        <th>სურათის წაშლა</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($galleriesport as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td><a target="_blank" href="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}"><img src="{{ asset('cardealers/storage/app/public/'. $gallery->image_path) }}" width="100" alt="Image"></a></td>
                                        <td>
                                            <form action="{{ route('adminka.destroyGalleryPortPhotos', $gallery->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        ფოტოები არ მოიძებნა
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">ფოტოების ატვირთვა (ფოთის პორტი)</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('adminka.storeGalleryPortPhoto', $purchase->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">აირჩიეთ ფაილი:</label>
                                    <input type="file" name="photos[]" class="form-control" id="file" multiple>
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
    </div>
</div>
<br>
<br>
@push('custom-javascript')

@endpush
@endsection

