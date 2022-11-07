<?php
require __DIR__ . "/init.php";

Head::printHead("Home - Admin Panel", "index.css");
$id = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();

if (!$id) {
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
            <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;">Mitglieder Verwaltung</h1>
        </div>
    </div>
    <?php
    AdminPanelServices::getInstance()->getButtons()->spawnAdminButton();
    ?>


    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th data-bs-toggle="tooltip" data-bss-tooltip=""
                    title="Die Rechtestufe(1-10) definiert wie viel ein Admin User sehen darf.">Rechtestufe
                </th>
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

    <h1 class="text-center" style="padding-top: 40px;padding-bottom: 64px;">Letzte Änderungen</h1>

    <div class="accordion" role="tablist" id="accordion-3">
        <div class="accordion-item">
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordion-3 .item-3" aria-expanded="false" aria-controls="accordion-3 .item-3">
                    #3 Sonderposten hinzufügen Option hinzugefügt + Aufhübschung des "Developer-Tools" Bereiches
                </button>
            </h2>
            <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-3">
                <div class="accordion-body">
                    <p class="mb-0">Nun ist es möglich Mitgliedern nachträglich eine Sonderfunktion hinzuzufügen.
                        Dafür geht ihr auf die "Mitglieder" Seite, danach auf "Benutzer bearbeiten" und dort dann
                        auf "Sonderposition". Nun könnt ihr Name und Sonderposten auswählen!
                        Zusätzlich wurde die "Developer-Tools" Seite ein wenig aufgehübscht.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion" role="tablist" id="accordion-2">
        <div class="accordion-item">
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordion-2 .item-2" aria-expanded="false" aria-controls="accordion-2 .item-2">
                    #2 Admin Verwaltung hinzugefügt
                </button>
            </h2>
            <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-2">
                <div class="accordion-body">
                    <p class="mb-0">Nun ist es möglich Admins zu bearbeiten und zu löschen! Dies geht über die Mitglieder
                        verwaltung die auf der Home seite ist. Wenn du die Mitgliederverwaltung nicht sehen kannst liegt
                        das wahrscheinlich daran, dass du nicht genug Rechte hast!</p>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion" role="tablist" id="accordion-1">
        <div class="accordion-item">
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1">
                    #1 Mitgliederseite hinzugefügt
                </button>
            </h2>
            <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                    <p class="mb-0">Hiermit wurde die Mitglieder Seite hinzugefügt, in dieser kannst du Mitglieder,
                        welche später im Forum gezeigt werden hinzufügen oder verändern.</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    $generated_password = AdminPanelServices::getInstance()->getTools()->randomCode(20);
    ?>


</div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
</body>

</html>
