
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

     <title>Registrate</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src=”js/prefixfree.min.js” type="text/javascript"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


     <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/master.css">
      <link rel="stylesheet" href="css/login.css">
     </head>

    <meta charset="utf-8">
    <title><Registrese</title>
  </head>
  <body>
    <div class="containerExt maxViewport padd2 ">
<div class=" styleLogin padd2">
  <div class="containerLogo">


    <a class="" id="logo" href="Index.php">
    <img src="img\logo.png" alt="go to home" class="center logo" style="width:20%;"  >
    </a>

  </div>

<form class="login" action="register.php" method="post" enctype="multipart/form-data">
  <!-- files -->

  <div class="containerDentro" >
    <img src="img\avatar\default.png" alt="Me" class="center logo" style="height:150px; " >

      <input type="file" accept="img\avatar\default.png" name="avatar" placeholder="avatar"  class="file-input" id="avatar">
      <p> <?= (isset($errores['avatar']) ? $errores['avatar'] : '') ?></p>
  </div>

<div class="">


      <input type="text" class="form-control" id="user" placeholder="user"   name="user" value="<?= $user ?>"  >
      <p> <?= (isset($errores['user']) ? $errores['user'] : '') ?></p>

      <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" name="email"  value="<?= $email ?>" required>
      <p> <?= (isset($errores['email']) ? $errores['email'] : '' ) ?></p>

      <input type="text" class="form-control" id="name" placeholder="Enter name"   name="name" value="<?= $name ?>" required >
      <p></p>

      <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"   name="lastName" value="<?= $lastName ?>" required>
      <p></p>

      <input class="form-control" id="password" placeholder="password" name="password" value="" required>
      <p> <?= (isset($errores['password']) ? $errores['password'] : '') ?></p>

      <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" name="confirmPassword" value="" required>
      <p> <?= (isset($errores['confirmPassword']) ? $errores['confirmPassword'] : '') ?></p>


</div>
      <div class="form-group form-check">
            <input type="checkbox" name="mantener" class="form-check-input" id="mantener">
            <label class="form-check-label" for="mantener">Dejarme Conectado</label>
      </div>
      <div class="">

        <button class="center btn-primary btn"  type="submit" ;>Send</button>
      </div>

</form>
  </div>
  </div>
  </body>
</html>
