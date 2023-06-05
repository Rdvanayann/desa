@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"> {{ __('Ürün Düzenle') }}</div>
                        <div class="col-6 d-flex justify-content-end"><a href="{{route('products.index')}}" class="btn btn-primary">Ürünler</a></div>
                    </div>

                </div>
                    <h1>Ürünü Düzenle</h1>
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Ürünün Adı</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Ürünün Adı">
                        </div>
                        <div class="form-group">
                            <label for="">Ürünün Fiyatı</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Ürünün Fiyatı">
                        </div>
                        <button type="submit" class="btn btn-success mt-1">Güncelle</button>
                    </form>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
