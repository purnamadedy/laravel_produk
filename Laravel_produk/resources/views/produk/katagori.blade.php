@extends('produk.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">List Category</h1>
                <br>
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
                    <th scope="col">Nama Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($katagori as $tampil)
                        <tr>
                            <td>{{$tampil->id}}</td>
                            <td>{{$tampil->katagori}}</td>
                            <td>
                                <form action="{{ route ('katagori.destroy', $tampil->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Delete</button>
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
