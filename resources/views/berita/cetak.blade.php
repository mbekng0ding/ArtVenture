<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cetak Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Berita</th>
                        <th>Isi Berita</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $n)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $n->nama_berita }}</td>
                            <td>{{ $n->isi_berita }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cetak Data</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Berita</th>
                <th>Isi Berita</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $n)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $n->nama_berita }}</td>
                <td>{{ $n->isi_berita }}</td>
            </tr>
            @endforeach
        </tbody>
              </table>
>>>>>>> 84c228f3233b17e8fc6c7d1cff91780b05c2427c
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
