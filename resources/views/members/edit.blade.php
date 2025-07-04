<h1>Edit Member Gym</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $member->nama }}"><br>
    Email: <input type="email" name="email" value="{{ $member->email }}"><br>
    Telepon: <input type="text" name="telepon" value="{{ $member->telepon }}"><br>
    Tanggal Daftar: <input type="date" name="tanggal_daftar" value="{{ $member->tanggal_daftar }}"><br>
    Paket: <input type="text" name="paket" value="{{ $member->paket }}"><br>
    <button type="submit">Update</button>
</form>
