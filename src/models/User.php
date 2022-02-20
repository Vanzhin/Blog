<?php
namespace App\models;

class User
{

    public function __construct(
        private int $id,
        private string $firstName,
        private string $lastName
    )
    {
    }

    public function __toString(): string
    {
        return 'Идентификатор пользователя: ' . $this->id .
            ' Имя пользователя: ' . $this->firstName .
            ' ' . $this->lastName;

    }
}