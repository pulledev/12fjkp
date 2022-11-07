<?php
require __DIR__ . "/init.php";

Head::printHead("Anmelden - Admin Panel","index.css");
?>

<body>

<div class="d-flex" style="height: 100vh;background: url(&quot;assets/img/arma%20pic%209jgk.jpg&quot;) center / cover repeat;">
    <div class="container-fluid" style="width: 65vw;">
        <picture class="d-flex d-sm-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-xxl-center"><img src="assets/img/9.jgk.png"></picture>
        <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;color: rgb(255,255,255);">Admin Panel Login</h1>
        <form method="post" action="#">
            <input class="form-control" type="text" style="margin-bottom: 3vh;" placeholder="Username" name="username">
            <input class="form-control" type="password" placeholder="Password" name="password" style="margin-bottom: 3vh;">
            <button class="btn btn-primary" type="submit" style="width: 100%;" name="send">Login</button>
        </form>
        <?php
        if (isset($_POST["send"])) {
            $pdo = AdminPanelServices::getInstance()->getMariadb()->pdo();
            $rawPassword = $_POST["password"];
            $username = $_POST["username"];
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
    </div>
</div>
<?php




?>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>


</body>


