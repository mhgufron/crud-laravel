<h1>Datadiri {{ $santri->nama }}</h1>

Umur: {{ $santri->umur }} <br>
Alamat: {{ $santri->alamat }} <br>
Jenis Kelamin: {{ $santri->jenis_kelamin }} <br>

<hr>

<a href="{{ route('santri.index') }}">Kembali</a>
