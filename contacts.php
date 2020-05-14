<?php
//require "header.php";
require "dbh.inc.php";
?>
<HTML>
  <body>
    <?php
      $sql = 'SELECT * FROM contacts';
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql))
      {
        //header("Location: contacts.php?error=sqlerror");
        exit();
      }
      else
      {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)) {
          //echo '<input type = "button">' . $row[contactsFirst] . " " . $row[contactsLast] . '</input>';
          echo '<p>' . $row[contactsFirst] . '</p>';
        }
      }
    ?>
  </body>
</html>
<?php>
//mysqli_stmt_close($stmt);
//mysqli_close($conn);
?>