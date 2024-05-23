<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERP System - PDF Report</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <style>
        /* CSS styling for PDF */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body class="dash">
    <h2>Table Orders</h2>
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
                    <td>{{ $pm->nama_user }}</td>
                    <td>{{ $pm->nama_mobil }}</td>
                    <td>{{ $pm->tanggal_pinjam }}</td>
                    <td>{{ $pm->tanggal_kembali }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
