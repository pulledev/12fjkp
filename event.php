<?php
require __DIR__ . "/init.php";
Head::printHead("Event - Admin Panel", "index.css");
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInAdmin();
if (!$id) {
    header("Location: /admin/login.php");
}

?>
<body>

<h1>Events</h1>
<a href="index.php">back</a>

<?php
$admins = AdminPanelServices::getInstance()->getMariadb()->listEvents();
if (empty($admins)) {
    echo "<h4 class='text-center'>Fehlercode 2</h4>";
} else {
$cnt = 0;
$yes_id = 0;
$no_id = 0;
$maybe_id = 0;
foreach ($admins as $admin) {
$author = AdminPanelServices::getInstance()->getMariadb()->findAdmin($admin->getAuthor());
$user = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
?>
<div style="background-color: grey; margin-top: 30px;">
    <hr>
    <hr>
    <h4><?php echo $admin->getTitle() . " am " . $admin->getDate() . " erstellt von " . $author->getUsername(); ?></h4>
    <hr>
    <?php echo $admin->getText() ?>
    <hr>
    <?php
    $yes_id++;
    $no_id++;
    $maybe_id++;
    ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal_join_event" data-bs-target="#modal_join_event">button</button>

    <?php
    $state =1;
    $event_id = 1;
    $user = 1;
    AdminPanelServices::getInstance()->getModal()->spawnJoinEvent($state, $event_id);
    $state = 3;
    if (isset($_POST[$yes_id])) {
        $state = 0;
        $event_id = $user->getId();
        $user = $admin->getId();
        AdminPanelServices::getInstance()->getModal()->spawnJoinEvent($state, $event_id, $user);
    }elseif (isset($_POST[$maybe_id])){
        $state = 1;
        $event_id = $_POST["event_id"];
        $user = $_POST["user"];
        AdminPanelServices::getInstance()->getModal()->spawnJoinEvent($state, $event_id, $user);
    }elseif (isset($_POST[$no_id])){
        $state = 2;
        $event_id = $_POST["event_id"];
        $user = $_POST["user"];
        AdminPanelServices::getInstance()->getModal()->spawnJoinEvent($state, $event_id, $user);
    }

    ?>
</div>
<?php
}
}
