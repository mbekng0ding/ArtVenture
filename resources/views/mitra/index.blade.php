@extends('layout.layout')
@section('title', 'Data Mitra')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <span class="h1" style="color:#757171; font-weight: bold;">
                        Data Mitra
                    </span>
                </div>
                <a href="mitra/cetak">
                    <button class="btn btn-primary ml-auto mt-5" style="float: right">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>Cetak PDF
                    </button>
                <hr>
                <a href="/mitra/tambah" style="margin-bottom: 10px">
                    <button class="btn btn-lg btn-success mb-4">Tambah Data Mitra</button>
                </a>
                <h5>Total Mitra : {{ $totalMitra }}</h5>
                <table class="table table-hover table-bordered DataTable">
                    <thead>
                        <tr>
                            <th>NAMA MITRA</th>
                            <th>FOTO MITRA</th>
                            <th>BISNIS MITRA</th>
                            <th>KONTAK MITRA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mitra as $l)
                            <tr>
                                <td>{{ $l->nama_mitra }}</td>
                                <td>
                                    @if ($l->foto_mitra)
                                        <img src="{{ url('foto') . '/' . $l->foto_mitra }} "
                                            style="max-width: 150px; height: auto;" />
                                    @endif
                                </td>
                                <td>{{ $l->bisnis_mitra }}</td>
                                <td>{{ $l->kontak_mitra }}</td>
                                <td>

                                    <a href="mitra/edit/{{ $l->id_mitra }}">
                                        <button class="btn btn-primary">EDIT</button>
                                    </a>
                                    <a href="mitra/detail/{{ $l->id_mitra }}">
                                        <button class="btn btn-primary">DETAIL</button>
                                    </a>
                                    <button class="btn btn-danger btnHapus" idMitra="{{ $l->id_mitra }}">HAPUS</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">


        </div>
        <div class="card-footer">

        </div>
    </div>
    </div>
    </div>


    <script type="module">
        $('tbody').on('click', '.btnHapus', function(a) {
            a.preventDefault();
            let idMitra = $(this).closest('.btnHapus').attr('idMitra');
            swal.fire({
                title: "Apakah anda ingin menghapus data ini?",
                showCancelButton: true,
                confirmButtonText: 'Setuju',
                cancelButtonText: `Batal`,
                confirmButtonColor: 'red'

            }).then((result) => {
                if (result.isConfirmed) {
                    //Ajax Delete
                    $.ajax({
                        type: 'DELETE',
                        url: 'mitra/hapus',
                        data: {
                            id_mitra: idMitra,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.success) {
                                swal.fire('Berhasil di hapus!', '', 'success').then(function() {
                                    //Refresh Halaman
                                    location.reload();
                                });
                            }
                        }
                    });
                }
            });
        });
        
        $(document).ready(function() {
            $('.DataTable').DataTable();
        });
    </script>
@endsection
