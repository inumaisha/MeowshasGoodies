@extends('layouts.app')
{{-- @section('title')
Services
@endsection --}}

@section('content')
<h1> Products </h1>
      @foreach ($products as $product)
      <div class="well">
            <h1><a href ="{{route('product.show', ['language' => $language, 'id' => $product->id]) }}">{{$product->product_name}}</a></h1>
            <h3>£ {{$product->product_price}}</h3>
            <p>{{$product->product_description}}</p>
            <hr>
            <h4>{{$product->created_at}}</h4> 
      </div>
      @endforeach
      {{$products->links()}} 
      @endsection

