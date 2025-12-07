<?php

namespace App\Models;

class Like
{
    protected ?int $id = null;
    protected int $post_id;
    protected int $user_id;
    protected string $given_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPostId(): int
    {
        return $this->post_id;
    }

    public function setPostId(int $post_id): void
    {
        $this->post_id = $post_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getGivenAt(): int
    {
        return $this->given_at;
    }

    public function setGivenAt(int $given_at): void
    {
        $this->given_at = $given_at;
    }

}