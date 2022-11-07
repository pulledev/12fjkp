<?php
require __DIR__ . "/init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
Head::printHead("Events - Admin Panel","index.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
if(!$id)
{
    header("Location: login.php");

}
?>