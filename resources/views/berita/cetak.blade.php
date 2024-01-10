<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cetak Data</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th>Nama Berita</th>
                <th>Isi Berita</th>
                <th>Foto Berita</th>
                {{-- <th>Tipe Obat</th>
                <th>Stok Obat</th>
                <th>Tanggal EXP</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $n)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $n->Nama_Berita }}</td>
                <td>{{ $n->Isi_Berita }}</td>
            @if ($1->foto_berita)
                        <img src="{{  url('foto') . '/' . $1->foto_berita }} "
                        style="max-width: 150px; height: auto;" />
            @endif
                {{-- <td>{{ $a->stok_obat }}</td>
                <td>{{ $a->tgl_exp }}</td> --}}
            </tr>
            @endforeach
        </tbody>
              </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>