<?php

class Buttons
{
    public function spawnAdminButton(): void
    {
        ?>
        <div class="row">
            <div class="col-md-4 col-xl-4 offset-xl-0" style="margin-bottom: 9px;">
                <div class="d-grid gap-2"><button class="btn btn-primary" type="button" data-bs-target="#modal-1" data-bs-toggle="modal" style="padding-left: 80px;padding-right: 80px;padding-top: 6px;margin: 0;filter: blur(0px);">Admin hinzufügen</button></div>
            </div>
            <div class="col-md-4" style="margin-bottom: 9px;">
                <div class="d-grid gap-2">
                    <div class="dropdown d-grid gap-2"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Admin bearbeiten</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-bs-target="#modal-admin-name" data-bs-toggle="modal">Name</a>
                            <a class="dropdown-item" href="#" data-bs-target="#modal-admin-rank" data-bs-toggle="modal">Rang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom: 9px;">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" data-bs-target="#modal-admin-delete" data-bs-toggle="modal" style="padding-left: 80px;padding-right: 80px;padding-top: 6px;margin: 0px;">Admin löschen</button>
                </div>
            </div>
        </div>
        <?php
        AdminPanelServices::getInstance()->getModal()->spawnAddAdmin();
        AdminPanelServices::getInstance()->getModal()->spawnChangeAdminName();
        AdminPanelServices::getInstance()->getModal()->spawnChangeAdminRank();
        AdminPanelServices::getInstance()->getModal()->spawnDeleteAdmin();
    }






    //noch nicht implementierte Features
    function adminOptionButton($id){
        ?>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="options" data-bs-toggle="dropdown" aria-expanded="false">
                Optionen
            </button>
            <ul class="dropdown-menu" aria-labelledby="options" id="<?php  ?>">
                <a class="dropdown-item" href="#" data-bs-target="#modal-admin-name" data-bs-toggle="modal">Username verändern</a>
                <a class="dropdown-item" href="#" data-bs-target="#modal-admin-name" data-bs-toggle="modal">Rechtestufe ändern</a>
                <a class="dropdown-item" href="#" data-bs-target="#modal-admin-name" data-bs-toggle="modal">Admin löschen</a>
            </ul>
        </div>
        <?php
        AdminPanelServices::getInstance()->getModal()->spawnChangeAdminName($id);
        AdminPanelServices::getInstance()->getModal()->spawnChangeAdminRank();
        AdminPanelServices::getInstance()->getModal()->spawnDeleteAdmin();
    }
}