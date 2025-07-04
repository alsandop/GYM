<h1>Tambah Member Gym</h1>

{{-- Tampilkan error validasi --}}
@if ($errors->any())
    <div style="color: red; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('members.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama" value="{{ old('nama') }}"><br>
    Email: <input type="email" name="email" value="{{ old('email') }}"><br>
    Telepon: <input type="text" name="telepon" value="{{ old('telepon') }}"><br>
    Tanggal Daftar: <input type="date" name="tanggal_daftar" value="{{ old('tanggal_daftar') }}"><br>
    Paket: <input type="text" name="paket" value="{{ old('paket') }}"><br>
    <button type="submit">Simpan</button>
</form>
