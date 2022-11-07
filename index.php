<?php
require __DIR__ . "/init.php";

Head::printHead("Home - Admin Panel", "index.css");
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();

if (!$id) {
    header("Location: login.php");
}
?>
<body>
<h1>Backend für 12fjkp.de</h1>
<div>
    <a href="event.php">Event Anmeldung</a>
    <a href="/admin">Admin</a>
    <a href="record.php">Personalakten</a>
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>