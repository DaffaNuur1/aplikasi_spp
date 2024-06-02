<?php
session_start();
if ($_SESSION['level']=="admin") {
  session_destroy();
  header("location:aunt-login-petugas.php");
} elseif ($_SESSION['level']=="petugas") {
    session_destroy();
    header("location:aunt-login-petugas.php");
} else {
    session_destroy();
    header("location:aunt-login-petugas.php");
}
?>