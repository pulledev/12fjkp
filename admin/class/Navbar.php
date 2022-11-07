<?php

class Navbar
{
    static function printNavbar()
    {
        $user = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser();
        ?>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: #14603d;">
            <div class="container-fluid"><a class="navbar-brand" href="#" style="color: var(--bs-gray-400);"><img
                            src="assets/img/9.jgk.png"
                            style="height: 17px;transform: scale(2.38);margin-right: 29px;margin-left: 22px;">Admin
                    Panel</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                            class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php" style="color: #7bcda7;">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="event.php" style="color: #7bcda7;">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="record.php" style="color: #7bcda7;">Personalakten</a></li>
                        <li class="nav-item"><a class="nav-link" href="member.php" style="color: #7bcda7;">Mitglieder</a></li>
                        <li class="nav-item dropdown" style="color: var(--bs-blue);"><a class="dropdown-toggle nav-link"
                                                                                        aria-expanded="false"
                                                                                        data-bs-toggle="dropdown"
                                                                                        href="#"
                                                                                        style="color: #7bcda7;">Test</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="member.php">Eintragen</a><a
                                        class="dropdown-item" href="#">Bearbeiten</a><a class="dropdown-item" href="#">Löschen</a>
                            </div>
                        </li>
                        <?php
                        if ($user->getRank() === 3) {
                            ?> <li class="nav-item"><a class="nav-link" href="developer.php" style="color: #7bcda7;">Developer Tools</a></li> <?php
                        }elseif ($user->getRank() === 4) {
                            ?> <li class="nav-item"><a class="nav-link" href="developer.php" style="color: #7bcda7;">Developer Tools</a></li> <?php
                        }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="developer.php" style="color: #7bcda7;">Fehler melden!</a></li>
                    </ul>
                    <?php
                    $nameFromUser = AdminPanelServices::getInstance()->getSessionManager()->getLoggedInUser()->getUsername();
                    ?>
                    <div class="ms-auto" style="margin-right: 39px;">

                        <div class="dropdown" style="color: var(--bs-blue);margin-left: 19px;width: 130.0781px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $nameFromUser ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Einstellungen</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>

                    </div

                </div>
            </div>
        </nav>
        <?php
    }
}