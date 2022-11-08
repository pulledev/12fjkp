<?php
session_start();
class SessionManager
{
    private Mariadb $mariadb;
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

        if (isset($_SESSION["userID"])) {
            $adminID = $_SESSION["adminID"];
            if ($adminID) {
                $this->loggedInUser = $this->mariadb->findAdmin($adminID);
            }
        }
        return $this->loggedInUser;
    }
}