<?php
session_start();
session_destroy();
header('Location:../student/home.php');
?>