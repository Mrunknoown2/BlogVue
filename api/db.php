<?php

// $hostname = "127.0.0.1";
// $db_name = "db_a71391";
// $db_user = "root";
// $db_passwd = "";

$hostname = "10.10.23.184";
$db_name = "db_a71391";
$db_user = "a71391";
$db_passwd = "2e6b70";

// mostra uma mensagem de erro vinda do mysql
function showerror($db)
{
  die("Error " . mysqli_errno($db) . " : " . mysqli_error($db));
}


// faz uma conexão a uma base de dados
function dbconnect($hostname, $db_name,$db_user,$db_passwd)
{
  $db = @ mysqli_connect($hostname, $db_user, $db_passwd, $db_name);
  if(!$db) {
   die("Connection failed: " . mysqli_connect_error());
  }

 return $db;
}
?>