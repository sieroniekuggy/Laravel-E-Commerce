@extends('layouts.app')

@section('content')

    <h2>Your Cart</h2>

    <table class="table">
        <thead>
        <tr class="bg-primary text-white">
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>
                    {{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                </td>
                <td>
                    <form action="{{ route('cart.update', $item->id) }}">
                        <input name="quantity" type="number" value="{{ $item->quantity }}">
                        <input type="submit" value="save" class="btn btn-primary">
                    </form>
                </td>
                <td>
                    <a href="{{ route('cart.destroy', $item->id) }}"><i class="fas fa-trash text-danger fa-2x"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3>
        Total Price : ${{ \Cart::session(auth()->id())->getTotal() }}
    </h3>

    <a class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>

@endsection
