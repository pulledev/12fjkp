
<?php
$num = 1;
$lastId = 0;
while ($num < 8) {
    $num++;

    $soldat = singleFindPostionPost(0, 0);



    $currentId = $soldat["user_rank"];

    if ($currentId > $lastId) {
        $lastId = $currentId;
        ?>
        <td><h4>Soldat:</h4></td>
        <td>
            <h4>
                <?php
                if ($soldat === null) {
                    echo $rankSoldat;
                } else {
                    echo decodeRank($soldat["user_rank"]);
                }
                ?>
            </h4>
        </td>
        <td>
            <a href="<?php if ($soldat !== null) {
                echo $soldat["url"];
            } ?>">
                <?php
                if ($soldat === null) {
                    echo $ifNoneMessage;
                } else {
                    echo $soldat["username"];
                }
                ?>
            </a>
        </td>

        <td>
            <?php
            if ($soldat === null) {
                echo '<img src="https://www.9jgkp.de/Bilder/Rang/Unteroffizier.png" title="Unteroffizier" alt="Unteroffizier">';
            } else {
                echo decodePictureURL($soldat["user_rank"]);
            }
            ?>
        </td>

        <?php

    }else{
        ?>
        <td>Soldat</td>
        <td><?php ?></td>
        <td><?php ?></td>
        <td><img src="https://www.9jgkp.de/Bilder/Rang/Jäger.png" title="Unteroffizier" alt="Unteroffizier"></td>
        <?php

    }

    $Soldat = findPostionPost(0, 0);
    ?>

    <?php
}


?>

