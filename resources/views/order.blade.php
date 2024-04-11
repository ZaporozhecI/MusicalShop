<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>605-01</title>
    </head>
     <body> 
        <h2>{{ $order ? "Список товаров заказа:" . $order->id : 'Неверный ID' }}</h2>
        @if($order)
            <table border="2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                    </tr>
                </thead>
                @php
                 $total = 0;   
                @endphp
                <tbody>
                    @foreach ($order->products as $orders)
                    <tr>
                        <td>{{ $orders->id }}</td>
                        <td>{{ $orders->name }}</td>
                        <td>{{ $orders->pivot->price }}</td>
                        <td>{{ $orders->pivot->quantity}}</td>
                    </tr>
                    @php
                    $total += $orders->pivot->price;  
                   @endphp
                    @endforeach
                </tbody>
            </table>
            <h2>{{"Итого: ".$total}}</h2>
        @endif
    </body> 
    
</html>