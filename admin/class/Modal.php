<?php

class Modal
{
    public function spawnAddUser(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Benutzer hinzufügen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div style="margin-bottom: 16px;">
                                <input class="form-control" type="text" placeholder="Name" name="addUserName">
                                <small class="form-text">Trage hier den Name des Spielers ein</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="addUserRank">
                                    <option value="" selected="">Rang</option>
                                    <option disabled selected value>Rang Auswählen!</option>
                                    <optgroup label="Mannschaften">
                                        <option value="0">Jäger</option>
                                        <option value="1">Gefreiter</option>
                                        <option value="2">Obergefreiter</option>
                                        <option value="3">Hauptgefreiter</option>
                                        <option value="4">Stabsgefreiter</option>
                                        <option value="5">Oberstabsgefreiter</option>
                                        <option value="6">Korporal</option>
                                        <option value="7">Stabskorporal</option>
                                    </optgroup>
                                    <optgroup label="Unteroffiziere ohne Portpee">
                                        <option value="8">Unteroffizier</option>
                                        <option value="9">Stabsunteroffizier</option>
                                        <option value="10">Fahnenjunker</option>
                                    </optgroup>
                                    <optgroup label="Unteroffiziere mit Portpee">
                                        <option value="11">Feldwebel</option>
                                        <option value="12">Oberfeldwebel</option>
                                        <option value="13">Hauptfeldwebel</option>
                                        <option value="14">Stabsfeldwebel</option>
                                        <option value="15">Obertsabsfeldwebel</option>
                                        <option value="16">Fähnrich</option>
                                        <option value="17">Oberfähnrich</option>
                                    </optgroup>
                                    <optgroup label="Leutnante">
                                        <option value="18">Leutnant</option>
                                        <option value="19">Oberleutnant</option>
                                    </optgroup>
                                    <optgroup label="Hauptleute">
                                        <option value="20">Hauptmann</option>
                                        <option value="21">Stabshauptmann</option>
                                    </optgroup>
                                    <optgroup label="Stabsoffiziere">
                                        <option value="22">Major</option>
                                        <option value="23">Oberstleutnant</option>
                                        <option value="24">Oberst</option>
                                    </optgroup>
                                    <optgroup label="Generäle">
                                        <option value="25">Brigade General</option>
                                        <option value="26">General Major</option>
                                        <option value="27">General Leutnant</option>
                                        <option value="28">General</option>
                                    </optgroup>
                                    <optgroup label="---Aufklärer---">
                                        <optgroup label="Mannschaften">
                                            <option value="29">Jäger (Aufklärer)</option>
                                            <option value="30">Gefreiter (Aufklärer)</option>
                                            <option value="31">Obergefreiter (Aufklärer)</option>
                                            <option value="32">Hauptgefreiter (Aufklärer</option>
                                            <option value="33">Stabsgefreiter (Aufklärer)</option>
                                            <option value="34">Oberstabsgefreiter (Aufklärer)</option>
                                            <option value="35">Korporal (Aufklärer)</option>
                                            <option value="36">Stabskorporal (Aufklärer)</option>
                                        </optgroup>
                                        <optgroup label="Unteroffiziere ohne Portpee">
                                            <option value="37">Unteroffizier (Aufklärer)</option>
                                            <option value="38">Stabsunteroffizier (Aufklärer)</option>
                                        </optgroup>
                                    </optgroup>

                                </select>
                                <small class="form-text">Trage hier den Rang des Spielers ein</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <input class="form-control" type="text" name="addUserUrl" placeholder="Link zum Profil">
                                <small class="form-text">Trage hier den Link zum Profil ein</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <input class="form-control" type="text" name="addUserSteamId" placeholder="SteamId">
                                <small class="form-text">Trage hier die steamId64(DEC) ein</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="addUserPost">
                                    <option disabled selected value>Position Auswählen!</option>
                                    <optgroup label="Soldaten">
                                        <option value="0">Soldat</option>
                                    </optgroup>
                                    <optgroup label="GrpFhr">
                                        <option value="1">Gruppenführer</option>
                                        <option value="2">Stlv. Gruppenführer</option>
                                    </optgroup>
                                    <optgroup label="Gehobene Posten">
                                        <option value="3">Kompaniechef</option>
                                        <option value="4">Kompanieführer</option>
                                        <option value="5">Stellvertretender Zugführer</option>
                                        <option value="6">Zugführer</option>
                                    </optgroup>
                                    <optgroup label="Sonstiges">
                                        <option value="-1">Beobachter</option>
                                    </optgroup>

                                </select>
                                <small class="form-text">Wähle hier die Position des Spielers aus</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="addUserPosition">
                                    <option disabled selected value>Dienstposten Auswählen!</option>
                                    <optgroup label="Gruppen">
                                        <option value="0">Alpha</option>
                                        <option value="1">Bravo</option>
                                        <option value="2">Charlie</option>
                                        <option value="3">Sierra</option>
                                    </optgroup>
                                    <optgroup label="Sonderfunktionen">
                                        <option value="4">Kommandantur</option>
                                        <option value="5">Reservist</option>
                                        <option value="6">Zugführer des I. Zuges</option>
                                    </optgroup>

                                </select>
                                <small class="form-text">Wähle hier den Dienstposten des Spielers aus</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="addUserSpecialPosition">
                                    <option selected value="0">kein Sonderposten</option>
                                    <optgroup label="S1">
                                        <option value="1">Kompaniefeldwebel</option>
                                        <option value="2">Verwaltungs Soldat</option>
                                    </optgroup>
                                    <optgroup label="S2">
                                        <option value="3">Leiter S2</option>
                                        <option value="4">Medien Soldat</option>
                                    </optgroup>
                                    <optgroup label="S3">
                                        <option value="5">Leiter S3</option>
                                        <option value="6">S3 Hilfe</option>
                                    </optgroup>
                                </select>
                                <small class="form-text">Wähle hier den Dienstposten des Spielers aus</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" name="addUserSubmit" type="submit">Hinzufügen</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["addUserSubmit"])) {
            $name = $_POST["addUserName"];
            $rank = $_POST["addUserRank"];
            $postition = $_POST["addUserPosition"];
            $url = $_POST["addUserUrl"];
            $post = $_POST["addUserPost"];
            $special_post = $_POST["addUserSpecialPosition"];
            $steamId = $_POST["addUserSteamId"];

            AdminPanelServices::getInstance()->getMariadb()->generateMember($name, $post, $postition, $rank, $special_post, $url, $steamId);
            ?>
            <div class="alert alert-success" role="alert">Der User wurde hinzugefügt!</div> <?php
        }


    } //modal-1

