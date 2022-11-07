<?php
require __DIR__ . "/init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
$user = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();

if($user->getRank() === 4)
{

}elseif($user->getRank() === 3)
{

}else
{
    header("Location: index.php");
}

Head::printHead("Dev Tools - Admin Panel", "developer.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
if(!$id)
{
    header("Location: login.php");
}

?>
<body>
<?php

Navbar::printNavbar();

?>
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;">Developer Tools</h1>
    </div>

    <a href="phpinfo.php">PHP INFO</a>
    <h3>Error Codes</h3>
    <table class="table">
        <thead>
        <tr>
            <th>Code</th>
            <th>Fehler</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Die Decodierung in der Klasse "Tools" oder die Integer Daten der Datenbank ist beschädigt</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Die Website kann nicht auf die Member-Tabelle zugreifen</td>
        </tr>
        </tbody>
    </table>
    <img src="/pictures/dev_tools_logo.png" alt="logo devtools" style="width: 100%; height: 30rem; margin-top: 5rem">
</div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
</body>

</html>
