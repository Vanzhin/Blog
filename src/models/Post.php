<?php

namespace App\models;

class Post
{
    public function __construct(
        private int $id,
        private int $user_id,
        private string $title,
        private string $description
    )
    {
    }

    public function __toString(): string
    {
        return 'Идентификатор статьи: ' . $this->id .
            ' Идентификатор пользователя: ' . $this->user_id .
            ' Заголовок статьи: ' . $this->title .
            ' Текст статьи: ' . $this->description;

    }
}