<?php
require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;
use App\models\{User,Comment, Post};

$faker = Factory::create();

switch ($argv[1]){
    case 'user':
        $user = new User(
            $faker->numberBetween(1, 50),
            $faker->firstName(),
            $faker->lastName());
        echo $user . PHP_EOL;
        break;
    case 'comment':
        $comment = new Comment(
            $faker->numberBetween(1, 200),
            $faker->numberBetween(1, 50),
            $faker->numberBetween(1, 50),
            $faker->sentence(10));
        echo $comment . PHP_EOL;
        break;
    case 'post':
        $post = new Post(
            $faker->numberBetween(1, 200),
            $faker->numberBetween(1, 50),
            $faker->sentence(5),
            $faker->text(100));
        echo $post . PHP_EOL;
        break;
    default:
        echo 'Запись отсутствует'. PHP_EOL;
}