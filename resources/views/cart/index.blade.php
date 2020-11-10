@extends('layouts.app')

@section('content')
    <h2>Cart</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>
                <!-- {{$item->price}} -->
                Rs. {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                </td>
                <td>
                <form action="{{ route('cart.update', $item->id) }}">
                    <input type="number" name="quantity" value="{{$item->quantity}}">
                    <input type="submit" value="Update" class="btn btn-primary">
                     <!-- <a href="{{ route('cart.update', $item->id) }}" ></a> -->
                </form>
                
                </td>
                <td>
                
               
                <a href="{{ route('cart.delete', $item->id) }}" class="btn btn-danger">Remove Item</a>
                
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
    <h2>Total Price: Rs. {{ Cart::session(auth()->id())->getTotal()}}</h2>
    <a href="{{ route('cart.checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
@endsection