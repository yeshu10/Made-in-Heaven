<?php
session_start();
unset($_SESSION["uid"]);
header("Location:WED1.php?task=kill");
?>