    public function spawnChangeRank(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Rang ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changeRankId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();
                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Trage hier den Namen des Spielers ein</small></div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changeRankSelect">
                                    <option disabled selected value>Rang Auswählen!</option>
                                    <optgroup label="Mannschaften">
                                        <option value="0">Jäger</option>
                                        <option value="1">Gefreiter</option>
                                        <option value="2">Obergefreiter</option>
                                        <option value="3">Hauptgefreiter</option>
                                        <option value="4">Stabsgefreiter</option>
                                        <option value="5">Oberstabsgefreiter</option>
                                        <option value="6">Korporal</option>
                                        <option value="7">Stabskorporal</option>
                                    </optgroup>
                                    <optgroup label="Unteroffiziere ohne Portpee">
                                        <option value="8">Unteroffizier</option>
                                        <option value="9">Stabsunteroffizier</option>
                                        <option value="10">Fahnenjunker</option>
                                    </optgroup>
                                    <optgroup label="Unteroffiziere mit Portpee">
                                        <option value="11">Feldwebel</option>
                                        <option value="12">Oberfeldwebel</option>
                                        <option value="13">Hauptfeldwebel</option>
                                        <option value="14">Stabsfeldwebel</option>
                                        <option value="15">Obertsabsfeldwebel</option>
                                        <option value="16">Fähnrich</option>
                                        <option value="17">Oberfähnrich</option>
                                    </optgroup>
                                    <optgroup label="Leutnante">
                                        <option value="18">Leutnant</option>
                                        <option value="19">Oberleutnant</option>
                                    </optgroup>
                                    <optgroup label="Hauptleute">
                                        <option value="20">Hauptmann</option>
                                        <option value="21">Stabshauptmann</option>
                                    </optgroup>
                                    <optgroup label="Stabsoffiziere">
                                        <option value="22">Major</option>
                                        <option value="23">Oberstleutnant</option>
                                        <option value="24">Oberst</option>
                                    </optgroup>
                                    <optgroup label="Generäle">
                                        <option value="25">Brigade General</option>
                                        <option value="26">General Major</option>
                                        <option value="27">General Leutnant</option>
                                        <option value="28">General</option>
                                    </optgroup>
                                    <optgroup label="---Aufklärer---">
                                        <optgroup label="Mannschaften">
                                            <option value="29">Jäger (Aufklärer)</option>
                                            <option value="30">Gefreiter (Aufklärer)</option>
                                            <option value="31">Obergefreiter (Aufklärer)</option>
                                            <option value="32">Hauptgefreiter (Aufklärer</option>
                                            <option value="33">Stabsgefreiter (Aufklärer)</option>
                                            <option value="34">Oberstabsgefreiter (Aufklärer)</option>
                                            <option value="35">Korporal (Aufklärer)</option>
                                            <option value="36">Stabskorporal (Aufklärer)</option>
                                        </optgroup>
                                        <optgroup label="Unteroffiziere ohne Portpee">
                                            <option value="37">Unteroffizier (Aufklärer)</option>
                                            <option value="38">Stabsunteroffizier (Aufklärer)</option>
                                        </optgroup>
                                    </optgroup>
                                </select>
                                <small class="form-text">Wähle hier den neuen Rang des Spielers aus</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" name="Submit" type="submit">Hinzufügen</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["Submit"])) {
            $rank = $_POST["changeRankSelect"];
            $id = $_POST["changeRankId"];
            AdminPanelServices::getInstance()->getMariadb()->changeRank($id, $rank);
            ?>
            <div class="alert alert-success" role="alert">Der Rang des Users wurde erfolgreich geändert!</div>
            <?php
        }
    } //modal-2

