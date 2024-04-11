
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>605-01</title>
    </head>
    <body> 
        <h2>Список категорий:</h2>
        <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
            </tr>
        </thead>
        @foreach ($category_product as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>
