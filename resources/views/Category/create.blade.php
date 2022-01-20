<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Insira um produto</h1>

    <form action={{route('category.store')}} method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Insira o nome da categoria" value="{{old('name')}}">
        <button type="submit">Cadastrar</button>

    </form>





</body>
</html>