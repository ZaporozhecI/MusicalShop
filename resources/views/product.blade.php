
@extends('layout')
@section('content')
<br>
    <h2 class="mt-5 text-center">Список товаров</h2>
    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td>id</td>
                    <td>Название</td>
                    <td>Цена</td>
                    <td>Категория</td>
                    <td>Действия</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->category->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Действия">
                            <a href="{{url('product/destroy/'.$products->id)}}" class="btn btn-danger">Удалить</a>
                            <a href="{{url('product/edit/'.$products->id)}}" class="btn btn-primary">Редактировать</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $product->links() }}
@endsection