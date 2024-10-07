<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/lux/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>{{ $title ?? 'Brasil API' }}</title>
  @livewireStyles
</head>
<body>
  <nav class="navbar navbar-expand-md bg-body-tertiary mb-5">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="/">Brasil API</a>
      <a href="https://github.com/BrasilAPI/BrasilAPI" target="_blank">
        <i class="fa-brands fa-github fa-2xl" style="color: #000000; font-size: 35px"></i>
      </a>
      <ul class="navbar-nav mx-auto ms-5 gap-3">
        <li class="nav-item">
          <a class="nav-link" href="/buscar-cep">CEP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/buscar-cnpj">CNPJ</a>
        </li>
      </ul>
    </div>
  </nav>

  {{ $slot }}
  @livewireScripts
</body>
</html>