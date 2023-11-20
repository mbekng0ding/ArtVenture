@extends('layout.layout')
@section('title', 'Edit Data Properti')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h1">
                        Edit Data Properti
                    </span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('properti.update') }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @foreach ($properti as $item)
                            <input type="hidden" class="form-control" name="id_properti" value="{{ $item->id_properti }}" />
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Nama Properti</label>
                                        <input type="text" class="form-control" name="nama_properti" value="{{ $item->nama_properti }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi Properti</label>
                                        <br />
                                        <input type="radio" id="baik" {{ $item->kondisi_properti == 'Baik' ? 'checked' : '' }} name="kondisi_properti" value="Baik" />
                                        <label for="baik">Baik</label>
                                        <input type="radio" id="buruk" {{ $item->kondisi_properti == 'Buruk' ? 'checked' : '' }}  name="kondisi_properti" value="Buruk" />
                                        <label for="buruk">Buruk</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Properti</label>
                                        <input type="file" class="form-control" name="foto_properti" />
                                    </div>

                                    <div class="d-flex mt-3">
                                        <button type="submit" class="btn btn-primary" style="margin-right: 4px;">SIMPAN</button>
                                        <a href="#" onclick="window.history.back();" class="btn btn-success">KEMBALI</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
