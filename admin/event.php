<?php
require __DIR__ . "/init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
Head::printHead("Events - Admin Panel","index.css");

$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin();
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
        $admins = null;
        if (empty($admins)) {
            echo "<h4 class='text-center'>Zurzeit gibt es keine Events</h4>";
        } else {
            $cnt = 0;
            foreach ($admins as $admin) {
                $rank = null;
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
<div id="summernote"></div>
<script>
    $('#summernote').summernote({
        placeholder: 'Tippe hier den Inhalt des Events ein',
        tabsize: 2,
        height: 100
    });
</script>

</body>

