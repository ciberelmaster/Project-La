<?
  include('jumbotron.php');
  include('footer.php');
?>
<html>
  <head>
    <title>La.com</title>
    <link type="text/css" rel="stylesheet" href="page.css">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
  </head>
</html>
<?
  jumbotron();
<?
<html>
  <body>
    <div class="container">
      <form action="entro.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">La.com</h2>
         <label for="inputEmail" class="sr-only">Correo electronico</label>
         <input type="email" id="inputEmail" name="user" class="form-control" placeholder="Email address" required autofocus>
         <label for="inputPassword" class="sr-only">Contraseña</label>
         <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
         <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">Recordarme
            </label>
         </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entra</button>
      </form>
    </div>
    
     <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?
  footer();
?>
