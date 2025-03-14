@extends('layouts.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/pelanggan') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/pelanggan/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input name="id" value="{{ $data->id }}" type="text" class="form-control"  placeholder="nama" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input name="name" value="{{ $data->name }}" type="text" class="form-control"  placeholder="nama" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input name="email" value="{{ $data->email }}" type="email" class="form-control"  placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" value="{{ $data->tgl_lahir }}" type="text" class="form-control datepicker"  placeholder="tgl lahir" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telp</label>
                    <input name="telp" value="{{ $data->telp }}" type="text" class="form-control"  placeholder="telp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                    <input name="image" type="file" value="{{ $data->image }}" class="form-control"  placeholder="image" required>
                    <img src="{{ asset('storage/'.$data->image) }}" style="width: 200px;"/>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
@endpush
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<script>
$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd', // You can change the format as per your need
        autoclose: true        // Automatically closes the datepicker after selection
    });
});
</script>
@endpush

