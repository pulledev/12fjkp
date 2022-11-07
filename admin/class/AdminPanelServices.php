<?php

class AdminPanelServices
{

    private static ?AdminPanelServices $instance = null;
    private Modal $modal;
    private SessionManager $sessionManager;
    private Mariadb $mariadb;
    private Tools $tools;
    private Buttons $buttons;
    private Tables $tables;
    private Classfichdir $classfichdir;

    /**
     * AdminPanelServices constructor.
     */
    private function __construct()
    {
        $this->mariadb = new Mariadb();
        $this->buttons = new Buttons();
        $this->sessionManager = new SessionManager($this->mariadb);
        $this->tools = new Tools();
        $this->modal = new Modal();
        $this->tables = new Tables();

    }


    /**
     * @return null
     */
    public static function getInstance(): AdminPanelServices
    {
        if (self::$instance == null) {
            self::$instance = new AdminPanelServices();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getConfig(): Config
    {
        return $this->config;
    }


    /**
     * @return mixed
     */
    public function getButtons(): Buttons
    {
        return $this->buttons;
    }

    /**
     * @return mixed
     */
    public function getTables(): Tables
    {
        return $this->tables;
    }

    /**
     * @return mixed
     */
    public function getModal(): Modal
    {
        return $this->modal;
    }


    /**
     * @return mixed
     */
    public function getMariadb(): Mariadb
    {
        return $this->mariadb;

        /**
         * @return mixed
         */
    }

    public function getTools(): Tools
    {
        return $this->tools;
    }

    /**
     * @return SessionManager
     */
    public function getSessionManager(): SessionManager
    {
        return $this->sessionManager;
    }
}
