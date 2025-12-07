<?php

namespace App\Models;

class Follow
{
    protected ?int $id = null;
    protected int $user_id;
    protected int $follower_id;
    protected string $followed_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getFollowerId(): int
    {
        return $this->follower_id;
    }

    public function setFollowerId(int $follower_id): void
    {
        $this->follower_id = $follower_id;
    }

    public function getFollowedAt(): string
    {
        return $this->followed_at;
    }

    public function setFollowedAt(string $followed_at): void
    {
        $this->followed_at = $followed_at;
    }

}