<?php
  $host = "localhost";
  $userName = 'root';
  $password = '';

  $dbName = 'ndubb';

  $con = mysqli_connect($host, $userName, $password);

  $selectdb = mysqli_select_db($con, $dbName);
?>

<?php
  $hostl = "localhost";
  $userNamel = 'root';
  $passwordl = '';

  $dbNamel = 'ndubb';

  $conl = mysqli_connect($hostl, $userNamel, $passwordl);

  $selectdb = mysqli_select_db($conl, $dbNamel);
?>

<?php
  $hostbsc = "localhost";
  $userNamebsc = 'root';
  $passwordbsc = '';

  $dbNamebsc = 'ndubb';

  $conbsc = mysqli_connect($hostbsc, $userNamebsc, $passwordbsc);

  $selectdb = mysqli_select_db($conbsc, $dbNamebsc);
?>