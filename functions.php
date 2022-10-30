<?php

declare(strict_types=1);

require(__DIR__ . '/values.php');


function getRandomTree(array $trees): string
{

    return $trees[array_rand($trees)];
}


function getResponse(string $key, array $responseMaps): string
{
    foreach ($responseMaps as $theKey => $responseMap) {
        if ($theKey == $key) {
            $keysResponses = $responseMap;
        }
    }
    //pick a random key
    $randomKey = array_rand($keysResponses);
    $randomResponse = $keysResponses[$randomKey];
    return $randomResponse;
}