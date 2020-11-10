@extends('layouts.app')

@section('content')

<h1>Checkout</h1>
<form action="{{ route('orders.store')}}" method="post">
    @csrf

    <div class="form-group">
      <label for="">Full Name</label>
      <input type="text" name="shipping_fullname" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">State</label>
      <input type="text" name="shipping_state" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" name="shipping_city" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Zip Code</label>
      <input type="text" name="shipping_zipcode" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" name="shipping_address" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Phone Number</label>
      <input type="text" name="shipping_phone" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Description</label>
      <input type="textbox" name="notes" id="" class="form-control" placeholder="Your Name" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary">Place Order</button>
</form>

@endsection