<h1> Input Data Santri</h1>

<!-- <form action="santri" method="post"> -->
<!-- <form action="{{ url('santri') }}" method="post"> -->
<form action="{{ route('santri.store') }}" method="post">
    <!-- crsf token -->

    {{-- {{ csrf_field() }} --}}

    @csrf
    <input type="text" name="nama" placeholder="Input Name"><br>
    @if ($errors->has('nama'))
        <strong>{{ $errors->first('nama') }}</strong><br>
    @endif
    <input type="text" name="umur" placeholder="Input Umur"><br>
    @if ($errors->has('umur'))
        <strong>{{ $errors->first('umur') }}</strong><br>
    @endif
    <textarea name="alamat" rows="5" cols="30" placeholder="Input Address"></textarea><br>
    @if ($errors->has('alamat'))
        <strong>{{ $errors->first('alamat') }}</strong><br>
    @endif
    <input type="text" name="jenis_kelamin" placeholder="Input Gender"><br>
    @if ($errors->has('jenis_kelamin'))
        <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
    @endif
    <button type="submit" name="button">Simpan</button>
    <a href="{{ route('santri.index') }}">Batal</a>
</form>
