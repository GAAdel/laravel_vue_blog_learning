<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

</head>

<body class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="bi bi-apple"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Главная страница</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Каталог статей</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="hero" style="background-image: url(/img/audi_a7.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="hero__content text-center">
            <div class="hero__content-tag">
              <a href="#">My Blog - Cikada</a>
            </div>
            <h2><a href="#">CiKaDa web developing</a></h2>

            <div class="hero__content-tag">
              <a href="#">vk.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>