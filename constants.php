<?php
define("USER", "root");
define("PASS", "");
define("DB", "healthy_habits");
define("HOST", "localhost");
define("CONN_ERROR", "<h2>Error connecting to databse :(</h2>");

$dbc = mysqli_connect(HOST, USER, PASS, DB) or die(CONN_ERROR);

function query($sql) {
  $dbc = mysqli_connect(HOST, USER, PASS, DB) or die(CONN_ERROR);
  $result = mysqli_query($dbc, $sql) or die($sql);
  return $result;
  mysqli_close($dbc);
}
