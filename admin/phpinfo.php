<?php
require __DIR__ . "/init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
Head::printHead("PHP INFO - Admin Panel", "developer.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
if(!$id)
{
    header("Location: login.php");
}
?>


<?php
phpinfo(INFO_GENERAL);
?>
<a href="phpinfo.php">Zurück zu den DEV TOOLS</a>
