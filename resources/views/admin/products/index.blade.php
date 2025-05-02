@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('dashboard') }}">Dashboard</a> / Daftar Produk
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Produk</div>
                                <a href="{{ route('products.create') }}" class="btn btn-success">
                                    <i class="la la-plus mr-2"></i> Tambah Data
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tipe</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $index => $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->type }}</td>
                                                <td>{{ $product->desc }}</td>
                                                <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Hapus produk ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Belum ada data produk.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
