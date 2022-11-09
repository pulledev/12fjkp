<?php
require __DIR__ . "/init.php";
Head::printHead("Home - Admin Panel", "index.css");
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin();
if (!$id) {
    header("Location: /admin/login.php");
}
?>
<body>

<h1>Events</h1>


    <?php
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
    ?>