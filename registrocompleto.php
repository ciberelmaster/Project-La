<?
  include('jumbotron.php');
  include('footer.php');
  
  jumbotron();
  
  $hostname = "localhost";
  $database = "projectla";
  $username = "root";
  $password = "123456";
  
  $x = mysql_connect( $hostname, $username, $password) or trigger_error(mysql_error(), E_USER_ERROR);
  
  mysql_select_db($database, $x);
  
  $qry = "insert into snone value()";
  $mostrar_qry = mysql_query($qry, $x) or die("Error en el ingreso.");
  echo "Regsitrado con exito";
  
  footer();
?>
