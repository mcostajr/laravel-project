<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="antialiased">
      <div class="container">
        <h1>Cadastrar uma Banda</h1>
        @if(Session::has('message'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
          </div>
        @endif
        <form action="" method="POST" >
          @csrf
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
          </div>
          <div class="mb-3">
            <label for="estilo" class="form-label">Estilo</label>
            <input type="text" class="form-control" id="estilo" name="estilo" placeholder="Digite o estilo">
          </div>
          <div class="mb-3">
            <label for="ano_criacao" class="form-label">Ano Criação</label>
            <input type="text" class="form-control" id="ano_criacao" name="ano_criacao" placeholder="Ex: 2014">
          </div>
          <div class="mb-3">
            <label for="total_discos" class="form-label">Total de Discos</label>
            <input type="text" class="form-control" id="total_discos" name="total_discos" placeholder="Total de Discos">
          </div>
          <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
      </div>
    </body>
</html>