
@extends('layout')
@section('content')
<div class="container mt-4">
    <br>
    <h2 class="mt-4 text-center">Список категорий товаров:</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category_product as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection