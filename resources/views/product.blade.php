<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>605-01</title>
    </head>
     <body> 
        <h2>Список товаров</h2>
    
            <table border="2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

     {{--   <h2>{{ $category ? "Список товаров категории ".$category->name : 'Неверный id категории' }}</h2>
        @if($category)
            <table border="1">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Название</td>
                        <td>Цена</td>
                    </tr>
                </thead>
                @foreach ($category->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </table>
        @endif--}}
    </body> 
    
</html>