@extends('layouts.admin')

@section('title', 'Daftar Kontak')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('dashboard') }}">Dashboard</a> / Daftar Kontak
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Kontak</div>
                                <a href="{{ route('contacts.create') }}" class="btn btn-success">
                                    <i class="la la-plus mr-2"></i> Tambah Data
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Pesan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contacts as $index => $contact)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>
                                                    <a href="{{ route('contacts.edit', $contact) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Hapus kontak ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Belum ada data kontak.</td>
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
