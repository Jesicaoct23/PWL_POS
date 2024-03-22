<!DOCTYPE html>
<html>
<head>
    <title>Data user</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Aksi</td> <!-- Saya tambahkan kolom untuk aksi -->
        </tr>
        @foreach($data as $d) <!-- Mulai loop foreach untuk setiap d -->
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
            <td>
                <a href="/user/ubah/{{ $d->user_id }}">Ubah</a> | <!-- Perbaiki penamaan variabel -->
                <a href="/user/hapus/{{ $d->user_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach <!-- Akhiri loop foreach -->
    </table>
</body>
</html>
