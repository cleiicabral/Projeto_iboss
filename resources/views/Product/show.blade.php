<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos show</title>
</head>
<body>
    
    <h1>Mostrando produtos e suas categorias: </h1>
    <hr>
    <hr>
    
    @if (session('message'))
    
    <div>
        <hr>
        {{session('message')}}
        <hr>
    </div>
    
@endif

<ul>
    
    <li><strong>Produto:</strong> {{$product->id}}  </li>
    <br>
    <li>Categorias:</li>
    @foreach ($categories as $category)
       <li> {{$category->name}}  </li>
    @endforeach
    

</ul>



</body>
</html>