@extends('produk.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Category</h1>


                <form method="post" action="/katagori">
                    @csrf

                    <div class="form-group">
                      <label for="katagori">Category</label>
                      <input type="text" class="form-control @error('katagori') is-invalid @enderror" id="katagori" placeholder="Masukan Nama Category" name="katagori">
                        @error('katagori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Input Data Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection

