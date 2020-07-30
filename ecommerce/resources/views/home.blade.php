@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h4>Products</h4>
    <div class="row">

        @foreach($allProducts as $product)
            <div class="col-3">
                <div class="card m-3 p-2">
                    <img src="{{ asset('default-product.png') }}" alt="Card image cap" class="card-img-top-">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3>${{ $product->price }}</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
