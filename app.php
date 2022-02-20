<?php

require_once __DIR__ . '/vendor/autoload.php';

// автозагрузчик для домашки 1
spl_autoload_register(function ($class) {

    $file = str_replace(['\\', '_'], DIRECTORY_SEPARATOR, $class) . '.php';
    $path = __DIR__ . '/' . $file;

    if (file_exists($path)) {
        require $path;
    }
});

use homework\Person\Person;
use homework\Person_Name;
use homework\Blog\Post;

$post = new Post(
    new Person(
        new Person_Name('Иван', 'Иванов'),
        new DateTimeImmutable()
    ),
    'Всем привет!',
);

echo $post;

//$user = new \App\models\User(1, 'John', 'Johansen');
//echo $user;