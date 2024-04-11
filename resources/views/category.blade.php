@extends('layout')
@section('content')
<div class="container mt-4">
    <br>
    <h2 class="mt-4 text-center">{{ $category ? "Список товаров" : 'Неверный ID ' }}</h2>
    @if($category)
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $categorya)
                <tr>
                    <td>{{ $categorya->id }}</td>
                    <td>{{ $categorya->name }}</td>
                    <td>{{ $categorya->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
