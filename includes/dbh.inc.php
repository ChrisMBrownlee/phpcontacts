<?php
$server_name = "astamps78515.ipagemysql.com";
$dBUsername = "zeltavian";
$dBPassword = "chris";
$dBName = "zcbrownlee";

$conn = mysqli_connect($server_name, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
