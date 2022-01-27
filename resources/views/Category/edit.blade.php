<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar categoria</title>
</head>
<body>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach

    </ul>
@endif

    <form action="{{ route('category.update',$category->id) }}" method="post">
        @csrf
        @method('put');
        <input type="text" name="name" id="name" placeholder="Insira o nome da categoria" value="{{$category->name}}">
        <button type="submit">Finalizar edição</button>

    </form>
</body>
</html>