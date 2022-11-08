<?php
session_start();
class SessionManager
{
    private Mariadb $mariadb;
    private ?Admin $loggedInAdmin = null;
    private ?User $loggedInUser = null;

    /**
     * SessionHandler constructor.
     */

    public function __construct(Mariadb $mariadb)
    {
        //session_start();
        $this->mariadb = $mariadb;
    }

    /*
     * @return User
     */

    public function getLoggedInUser(): ?User
    {
        error_log("getLoggedInUser");

        if (isset($_SESSION["userID"])) {
            $userID = $_SESSION["userID"];
            if ($userID) {
                $this->loggedInUser = $this->mariadb->findUser($userID);
            }
        }
        return $this->loggedInUser;
    }
    public function getLoggedInAdmin(): ?Admin
    {
        error_log("getLoggedInAdmin");

        if (isset($_SESSION["adminID"])) {
            $adminID = $_SESSION["adminID"];
            if ($adminID) {
                $this->loggedInAdmin = $this->mariadb->findAdmin($adminID);
            }
        }
        return $this->loggedInAdmin;
    }
}