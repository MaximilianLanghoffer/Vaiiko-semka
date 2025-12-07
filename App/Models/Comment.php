<?php

namespace App\Models;

class Comment
{
    protected ?int $id = null;
    protected int $post_id;
    protected int $user_id;
    protected string $text;
    protected int $commented_at;
}