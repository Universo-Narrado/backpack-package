<?php

use UniversoNarrado\BackpackPackage\JokeFactory;

require __DIR__ . '/vendor/autoload.php';

$jokes = new JokeFactory();
$joke = $jokes->getRandomJoke();

echo $joke;