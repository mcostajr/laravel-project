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
        <h1>Lista de Bandas</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Estilo</th>
              <th scope="col">Ano de Criação</th>
              <th scope="col">Total de discos</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($bandas as $banda)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{$banda['nome'] }}</td>
              <td>{{$banda['estilo'] }}</td>
              <td>{{$banda['ano_criacao'] }}</td>
              <td>{{$banda['total_discos'] }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </body>
</html>