@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h4>Products</h4>
    <div class="row">

        @foreach($allProducts as $product)
            <div class="col-3">
                <div class="card m-3 p-2">
                    <img src="#" alt="Card image cap" src="{{ asset('default-product.png') }}" class="card-img-top-">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
