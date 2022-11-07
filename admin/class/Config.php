<?php


class Config
{
    private $cfg;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->cfg = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "../config.ini");

    }

    function getValue($name)
    {
        return $this->cfg[$name];
    }
}