<?php
require 'dbh.inc.php';
// SQL Query
$sql = 'SELECT * FROM Contacts';
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql))
{
  header("Location: ../signup.php?error=sqlerror");
  exit();
}
else
{
  $source  = array();
  $final   = array();
  //excute and store result into $stmt
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);


  while($row = mysqli_fetch_assoc($result)) {
    array_push($source, $row['contactId']);
    array_push($source, $row['contactFirst']);
    array_push($source, $row['contactLast']);
    array_push($source, $row['contactAddress']);
    array_push($source, $row['contactNotes']);
    array_push($final, $source);
    $source = array();
  }

  // Print source string
  $json = json_encode($final);
  echo $json;
  $file = fopen('json/contacts.json', "w");
  fwrite($file, $json);
  fclose($file);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);
 ?>
