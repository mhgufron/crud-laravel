<h1> Edit Data Santri {{ $santri->nama }}</h1>

<!-- <form action="santri" method="post"> -->
<!-- <form action="{{ url('santri') }}" method="post"> -->
<form action="{{ route('santri.update', $santri->id) }}" method="post">
    <!-- crsf token -->

    {{-- {{ csrf_field() }} --}}

    @csrf
    <input type="text" name="nama" placeholder="Edit Name" value="{{ $santri->nama }}"><br>
    @if ($errors->has('nama'))
        <strong>{{ $errors->first('nama') }}</strong><br>
    @endif
    <input type="text" name="umur" placeholder="Edit Umur" value="{{ $santri->umur }}"><br>
    @if ($errors->has('umur'))
        <strong>{{ $errors->first('umur') }}</strong><br>
    @endif
    <textarea name="alamat" rows="5" cols="30" placeholder="Edit Address" value="">{{ $santri->alamat }}</textarea><br>
    @if ($errors->has('alamat'))
        <strong>{{ $errors->first('alamat') }}</strong><br>
    @endif
    <input type="text" name="jenis_kelamin" placeholder="Edit Gender" value="{{ $santri->jenis_kelamin }}"><br>
    @if ($errors->has('jenis_kelamin'))
        <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
    @endif
    <button type="submit" name="button">Simpan</button>
    <a href="{{ route('santri.index') }}">Batal</a>
</form>
