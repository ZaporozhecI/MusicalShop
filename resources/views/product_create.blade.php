
@extends('layout')
@section('content')
<div class="container mt-4">
    <br>
    <h2 class="mt-4 text-center">Добавление товара</h2>
    <form method="post" action="{{ url('product') }}">
        @csrf
        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="nameHelp" value="{{old('name')}}" />
            <small id="nameHelp" class="form-text text-muted">Введите название товара (макс. 100 символов)</small>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Цена:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" 
            id="price" name="price" aria-describedby="priceHelp" value="{{old('price')}}" />
            <small id="priceHelp" class="form-text text-muted">Введите цену</small>
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Категория товара:</label>
            <select class="form-control" id="category" name="id_category" aria-describedby="categoryHelp">
                <option value="">Выберите категорию</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" 
                        @if(old('id_category') == $category->id) selected 
                        @endif>{{$category->name}}</option>
                @endforeach
            </select>
            <small id="categoryHelp" class="form-text text-muted">Выберите категорию товара</small>
            @error('id_category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
        </form>
</div>
@endsection
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
