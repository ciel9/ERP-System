<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pinjam Mobil</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="form">
        <div class="title">
            <h2 class="title-text">Edit Data Pinjam Mobil</h2>
        </div>
        <form action="{{ route('update.pinjam_mobil', $pinjam_mobil->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_user">Nama User</label>
                <input type="text" id="nama_user" name="nama_user" value="{{ $pinjam_mobil->nama_user }}" required>
            </div>
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" id="nama_mobil" name="nama_mobil" value="{{ $pinjam_mobil->nama_mobil }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $pinjam_mobil->tanggal_pinjam }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" id="tanggal_kembali" name="tanggal_kembali" value="{{ $pinjam_mobil->tanggal_kembali }}" required>
            </div>
            <button type="submit" class="btn-submit">Update</button>
        </form>
    </div>
</body>
</html>
