@extends('produk.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">List Data Produk</h1>

                <a href="{{ url('/produk/create') }}" class="btn btn-primary my-3">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Katagori Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($produk as $tampil)
                        <tr>
                            <td>{{$tampil->id}}</td>
                            <td>{{$tampil->nama_produk}}</td>
                            <td>{{$tampil->katagori_produk}}</td>
                            <td>{{$tampil->harga}}</td>
                            <td>{{$tampil->stok_produk}}</td>
                            <td>
                                <form action="{{ route ('produk.edit', $tampil->id) }}" method="post" class="d-inline">
                                    @method('GET')
                                    @csrf
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </form>
                                <form action="{{ route ('produk.destroy', $tampil->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
