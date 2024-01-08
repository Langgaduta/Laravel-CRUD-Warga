
@extends('layouts.master')

@section('content')
    <div class="container">
        <h3 class="mt-5">Create Warga</h3>
        <form action="/warga/store" method="POST" class="mt-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" placeholder="nik">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No KK</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_kk" placeholder="no_kk">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label><br>
                <select name="jenis_kelamin" id="" class="form-select">
                    <option value="">Pilih</option>
                    <option value="L">Laki laki</option>
                    <option value="P">Perempuan</option>
                </select><br><br>
            </div>
            <label for="exampleInputEmail1" class="form-label">Alamat</label><br>
            <textarea class="form-control" name="alamat" id="" rows="10"></textarea><br><br>
            <input type="submit" name="submit" value="simpan" class="btn btn-primary">
        </form>
    </div>
@endsection

