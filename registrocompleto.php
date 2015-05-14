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
  
  $qry = 
  
  footer();
?>
