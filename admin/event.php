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


<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Inhalt</th>
            <th>Datum</th>
            <th>Ersteller</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $admins = AdminPanelServices::getInstance()->getMariadb()->listAdminUser();
        if (empty($admins)) {
            echo "<h4 class='text-center'>Fehlercode 2</h4>";
        } else {
            $cnt = 0;
            foreach ($admins as $admin) {
                $rank = AdminPanelServices::getInstance()->getTools()->decodeAdminRank($admin->getRank())
                ?>
                <tr>
                    <td><?php echo $admin->getId() ?></td>
                    <td><?php echo $admin->getUsername() ?></td>
                    <td> <?php echo $rank ?></td>
                </tr>
                <?php
            }
        }

        ?>

        </tbody>
    </table>
</div>


</body>
