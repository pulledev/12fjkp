<?php
//class autoloader & <head>
require __DIR__ . "/init.php";

Head::printHead("Registrieren -12fjkp", "style/register.css");
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
?>

<form action="#" method="post">
    <input type="text" placeholder="username" name="usr">
    <input type="text" placeholder="password" name="passwd">
    <input type="submit" name="submit">
</form>

<?php

    if (isset($_POST["submit"])){
        $rawPassword = $_POST["passwd"];
        $username = $_POST["usr"];
        $password = AdminPanelServices::getInstance()->getTools()->hashString($rawPassword);

        $checkUserByName = AdminPanelServices::getInstance()->getMariadb()->findUserByName($username,$password);

        if ($checkUserByName) {
            $_SESSION["userID"] = $checkUserByName->getId();
            //error_log $_Session["userID"];
            header('Location: index.php');
        } else {
            echo '<h3>Der Benutzername oder/und das Passwort ist/sind falsch</h3>';
        }
    }
?>
