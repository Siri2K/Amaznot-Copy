@extends('layouts.layout')

@section('content')
<p>This is the orders page</p>

@foreach($orders as $order)
    {{ $order }}
@endforeach

@if ($clearCart)
    <script>localStorage.removeItem('cart')</script>
@endif

@endsection