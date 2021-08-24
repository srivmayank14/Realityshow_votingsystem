<?php
session_start();
unset($_SESSION['contact']);
header("Location:index.php");
?>
