@extends('master')

@section('judul')
Produk
@endsection

@section('isi')
<div class="container">
    @foreach($arrProducts as $product)
        @if ($product['Status']=="SSR")
        <a href="productdesc/{{$product['id']}}">
            <div class="ssr">
                <h4>Name: {{$product['Product']}}</h4>
                <h4>Status : {{$product['Status']}}</h4>
                <h4>Price: {{$product['Price']}}</h4>
            </div>
        </a>
        @elseif ($product['Status']=="SR")
        <a href="productdesc/{{$product['id']}}">
            <div class="sr">
                <h4>Name: {{$product['Product']}}</h4>
                <h4>Status : {{$product['Status']}}</h4>
                <h4>Price: {{$product['Price']}}</h4>
            </div>
        </a>
        @else
        <a href="productdesc/{{$product['id']}}">
            <div class="r">
                <h4>Name: {{$product['Product']}}</h4>
                <h4>Status : {{$product['Status']}}</h4>
                <h4>Price: {{$product['Price']}}</h4>
            </div>
        </a>
        @endif
    @endforeach
</div>
@endsection
