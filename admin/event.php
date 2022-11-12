<?php
require __DIR__ . "/init.php";
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin();
if (!$id) {
    header("Location: /admin/login.php");
}

Head::printHead("Eventerstller - Admin Panel","index.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin();
if(!$id)
{
    header("Location: login.php");
}
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin()->getId();
?>
<body>
<?php
Navbar::printNavbar();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;">Events</h1>
        </div>
    </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
    <div class="d-grid gap-2"><button class="btn btn-primary" type="button" data-bs-target="#modal_create_event" data-bs-toggle="modal" style="padding-left: 80px;padding-right: 80px;padding-top: 6px;margin: 0;filter: blur(0px);">Event erstellen</button></div>
</div>

<?php


/*
AdminPanelServices::getInstance()->getModal()->spawnAddEvent();

$admins = AdminPanelServices::getInstance()->getMariadb()->listEvents();
if (empty($admins)) {
    echo "<h4 class='text-center'>Fehlercode 2</h4>";
} else {
    $cnt = 0;
    foreach ($admins as $admin) {
        $author = AdminPanelServices::getInstance()->getMariadb()->findAdmin($admin->getAuthor());
        ?>
        <div style="background-color: grey; margin-top: 30px;">
            <hr>
            <hr>
            <h4><?php echo $admin->getTitle()." am ".$admin->getDate()." erstellt von " .$author->getUsername(); ?></h4>
            <hr>
            <?php echo $admin->getText() ?>
            <hr>
            <?php  ?>
        </div>
        <?php
    }
}



*/
?>

</body>

