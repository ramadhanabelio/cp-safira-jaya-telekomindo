@extends('layouts.admin')

@section('title', 'Daftar Galeri')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('dashboard') }}">Dashboard</a> / Daftar Galeri
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Galeri</div>
                                <a href="{{ route('galleries.create') }}" class="btn btn-success">
                                    <i class="la la-plus mr-2"></i> Tambah Data
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery-img"
                                                        width="100">
                                                </td>
                                                <td>{{ $gallery->desc }}</td>
                                                <td>
                                                    <a href="{{ route('galleries.edit', $gallery) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('galleries.destroy', $gallery) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Hapus data ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Belum ada data galeri.</td>
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
