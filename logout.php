<?php

include "check/config.php";

session_start();

session_unset();
session_destroy();
setcookie("PHPSESSID", "", time() - 3600);
header("Location:index.php");

 ?>
