<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Categorias</title>
    <link rel="shortcut icon" href="http://www.w3.org/2000/svg" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div name="menu_index">
        <nav class="navbar  navbar-dark navbar-expand-lg" style="background-color: #4b484d;">
            <div class="container-fluid">
              <a class="p-2 fs-2 navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                  </svg>
                Produtos
            </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('cadastroProduto')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
    <div name="formCategories" class="container " style="padding-top: 10px;">
      <form action="{{route('saveSession.categories')}}" method="post">
        @csrf
        <div class="row">
          <div class="col-sm-">
                  <div class="form-check form-switch">
                      <input name="checkbox[]" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="Categoria1" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                    </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input name="checkbox[]" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="Categoria2" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input name="checkbox[]" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="Categoria3" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-sm-">
              <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Categoria</label>
                </div>
          </div>
          <div class="col-">
            <a class="btn btn-primary btn-sm" href="#" role="button">Voltar</a>
            <button type="submit" class="btn btn-success">Adicionar</button>
          </div>
        </div>
      
      
      </form>
        
       
    </div>
   
</body>
</html>