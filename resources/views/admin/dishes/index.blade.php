@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                 Deleted Successfully
            </div>
        @endif
        <h1 class="mb-5">{{$restaurant->name}} Menu</h1>
        <a class="btn btn-success text-uppercase pr-3 pl-3" href="{{route('admin.dishes.create')}}">Create</a>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Visibility</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <td>{{$dish->name}}</td>
                        <td>€{{number_format($dish->price, 2)}}</td>
                        <td><button class="btn btn-secondary" disabled> {{$dish->visibility ? 'Yes' : 'No'}} </button></td>
                        <td>
                            <a class="btn btn-primary " href="{{route('admin.dishes.show', $dish->id)}}">Show Details</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.dishes.edit', $dish->id)}}">Edit Details</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{route('admin.dishes.destroy', $dish->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="DELETE DISH">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>            
    </div>
@endsection