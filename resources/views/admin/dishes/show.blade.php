@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h1>{{$dish->name}}
                    <span class="mb-3">
                        <a class="btn btn-warning ml-3" href="{{route('admin.dishes.edit', $dish->id)}}">EDIT</a>
                    </span>
                </h1>
                <h2>Ingredients:</h2>
                <p>{{$dish->ingredients}}</p>
                <h2>Description:</h2>
                <p>{{$dish->description}}</p>
                <h2>Price:</h2>
                <p>€{{number_format($dish->price, 2)}}</p>
                <a class="btn btn-primary" href="{{route('admin.dishes.index')}}">Back to Menu</a>
            </div>
            @if ($dish->image)
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset('storage/' . $dish->image)}}" alt="{{$dish->name}}">
                </div>
            @endif
        </div>
    </div>
    
@endsection