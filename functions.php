<?php

declare(strict_types=1);

require(__DIR__ . '/values.php');

// function to echo a random tree-picture from an array in index.php
function getRandomTree(array $trees): string
{

    return $trees[array_rand($trees)];
}

//function to get a random response from an array on info.php
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