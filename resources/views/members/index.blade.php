<h1>Daftar Member Gym</h1>
<a href="{{ route('members.create') }}">Tambah Member</a>
<ul>
@foreach ($members as $member)
    <li>
        {{ $member->nama }} - {{ $member->paket }}
        <a href="{{ route('members.edit', $member->id) }}">Edit</a>
        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
