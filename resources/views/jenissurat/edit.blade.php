@extends('template.layout')

@section('title', 'Edit Jenis Surat')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <hr>
        <div class="card">
            <form action="{{url('jenissurat/simpan')}}" method="post" id="formTambah">
                <div class="card-header">
                    <h1>Edit Jenis Surat: <b> "{{$jnsSurat->jenis_surat}}"</b></h1>
                </div>

                <div class="card-body">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Nama Jenis Surat</label>
                            <input type="text" name="jenis_surat" class="form-control" value="{{$jnsSurat->jenis_surat}}">
                            <input type="hidden" name="id_jenis_surat" value="{{$jnsSurat->id_jenis_surat}}">
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