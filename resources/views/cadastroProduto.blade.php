<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de produtos</title>

    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('menu/menu')

    <div name="formProduct" class="container " style="padding-top: 10px;" >
        <p class="fw-bolder fs-1 text">Informe os dados do produto: </p>
        <form class="row g-3" action={{route('products.store')}} method="post" >
          @csrf
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Informe o nome do produto" placeholder="Insira o nome da categoria" value="{{old('name')}}">
              </div>
            <div class="col-md-6 " >
                <label for="inputAddress2" class="form-label">Preço</label>
                <div class="input-group mb-3"> 
                <span class="input-group-text">R$</span>
                <input name="price" type="text" class="form-control" id="inputAddress2" placeholder="Informe o preço do produto" onchange="this.value = this.value.replace(/,/g, '.')" placeholder="Insira o nome da categoria" value="{{old('price')}}" >
                </div>
              </div>
            <div class="col-md-4">
              <label for="inputAddress" class="form-label">Quantidade</label>
              <input name="quantity" type="number" class="form-control" id="inputAddress" placeholder="Informe a quantidade" placeholder="Insira o nome da categoria" value="{{old('quantity')}}">
            </div>
            <div class="form-floating">
                <textarea name="description" class="form-control" placeholder="Insira a descrição do produto" id="floatingTextarea" placeholder="Insira o nome da categoria" value="{{old('description')}}"></textarea>
                <label for="floatingTextarea">Descrição</label>
              </div>
              
    <!--modal das categorias-->          
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" formaction="{{route('category.show')}}">Adicionar categorias</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div name="formCategories" class="container " style="padding-top: 10px;">
          
          
          <div class="row">
            @foreach ($categoriesAll as $categories)
            <div class="col-sm-">
                    <div class="form-check form-switch">
                        <input name="checkbox[]" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="{{$categories->id}}" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">{{$categories->name}}</label>
                      </div>
            </div>
            @endforeach 
            </div>  
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save</button>
      </div>
      <!--Fim modal-->
    </div>
  </div>
</div>
            <div class="col-12">
                <br>
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
    </div>
</body>
</html>