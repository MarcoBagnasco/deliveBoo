@extends('layouts.app')

@section('content')

   <div class="container">
    <h1>CREATE A NEW DISH</h1>
    <form method="POST" action="{{route('admin.dishes.store')}}">
        @csrf
        @method('POST')


        <div class="mb-3">
            <label for="name" class="control-table">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" required maxlength="50">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ingredients" class="control-table">Ingredients</label>
            <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" rows="10" required>{{old('ingredients.name')}}</textarea>
            @error('ingredients')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="control-table">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="10" required>{{old('description.name')}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="control-table">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{old('price')}}" required >
            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="visibility" class="control-table">Visible</label>
            <input type="checkbox" name="visibility" id="visibility"  checked>
        </div>
        <div class="mb-3">
            image
        </div>
        <button type="submit" class="btn btn-success">Save</button>

        
    </form>
   </div>

@endsection