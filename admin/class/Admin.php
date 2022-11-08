<?php


class Admin
{


    private string $username;
    private int $id;
    private int $rank;


    /**
     * User constructor.
     * @param string $username
     * @param int $ID
     * @param int $rank
     */
    public function __construct(string $username, int $ID, int $rank)
    {
        $this->username = $username;
        $this->id = $ID;
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getRank():int
    {
        return $this->rank;
    }


    /*function render ()
    {
        ?>
        <a href="mailto:<?php echo $this->getEmail()?>"><?php echo $this->getUsername()?></a>
        <?php
    }*/
}