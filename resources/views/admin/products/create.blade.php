@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('products.index') }}">Dashboard</a> / Tambah Produk
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah Produk</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nama Produk" value="{{ old('name') }}">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Tipe Produk</label>
                                        <input type="text" class="form-control" id="type" name="type"
                                            placeholder="Tipe Produk" value="{{ old('type') }}">
                                        @error('type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Deskripsi Produk">{{ old('desc') }}</textarea>
                                        @error('desc')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="Harga Produk" value="{{ old('price') }}">
                                        @error('price')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Gambar Produk</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @if (isset($product) && $product->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $product->image) }}" width="150">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
