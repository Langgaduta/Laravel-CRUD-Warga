@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                    <a href="/warga/create" class="btn btn-primary mt-5">tambah warga</a>
                    <table class="table hover mt-5">
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>NO.KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($warga as $w)
                        <tr>
                            <td>{{ $w->id }}</td>
                            <td>{{ $w->nama }}</td>
                            <td>{{ $w->nik }}</td>
                            <td>{{ $w->no_kk }}</td>
                            <td>{{ $w->jenis_kelamin }}</td>
                            <td>{{ $w->alamat }}</td>
                            <td>
                                <a href="/warga/{{$w->id}}/edit" class="btn btn-warning mb-2">Edit</a>
                
                                <form action="/warga/{{$w->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


