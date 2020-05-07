<?php
session_start();
//take all session variables and wipes them
session_unset();
//destroy
session_destroy();
header("Location: ../index.php");
