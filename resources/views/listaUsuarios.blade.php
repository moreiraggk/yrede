<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>LISTA DE USUARIOS</title>
</head>
<body>

    <H1 class="w-full text-center">LISTA COMPLETA</H1>
    <div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>USUARIO</th>
        <th>NOME</th>
        <th>E-MAIL</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($usuarios as $usuario )

      <!-- row 1 -->
      <tr>
        <th>{{$usuario->usuario}}</th>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
      </tr>
        @endforeach

    </tbody>

  </table>
</div>



</body>
</html>