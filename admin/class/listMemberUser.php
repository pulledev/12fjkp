<?php

class listMemberUser
{
    private int $id;
    private string $username;
    private int $post;
    private int $position;
    private int $user_rank;
    private int $special_post;
    private string $url;
    private string $steamId;

    /**
     * @param int $id
     * @param string $username
     * @param int $post
     * @param int $position
     * @param int $user_rank
     * @param int $special_post
     * @param string $url
     * @param string $steamId
     */
    public function __construct(int $id, string $username, int $post, int $position, int $user_rank, int $special_post, string $url, string $steamId)
    {
        $this->id = $id;
        $this->username = $username;
        $this->post = $post;
        $this->position = $position;
        $this->user_rank = $user_rank;
        $this->special_post = $special_post;
        $this->url = $url;
        $this->steamId = $steamId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getPost(): int
    {
        return $this->post;
    }

    /**
     * @param int $post
     */
    public function setPost(int $post): void
    {
        $this->post = $post;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getUserRank(): int
    {
        return $this->user_rank;
    }

    /**
     * @param int $user_rank
     */
    public function setUserRank(int $user_rank): void
    {
        $this->user_rank = $user_rank;
    }

    /**
     * @return int
     */
    public function getSpecialPost(): int
    {
        return $this->special_post;
    }

    /**
     * @param int $special_post
     */
    public function setSpecialPost(int $special_post): void
    {
        $this->special_post = $special_post;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getSteamId(): string
    {
        return $this->steamId;
    }

    /**
     * @param string $steamId
     */
    public function setSteamId(string $steamId): void
    {
        $this->steamId = $steamId;
    }




}