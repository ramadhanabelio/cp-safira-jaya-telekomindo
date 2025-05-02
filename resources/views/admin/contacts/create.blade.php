@extends('layouts.admin')

@section('title', 'Tambah Kontak')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('contacts.index') }}">Dashboard</a> / Tambah Kontak
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah Kontak</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Masukkan email" required>
                                        <small class="form-text text-muted">Kami tidak akan membagikan email Anda.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Pesan</label>
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Tulis pesan"></textarea>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('contacts.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
