@extends('layouts.admin')

@section('title', 'Productos')
@section('content')
    <!-- cards -->
    <div class="show-post">
        @foreach ($products as $product)
        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="{{$product->photo}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->description}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
    </div>
@endsection

