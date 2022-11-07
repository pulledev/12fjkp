<?php
require __DIR__ . "/init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
session_start();
session_destroy();
header('Location:index.php');