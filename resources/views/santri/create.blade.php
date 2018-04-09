<h1> Input Data Santri</h1>

<!-- <form action="santri" method="post"> -->
<!-- <form action="{{ url('santri') }}" method="post"> -->
<form action="{{ route('santri.store') }}" method="post">
    <!-- crsf token -->

    {{-- {{ csrf_field() }} --}}

    @csrf
    <input type="text" name="nama" placeholder="Input Name"><br>
    <input type="text" name="umur" placeholder="Input Umur"><br>
    <textarea name="alamat" rows="5" cols="30" placeholder="Input Address"></textarea><br>
    <input type="text" name="jenis_kelamin" placeholder="Input Gender"><br>
    <button type="submit" name="button">Simpan</button>
</form>
