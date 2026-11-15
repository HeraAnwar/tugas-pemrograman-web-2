@extends('layouts.app')

@section('content')
<h1>Daftar Produk</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Deskripsi</th>
    </tr>
    @foreach ($produks as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>Rp {{ number_format($p->harga) }}</td>
        <td>{{ $p->stok }}</td>
        <td>{{ $p->deskripsi }}</td>
    </tr>
    @endforeach
</table>
@endsection