@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('galleries.index') }}">Dashboard</a> / Tambah Galeri
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah Galeri</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Deskripsi (Opsional)">{{ old('desc') }}</textarea>
                                        @error('desc')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
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
