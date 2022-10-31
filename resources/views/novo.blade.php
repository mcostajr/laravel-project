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
        <h1>Produtos Novos</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Preço</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($produtos as $produto)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{$produto['nome'] }}</td>
              <td>{{$produto['categoria'] }}</td>
              <td>{{$produto['preco'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </body>
</html>