    public function spawnChangeProfile(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Link zum Profil ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;"><select class="form-select" name="changeUrlId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Wähle hier den Namen des Spielers</small>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <input class="form-control" type="text" placeholder="Link zum Profil"
                                       name="changeUrlUrl">
                                <small class="form-text">Trage hier den neuen Link zum Profil ein</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changeUrlSubmit">Hinzufügen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changeUrlSubmit"])) {
            $id = $_POST["changeUrlId"];
            $url = $_POST["changeUrlUrl"];
            AdminPanelServices::getInstance()->getMariadb()->changeUrl($id, $url);
            ?>
            <div class="alert alert-success" role="alert">Die URL des Users wurde erfolgreich geändert!</div>
            <?php
        }

    } //modal-3

    public function spawnChangeDienstPosition(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-4">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sonderposition ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;"><select class="form-select" name="changePositionId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select><small class="form-text">Wähle hier den Spieler aus</small></div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changePositionPosition">
                                    <option disabled selected value>Dienstposten auswählen!</option>
                                    <optgroup label="Gruppen">
                                        <option value="0">Alpha</option>
                                        <option value="1">Bravo</option>
                                        <option value="2">Charlie</option>
                                        <option value="3">Sierra</option>
                                    </optgroup>
                                    <optgroup label="Sonderfunktionen">
                                        <option value="4">Kommandantur</option>
                                        <option value="5">Reservist</option>
                                        <option value="6">Zugführer des I. Zuges</option>
                                    </optgroup>
                                </select>
                                <small class="form-text">Wähle hier die neue Position des Spielers aus</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changePositionSubmit">Hinzufügen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changePositionSubmit"])) {
            $id = $_POST["changePositionId"];
            $position = $_POST["changePositionPosition"];
            AdminPanelServices::getInstance()->getMariadb()->changePosition($id, $position);
            ?>
            <div class="alert alert-success" role="alert">Die Position des Users wurde erfolgreich geändert!</div>
            <?php
        }
    } //modal-4

    public function spawnChangeName(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-5">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Name ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;"><select class="form-select" name="changeNameId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Wähle hier den Namen des Spielers aus</small>
                            </div>
                            <div style="margin-bottom: 16px;"><input class="form-control" type="text" placeholder="Name"
                                                                     name="changeNameName">
                                <small class="form-text">Trage
                                    hier den neuen Namen des Spielers ein</small></div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changeNameSubmit">Hinzufügen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changeNameSubmit"])) {
            $id = $_POST["changeNameId"];
            $username = $_POST["changeNameName"];
            AdminPanelServices::getInstance()->getMariadb()->changeUsername($id, $username);
            ?>
            <div class="alert alert-success" role="alert">Die Position des Users wurde erfolgreich geändert!</div>
            <?php
        }
    } //modal-5

    public function spawnChangePosition(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-6">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Position ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;"><select class="form-select" name="changePostId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select><small class="form-text">Wähle hier den Namen des Spielers ein</small></div>
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changePostPost">
                                    <option disabled selected value>Position Auswählen!</option>
                                    <optgroup label="Soldaten">
                                        <option value="0">Soldat</option>
                                    </optgroup>
                                    <optgroup label="GrpFhr">
                                        <option value="1">Gruppenführer</option>
                                        <option value="2">Stlv. Gruppenführer</option>
                                    </optgroup>
                                    <optgroup label="Gehobene Posten">
                                        <option value="3">Kompaniechef</option>
                                        <option value="4">Kompanieführer</option>
                                        <option value="5">Stellvertretender Zugführer</option>
                                        <option value="6">Zugführer</option>
                                    </optgroup>
                                    <optgroup label="Sonstiges">
                                        <option value="-1">Beobachter</option>
                                    </optgroup>
                                </select>
                                <small class="form-text">Wähle hier die Position des Spielers aus</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changePostSubmit">Hinzufügen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changePostSubmit"])) {
            $id = $_POST["changePostId"];
            $post = $_POST["changePostPost"];
            AdminPanelServices::getInstance()->getMariadb()->changePost($id, $post);
            ?>
            <div class="alert alert-success" role="alert">Die URL des Users wurde erfolgreich geändert!</div>
            <?php
        }
    } //modal-6

    public function spawnDeleteUser(): void
    {

        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-7">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Benutzer löschen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="deleteUserName">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Sei dir Bewusst, dass dieser Schritt nicht mehr unumkehrbar
                                    ist!</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" name="deleteUserSubmit" type="submit">Löschen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["deleteUserSubmit"])) {
            $id = $_POST["deleteUserName"];

            AdminPanelServices::getInstance()->getMariadb()->deleteMember($id);
            ?>
            <div class="alert alert-success" role="alert">Der User wurde gelöscht!</a>
            </div> <?php
        }
    } //modal-7

    public function spawnChangeSpecialPosition(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-8">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sonderposition ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="member.php">
                            <div style="margin-bottom: 16px;"><select class="form-select" name="changeSpecialPostId">
                                    <?php
                                    $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                                    if (empty($users)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($users as $user) {
                                            ?>
                                            <option
                                            value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select><small class="form-text">Wähle hier den Namen des Spielers ein</small></div>

                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changeSpecialPostPost">
                                    <option selected value="0">kein Sonderposten</option>
                                    <optgroup label="S1">
                                        <option value="1">Kompaniefeldwebel</option>
                                        <option value="2">Verwaltungs Soldat</option>
                                    </optgroup>
                                    <optgroup label="S2">
                                        <option value="3">Leiter S2</option>
                                        <option value="4">Medien Soldat</option>
                                    </optgroup>
                                    <optgroup label="S3">
                                        <option value="5">Leiter S3</option>
                                        <option value="6">S3 Hilfe</option>
                                    </optgroup>
                                </select>
                                <small class="form-text">Wähle hier den Dienstposten des Spielers aus</small>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changeSpecialPostSubmit">Hinzufügen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changeSpecialPostSubmit"])) {
            $id = $_POST["changeSpecialPostId"];
            $post = $_POST["changeSpecialPostPost"];
            AdminPanelServices::getInstance()->getMariadb()->changeSpecialPost($id, $post);
            ?>
            <divclass="alert alert-success" role="alert">Die URL des Users wurde erfolgreich geändert! <a
                    href="member.php">Neuladen</a> </div>
            <?php
            //header('Location: index.php');
        }
    } //modal-8

    public function spawnChangeAdminName(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin-name">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Admin-Name ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changeNameId">
                                    <?php
                                    $admins = AdminPanelServices::getInstance()->getMariadb()->listAdminUser();

                                    if (empty($admins)) {
                                        echo "<h4 class='text-center'>Fehlercode 2 </h4>";
                                    } else {
                                        $id = 0;
                                        foreach ($admins as $admin) {
                                            ?>
                                            <option
                                            value="<?php echo $admin->getId() ?>" ><?php echo $admin->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Wähle hier den Admin aus</small>
                            </div>
                            <div style="margin-bottom: 16px;"><input class="form-control" type="text" placeholder="Name"
                                                                     name="changeNameName">
                                <small class="form-text">Trage hier den neuen Namen des Admins ein</small></div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" type="submit" name="changeNameSubmit">Ändern</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["changeNameSubmit"])) {
            $id = $_POST["changeNameId"];
            $username = $_POST["changeNameName"];
            AdminPanelServices::getInstance()->getMariadb()->changeAdminUsername($id, $username);
            ?>
            <div class="alert alert-success" role="alert">Der Name des Admins wurde erfolgreich geändert!</div>
            <?php
        }
    }

    public function spawnChangeAdminRank(): void
    {
        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin-rank">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Admin-Rang ändern</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="changeRankId">
                                    <?php
                                    $admins = AdminPanelServices::getInstance()->getMariadb()->listAdminUser();

                                    if (empty($admins)) {
                                        echo "<h4 class='text-center'>Fehlercode 2</h4>";
                                    } else {
                                        foreach ($admins as $admin) {
                                            ?>
                                            <option
                                            value="<?php echo $admin->getId() ?>" ><?php echo $admin->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Wähle hier den Admin aus</small>
                            </div>
                            <div style="margin-bottom: 16px;">

                                <select class="form-select" name="changeAdminRankSelect">
                                    <option disabled selected value>Rolle</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Spieß</option>
                                    <option value="3">Developer</option>
                                    <option value="4">Super Admin</option>
                                </select>
                                <small class="form-text">Wähle hier den neuen Rang des Admins aus</small>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" name="Submit" type="submit">Hinzufügen</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["Submit"])) {
            $rank = $_POST["changeAdminRankSelect"];
            $id = $_POST["changeRankId"];
            AdminPanelServices::getInstance()->getMariadb()->changeAdminRank($id, $rank);
            ?>
            <div class="alert alert-success" role="alert">Der Rang des Users wurde erfolgreich geändert!</div>
            <?php
        }
    }

    public function spawnDeleteAdmin(): void
    {

        ?>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin-delete">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Admin löschen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div style="margin-bottom: 16px;">
                                <select class="form-select" name="deleteAdminName">
                                    <?php
                                    $admins = AdminPanelServices::getInstance()->getMariadb()->listAdminUser();

                                    if (empty($admins)) {
                                        echo "<h4 class='text-center'>Fehlercode 2</h4>";
                                    } else {
                                        foreach ($admins as $admin) {
                                            ?>
                                            <option
                                            value="<?php echo $admin->getId() ?>" ><?php echo $admin->getUsername() ?></option><?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="form-text">Sei dir Bewusst, dass dieser Schritt nicht mehr unumkehrbar
                                    ist! Der arme Admin :(</small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Schließen</button>
                                <button class="btn btn-primary" name="deleteAdminSubmit" type="submit">Löschen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST["deleteAdminSubmit"])) {
            $id = $_POST["deleteAdminName"];

            AdminPanelServices::getInstance()->getMariadb()->deleteAdmin($id);
            ?>
            <div class="alert alert-success" role="alert">Der Admin wurde gelöscht! RIP :(</div>
            <?php
        }
    }

    public function spawnAddAdmin(): void
    {
        $generated_password = AdminPanelServices::getInstance()->getTools()->randomCode(15);
        ?>

        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Neuen Admin hinzufügen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <input class="form-control" type="text" name="username_gen_admin" placeholder="Nutzernamen"
                                   id="username_gen_admin">
                            <small class="form-text">Trage hier den Nutzernamen des Admins ein</small>
                            <input class="form-control" name="password_gen_admin" id="password_gen_admin"
                                   value="<?php echo $generated_password ?>" type="password" placeholder="Passwort">
                            <small class="form-text">Trage hier das Passwort des Admins ein! Passwort:
                                <b><?php echo $generated_password ?></b></small>
                            <select class="form-select" name="rank_gen_admin">
                                <option value="0" selected="">Rolle</option>
                                <option value="1">Admin</option>
                                <option value="2">Spieß</option>
                                <option value="3">Developer</option>
                                <option value="4">Super Admin</option>
                            </select>
                            <small class="form-text">Trage hier die Rolle des Admins ein</small>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="submit_gen_admin">Erstellen</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if (isset($_POST["submit_gen_admin"])) {
            $username = $_POST["username_gen_admin"];
            $password = $_POST["password_gen_admin"];
            $rank = $_POST["rank_gen_admin"];

            $safe_password = AdminPanelServices::getInstance()->getTools()->hashString($username);


            if ($rank == 0) {
                echo "<h3>Du musst etwas anderes als Rolle auswählen!</h3>";
            } else {
                AdminPanelServices::getInstance()->getMariadb()->generateAdmin($username, $safe_password, $rank);
                ?>
                <div class="alert alert-success" role="alert">Der Admin wurde hinzugefügt! :)</div>
                <?php
            }
        }


        ?>


        <?php
    }


    public function spawnAddEvent(): void
    {
        ?>
        <div class="modal fade" id="modal_create_event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_create_event" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_create_event">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <input class="form-control" type="text" name="title" placeholder="Titel" id="username_gen_admin">
                            <small class="form-text">Trage hier den Titel des Events ein</small>
                            <input class="form-control" type="date" required pattern="\d{4}-\d{2}-\d{2}" name="date" placeholder="Titel" id="username_gen_admin">
                            <small class="form-text">Trage hier das Datum des Events ein</small>
                            <select class="form-select" name="type">
                                <option disabled selected="">Rolle</option>
                                <option value="1">Ausbildung</option>
                                <option value="2">Hauptevent</option>
                                <option value="3">Training</option>
                                <option value="4">Sonstiges</option>
                            </select>
                            <small class="form-text">Trage hier den Typ des Events ein</small>
                            <textarea name="text" id="summernote" cols="30" rows="10"></textarea>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Tippe hier den Inhalt des Events ein',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>


                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="submit">Erstellen</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $text = $_POST["text"];
            $date = $_POST["date"];
            $type = $_POST["type"];
            AdminPanelServices::getInstance()->getMariadb()->addEvent($title,$date,$type,$text);
        }


        ?>


        <?php
    }
}
