
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>605-01</title>
        <style> .is-invalid { color: red; } </style>
    </head>
    <body> 
        <h2>Добавление товара</h2>
        <form method="post" action="{{ url('product') }}">
            @csrf
            
                <label for="name">Название</label>
                <input type="text" name="name" value="{{old('name')}}" />
                @error('name')
                <div class="is-invalid">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <label>Цена</label>
                <input type="text" name="price" value="{{old('price')}}" />
                @error('price')
                <div class="is-invalid">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <label>Категория:</label>
                <select name="id_category" value="{{old('id_category')}}">
                    <option style="">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" 
                            @if(old('id_category') == $category->id) selected 
                            @endif>{{$category->name}}
                        </option>
                    @endforeach
                </select>
                @error('id_category')
                <div class="is-invalid">
                    {{ $message }}
                </div>
                @enderror
            <br>
                <input type="submit">
  
            </form>
    </body>
</html>
