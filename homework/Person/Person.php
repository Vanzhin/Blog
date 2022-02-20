<?php

namespace homework\Person;

use DateTimeImmutable;
use homework\Person_Name;

class Person
{

    public function __construct(
        private Person_Name $name,
        private DateTimeImmutable $registeredOn
    )
    {

    }

    public function __toString(): string
    {
        return "пользователь ". $this->name .
            ' (на сайте с ' . $this->registeredOn->format('Y-m-d') . ')';
    }
}