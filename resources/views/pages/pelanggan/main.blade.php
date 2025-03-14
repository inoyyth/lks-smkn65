@extends('layouts.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $module }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="row mb-4">
        <div class="col-lg-6">
            <a href="{{ url('/pelanggan/add') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-lg-6">
            <form method="GET" action="{{ url('/pelanggan') }}">
                <div class="row">
                    <div class="col-lg-10">
                        <input name="filter" value="{{ $filter }}" type="text" class="form-control"  placeholder="filter">
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
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
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $k=>$v)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->telp }}</td>
                        <td>{{ $v->tgl_lahir }}</td>
                        <td>{{ $v->alamat }}</td>
                        <td><img src="{{ asset('storage/'.$v->image) }}" style="width: 100px;"/></td>
                        <td>
                            <a href="{{ url('/pelanggan/edit/'.$v->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/pelanggan/destroy/'.$v->id) }}" class="btn btn-danger">Delete</a>
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

