<?php

class listAdminUser
{
    private string $rank;
    private string $username;
    private int $id;

    /**
     * ForumQuestion constructor.
     * @param $rank
     * @param $username
     * @param $id
     */
    public function __construct(int $rank, string $username, int $id)
    {
        $this->rank = $rank;
        $this->username = $username;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return mixed
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

}