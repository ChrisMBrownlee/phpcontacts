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
  $source  = array();
  $final   = array();
  //excute and store result into $stmt
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  //echo "<html>"
  //echo "<body>"

  while($row = mysqli_fetch_assoc($result)) {
   
    //echo "<input type="button">" . $row[contactsFirst] . " " . $row[contactsLast] . "</input>"
    
    array_push($source, $row['contactsId']);
    array_push($source, $row['contactsFirst']);
    array_push($source, $row['contactsLast']);
    array_push($source, $row['contactsAddress']);
    array_push($source, $row['contactsNumber']);
    array_push($source, $row['contactsPhoto']);
    array_push($final, $source);
    $source = array();
  }

  //echo "</body>"
  //echo "</html>"

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
