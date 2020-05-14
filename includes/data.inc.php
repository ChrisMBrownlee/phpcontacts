<?php
require 'dbh.inc.php';
// SQL Query
$sql = 'SELECT * FROM contacts';
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql))
{
  header("Location: ../signup.php?error=sqlerror");
  exit();
}
else
{
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
 ?>
