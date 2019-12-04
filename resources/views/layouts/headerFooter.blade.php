

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <title><?= $title ?></title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src=”prefixfree.min.js” type="text/javascript"></script>
{{-- <link rel="stylesheet" href="/css/login.css"> --}}
<link rel="stylesheet" href="/css/styles.css">

<link rel="stylesheet" href="/css/master.css">

@yield('css')
</head>
<body>
  <!-- cabecera -->
<header>
  @include('partials.menu',, ['sites' => $sites])
</header>
        <!-- fin cabecera -->
<main class="containerExt" role="main">
@yield('main')
</main>
  <!-- FOOTER -->
  <footer class="containerExt"style="width: 98%;" >
    <nav class=" center navbar navbar-expand-lg navbar-dark bg-dark">
    <ul id="footerMenuLi" class="center navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active" style="">
    <a class="nav-link" href="contact">Contacto</a>
    </li>
    <li class="nav-item active" style="">
    <a class="nav-link" href="faqs">FAqs</a>
    </li>
    <li class="nav-item active"style="">
    <a class="nav-link" href="miPerfil" >Mi Perfil</a>
    </li>
    <li class="nav-item active"style="">
    <img src="/img\f_logo_RGB-White_72.png"style="width: 50px">      </li>
    <li class="nav-item active"style="">
    <img src="/img\instagram-xxl.png" style="width: 50px">
    </li>
    </ul>
    </div>
    </nav>
</footer>

  </body>
</html>
