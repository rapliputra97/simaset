<!DOCTYPE html>
<html>
<head>
    <title>Cetak Barang Ruangan</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 8px; }
    </style>
</head>

<body onload="window.print()">

<h2>Daftar Barang - Ruangan: {{ $ruangan->nama }}</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode</th>
            <th>Kondisi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($ruangan->barangs as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->kondisi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
        