@extends('layouts.app')
{{-- @section('title')
Services
@endsection --}}

@section('content')
<h1> Current Product </h1>
   
      <div class="well">
            <h1>{{$product->product_name}}</h1>
            <h3>£ {{$product->product_price}}</h3>
            {<p>{{$product->product_description}}</p>
            <hr>
            <h4>{{$product->created_at}}</h4> 
      </div>
    
      
      @endsection

