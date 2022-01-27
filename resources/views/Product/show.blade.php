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
    @foreach ($product as $products )
   
        
        
        <li><strong>Nome:</strong> {{$products->name}}  </li>
        
    @endforeach
    @foreach ($categories as $category)
    <form action="{{route('category.destroy',$category->id)}}" method="post">
        @csrf
        @method('DELETE')
        <li><strong>Nome:</strong> {{$category->name}}  <strong>ID:</strong> {{$category->id}}</li>
        [<a href="{{route('category.edit',$category->id)}}">Editar</a>]
        <button type="submit">Deletar</button>
        <hr>
    </form>
    @endforeach
    

</ul>



</body>
</html>