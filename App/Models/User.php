<?php
namespace App\Models;

use Framework\Core\Model;

class User extends Model
{
    protected ?int $id = null;
    protected string $username;
    protected string $email;
    protected string $password_hash;
    protected ?string $description = null;
    protected ?string $profile_pic_path = null;
    protected int $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPasswordHash(): string
    {
        return $this->password_hash;
    }

    public function setPasswordHash(string $password_hash): void
    {
        $this->password_hash = $password_hash;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getProfilePicPath(): string
    {
        return $this->profile_pic_path;
    }

    public function setProfilePicPath(string $profile_pic_pat): void
    {
        $this->profile_pic_path = $profile_pic_pat;
    }

    public function getCreatedAt(): int
    {
        return $this->created_at;
    }

    public function setCreatedAt(int $created_at): void
    {
        $this->created_at = $created_at;
    }

}