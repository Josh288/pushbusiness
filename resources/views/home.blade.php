@extends('layouts.admin')

@section('title', 'Productos')
@section('content')
    <!-- cards -->
    <div class="show-post">
        @foreach ($products as $product)
<<<<<<< HEAD
            <div class="card" style="width: 18rem; margin: 1%;">
                <img src="{{ $product->url() }}" class="card-img-top" height="200" width="100" alt="{{ $product->url() }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="chat" class="btn btn-primary">Enviar mensaje</a>
                </div>
=======
        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="{{$product->url()}}" class="card-img-top" height="200" width="100" alt="{{$product->url()}}">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->description}}</p>
              <h6 class="card-title">{{$product->avilable}}</h6>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
>>>>>>> 2c5ddd424b5810f4b7843cf4a6601ca3b3c8fed2
        @endforeach
    </div>
@endsection
