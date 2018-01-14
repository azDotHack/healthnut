<?php
define("USER", "root");
define("PASS", "");
define("DB", "healthy_habits");
define("HOST", "localhost");
define("CONN_ERROR", "<h2>Error connecting to databse :(</h2>");
define("QUERY_ERROR", "<h2>Error Executing Query :(</h2>");

$dbc = mysqli_connect(HOST, USER, PASS, DB) or die(CONN_ERROR);
