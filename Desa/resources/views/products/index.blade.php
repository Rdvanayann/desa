@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"> {{ __('Ürünler') }}</div>
                        <div class="col-6 d-flex justify-content-end"><a href="{{route('products.create')}}" class="btn btn-success">Ürün Ekle</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ürünün İsmi</th>
                            <th scope="col">Ürünün Fiyatı</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                              <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}₺</td>
                                <td>
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-info">Düzenle</a>
                                    <a href="{{route('products.delete', $product->id)}}" class="btn btn-danger">Sil</a>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
