@extends('layouts.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <a href="{{ url('/pelanggan/add') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List Pelanggan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $k=>$v)
                    <tr>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->telp }}</td>
                        <td>{{ $v->tgl_lahir }}</td>
                        <td>{{ $v->alamat }}</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ URL::asset('themes/js/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('themes/js/datatables-simple-demo.js') }}"></script>
@endpush

