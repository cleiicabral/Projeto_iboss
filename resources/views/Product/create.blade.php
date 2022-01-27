<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criando produtos</title>
</head>
<body>
    <h1>Insira um produto</h1>

    <form action={{route('products.store')}} method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Insira o nome do produto" value="{{old('name')}}">
        <input type="text" name="price" id="price" placeholder="Insira o preço do produto" value="{{old('price')}}">
        <textarea name="description" id="description" cols="30" rows="4" placeholder="Descriçao do produto">{{old('description')}}</textarea>
        <input type="text" name="quantity" id="quantity" placeholder="Insira a quantidade do produto" value="{{old('quantity')}}">
        <button type="submit">Cadastrar produto</button>

    </form>
</body>
</html>