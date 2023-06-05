@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ürün Ekle') }}</div>
                    <h1>Ürün Ekle</h1>
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Ürünün Adı</label>
                            <input type="text" name="name" class="form-control" placeholder="Ürünün Adı">
                        </div>
                        <div class="form-group">
                            <label for="">Ürünün Fiyatı</label>
                            <input type="text" name="price" class="form-control" placeholder="Ürünün Fiyatı">
                        </div>
                        <button type="submit" class="btn btn-success mt-1">Ekle</button>
                    </form>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
