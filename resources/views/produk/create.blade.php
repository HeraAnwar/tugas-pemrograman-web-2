@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 16px;">
    <h2>Tambah Produk Baru</h2>
    <form action="/produk" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Nama Produk</label><br>
            <input type="text" name="nama" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Harga</label><br>
            <input type="number" name="harga" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Stok</label><br>
            <input type="number" name="stok" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Deskripsi</label><br>
            <textarea name="deskripsi" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;"></textarea>
        </div>
        <button type="submit" style="background: #111; color: white; padding: 12px 20px; border: none; border-radius: 8px; width: 100%; cursor: pointer;">Simpan Produk</button>
    </form>
</div>
@endsection