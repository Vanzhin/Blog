<?php

namespace App\models;

class Comment
{
    public function __construct(
        private int $id,
        private int $user_id,
        private int $article_id,
        private string $text
    )
    {
    }

    public function __toString(): string
    {
        return 'Идентификатор комментрия: ' . $this->id .
            ' Идентификатор пользователя: ' . $this->user_id .
            ' Идентификатор статьи: ' . $this->article_id .
            ' Комментарий: ' . $this->text;

    }
}