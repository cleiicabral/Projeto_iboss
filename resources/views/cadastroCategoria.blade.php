<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de categorias</title>

    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
  @include('menu/menu')
    <div name="formProduct" class="container " style="padding-top: 10px;" >
        <p class="fw-bolder fs-1 text">Informe os dados da categoria</p>
        <form class="row g-3" action="{{route('category.store')}}" method="post">
          @csrf
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Informe o noma da categoria">
              </div>
            <div class="col-12">
                <br>
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
    </div>

</body>
</html>