<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP System</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body class ="dash">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="delete-btn">Logout</button>
    </form>
    <h2>Table Clients</h2>
    <table>
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Alamat</th>
                <th>Tingkat Kekayaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <td>{{ $u->nama_user }}</td>
                    <td>{{ $u->alamat }}</td>
                    <td>{{ $u->tingkat_kekayaan }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Table Orders</h2>
     <form action="{{ route('print.pdf') }}" method="GET">
        <button type="submit" class="add-btn">Print PDF</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nama Client</th>
                <th>Nama Mobil</th>
                <th>Tanggal Order</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pinjam_mobil as $pm)
                <tr>
                    <td>{{ $pm->nama_user}}</td>
                    <td>{{ $pm->nama_mobil }}</td>
                    <td>{{ $pm->tanggal_pinjam }}</td>
                    <td>{{ $pm->tanggal_kembali }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
