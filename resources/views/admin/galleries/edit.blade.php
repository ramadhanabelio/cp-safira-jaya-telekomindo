@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('dashboard') }}">Dashboard</a> / Edit Galeri
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit Galeri</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image">Gambar (Kosongkan jika tidak ingin mengubah)</label><br>
                                        @if ($gallery->image)
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Current Image"
                                                width="150" class="mb-2">
                                        @endif
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="form-control" id="desc" name="desc" rows="3">{{ old('desc', $gallery->desc) }}</textarea>
                                        @error('desc')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Perbarui</button>
                                    <a href="{{ route('galleries.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
