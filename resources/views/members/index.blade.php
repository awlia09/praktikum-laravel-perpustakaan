<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota Perpustakaan</h1>
    <a href="/dashboard">← Kembali ke Dashboard</a>
    <hr>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Peran</th>
            <th>Status</th>
        </tr>
        @foreach($members as $member)
        <tr>
            <td>{{ $member['name'] }}</td>
            <td>{{ $member['role'] }}</td>
            <td>{{ $member['status'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>