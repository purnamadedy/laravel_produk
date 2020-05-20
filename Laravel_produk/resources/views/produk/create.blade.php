@extends('produk.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Produk</h1>


                <form method="post" action="/produk">
                    @csrf

                    <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Masukan Nama Produk" name="nama_produk">
                        @error('nama_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="katagori_produk">Katagori Produk</label>
                        <select class="form-control" id="katagori_produk" name="katagori_produk">
                          <option>Elektronik</option>
                          <option>Fashion</option>
                          <option>Food</option>
                          <option>Olahrga</option>
                          <option>Kesehatan</option>
                        </select>
                        @error('katagori_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukan Harga Produk" name="harga">
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok_produk">Stok Produk</label>
                        <input type="text" class="form-control @error('stok_produk') is-invalid @enderror" id="stok_produk" placeholder="Masukan Stok Produk" name="stok_produk">
                        @error('stok_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Input Data Produk</button>
                </form>
            </div>
        </div>
    </div>
@endsection

