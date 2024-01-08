<h1>Edit Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put');
    @csrf
    <input type="text" name="nama" placeholder="nama" value="{{$warga->nama}}"><br><br>
    <input type="text" name="nik" placeholder="nik" value="{{$warga->nik}}"><br><br>
    <input type="text" name="no_kk" placeholder="no_kk" value="{{$warga->no_kk}}"><br><br>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br><br>
    <input type="text" name="alamat" placeholder="alamat" value="{{$warga->alamat}}"><br><br>
    <input type="submit" name="submit" value="update">
</form>