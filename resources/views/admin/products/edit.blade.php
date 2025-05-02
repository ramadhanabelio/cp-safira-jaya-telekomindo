@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('dashboard') }}">Dashboard</a> / Edit Produk
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit Produk</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $product->name) }}">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Tipe Produk</label>
                                        <input type="text" class="form-control" id="type" name="type"
                                            value="{{ old('type', $product->type) }}">
                                        @error('type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="form-control" id="desc" name="desc" rows="4">{{ old('desc', $product->desc) }}</textarea>
                                        @error('desc')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            value="{{ old('price', $product->price) }}">
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
                                    <button type="submit" class="btn btn-success">Perbarui</button>
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
