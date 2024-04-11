
@extends('layout')
@section('content')
<div class="container mt-4">
    <br>
    <h2 class="mt-4 text-center">Редактирование товара</h2>
    <form method="post" action="{{ url('product/update/'.$product->id) }}" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" class="form-control" name="name" value="@if (old('name')) {{old('name')}} @else {{$product->name}} @endif" />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Цена:</label>
            <input type="text" class="form-control" name="price" value="@if (old('price')) {{old('price')}} @else {{$product->price}} @endif" />
            @error('price')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_category">Категория товара:</label>
            <select class="form-control" name="id_category">
                @foreach ($categories as $categorya)
                <option value="{{ $categorya->id }}" @if(old('id_category') == $categorya->id || $product->id_category == $categorya->id) selected @endif>{{ $categorya->name }}</option>
                @endforeach
            </select>
            @error('id_category')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
</div>
@endsection

