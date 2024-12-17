<?php
    require_once("connection.php");
    unset($_SESSION['login']);

    header("Location: index.php?logout=done");

?>