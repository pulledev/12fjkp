<?php


class User
{
    private string $username;
    private int $id;
    private int $post;
    private int $position;
    private int $user_rank;
    private int $special_post;
    private string $url;
    private string $steam_id;
    private string $discord;
    private string $ts3;
    private int $activated;

    /**
     * @param string $username
     * @param int $id
     * @param int $post
     * @param int $position
     * @param int $user_rank
     * @param int $special_post
     * @param string $url
     * @param string $steam_id
     * @param string $discord
     * @param string $ts3
     * @param int $activated
     */
    public function __construct(string $username, int $id, int $post, int $position, int $user_rank, int $special_post, string $url, string $steam_id, string $discord, string $ts3, int $activated)
    {
        $this->username = $username;
        $this->id = $id;
        $this->post = $post;
        $this->position = $position;
        $this->user_rank = $user_rank;
        $this->special_post = $special_post;
        $this->url = $url;
        $this->steam_id = $steam_id;
        $this->discord = $discord;
        $this->ts3 = $ts3;
        $this->activated = $activated;
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
    public function setPosition(string $position): void
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
        return $this->steam_id;
    }

    /**
     * @param string $steam_id
     */
    public function setSteamId(int $steam_id): void
    {
        $this->steam_id = $steam_id;
    }

    /**
     * @return string
     */
    public function getDiscord(): string
    {
        return $this->discord;
    }

    /**
     * @param string $discord
     */
    public function setDiscord(int $discord): void
    {
        $this->discord = $discord;
    }

    /**
     * @return string
     */
    public function getTs3(): string
    {
        return $this->ts3;
    }

    /**
     * @param string $ts3
     */
    public function setTs3(string $ts3): void
    {
        $this->ts3 = $ts3;
    }

    /**
     * @return int
     */
    public function getActivated(): int
    {
        return $this->activated;
    }

    /**
     * @param int $activated
     */
    public function setActivated(int $activated): void
    {
        $this->activated = $activated;
    }

}