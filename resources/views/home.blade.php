<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="antialiased">
      <div @class([
        'alert',
        'alert-success' => $imcIsGood,
        'alert-danger' => !$imcIsGood,
        ]) role="alert">
        Olá {{ $genero }}  {{ $nome }}, seu IMC é {{ $imc }}. Você tem {{ $imcText }}
      </div>
    </body>
        
</html>
