<?php

class Tables
{
    public function spawnMemberTable():void
    {
        ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Dienstposition</th>
                    <th>Rang</th>
                    <th>Sonderposition</th>
                    <th>Url</th>
                    <th>SteamID64</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $users = AdminPanelServices::getInstance()->getMariadb()->listMember();

                if (empty($users)) {
                    echo "<h4 class='text-center'>Es gibt zurzeit keine Admins, obwohl das keinen Sinn ergibt xD</h4>";
                } else {
                    $cnt = 0;
                    foreach ($users as $user) {
                        $post = AdminPanelServices::getInstance()->getTools()->decodePost($user->getPost());
                        $position = AdminPanelServices::getInstance()->getTools()->decodePosition($user->getPosition());
                        $rank = AdminPanelServices::getInstance()->getTools()->decodeRank($user->getUserRank());
                        $specialPosition = AdminPanelServices::getInstance()->getTools()->decodeSpecialPosts($user->getSpecialPost());
                        ?>
                        <tr>
                            <td><?php echo $user->getId() ?></td>
                            <td><?php echo $user->getUsername() ?></td>
                            <td> <?php echo $post ?></td>
                            <td> <?php echo $position ?></td>
                            <td> <?php echo $rank ?></td>
                            <td> <?php echo $specialPosition ?></td>
                            <td> <?php echo $user->getUrl() ?></td>
                            <td> <?php echo $user->getSteamId() ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}