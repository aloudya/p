@extends('template.layout')

@section('title', 'Daftar Jenis Surat')

@section('content')
<div class="row">
    <div class="col-g-12">
        <hr>
        <span>
            <h1><b>Daftar Jenis Surat</b></h1>
        </span>
        <br>
        <a href="{{url('/jenissurat/tambah')}}">
            <btn class="btn btn-success">+ Tambah Jenis Surat</btn>
        </a>
        <hr>
        <table class="table table-hovered table-bordered">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Jenis Surat
                    </th>
                    <th>
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis_surat as $js)
                <tr>
                    <td>#</td>
                    <td>{{$js->jenis_surat}}</td>
                    <td>
                        <a href="{{url('/jenissurat/edit/'.$js->id_jenis_surat)}}">
                            <btn class="btn btn-primary"><span class="material-symbols-outlined">
                                    edit_square
                                </span></btn>
                        </a>
                        <btn class="btn btn-danger hpsBtn" attr-id="{{$js->id_jenis_surat}}"><span class="material-symbols-outlined">
                                delete
                            </span></btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
@endsection
@section('footer')
<script type="module">
    $('.table tbody').on('click', '.hpsBtn', function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        let idJnsSurat = $(this).closest('.hpsBtn').attr('attr-id');
        //alert(id)
        swal.fire({
            title: "Apakah anda ingin menghapus data ini",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
            confirmButtonColor: 'red',
            cancelButtonColor: 'green',
            icon: 'warning'
        }).then((result) => {
            if (result.isConfirmed) {
                //Jalankan ajax post untuk hapus
                axios.post('/jenissurat/hapus', {
                    'id_jenis_surat': idJnsSurat
                }).then(function(response) {
                    console.log(response);
                    if (response.data.status) {
                        swal.fire({
                            title: "Berhasil!",
                            text: response.data.pesan,
                            icon: "success"
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        alert(response.data.pesan);
                    }
                }).catch(function(error) {
                    swal.fire({
                        title: "Gagal!",
                        text: "Datamu gagal dihapus",
                        icon: "error"
                    });
                });
            } else {
                //Close Modal Popup Event
            }
        }).catch(function(error) {
            swal.fire({
                title: "Gagal",
                text: "Datamu gagal dihapus!",
                icon: "error"
            });
        });
    });
</script>
@endsection