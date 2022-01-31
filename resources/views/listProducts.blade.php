<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar produtos</title>
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('menu/menu')

    <div name="listProduct" class="container " style="padding-top: 10px;" >
        <p class="fw-bolder fs-1 text">Produtos </p>

        <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Descrição</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($products as $key=>$product)
                  <tr>
                    
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->description}}</td>
                    <td></td>
                  </tr>


                  @endforeach
                
              </tbody>
          </table>
    </div>
</body>
</html>


{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> --}}
