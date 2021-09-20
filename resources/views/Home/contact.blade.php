@extends('layouts/master')


@section('content')
<div class="container">
    <div class="row col-6 mx-auto">
    <h1 class="text-center">Contact Us</h1>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    </div>
</div>


@endsection