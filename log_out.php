<!-- logged_out.php -->

<?php
session_start();
session_destroy();

header('Location: login.php');
?>