<?php
session_start();
session_destroy();

$msg = "Log out Efetuado";
header("location:index.php?msg=".$msg);

?>