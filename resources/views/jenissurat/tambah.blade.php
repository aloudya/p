@extends('template.layout')

@section('title', 'Tambah Jenis Surat')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <hr>
        <div class="card">
            <form action="{{url('jenissurat/simpan')}}" method="post" id="formTambah">
                <div class="card-header">
                    <h1><b>Tambah Jenis Surat</b></h1>
                </div>

                <div class="card-body">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Nama Jenis Surat</label>
                            <input type="text" name="jenis_surat" class="form-control">
                            @csrf
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection