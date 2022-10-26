<?php

declare(strict_types=1);

/** get random tree image file name
 * @return string tree file name
 */
function getRandomTree(): string
{
    $trees = array('ask.jpg', 'beech.jpg', 'birch.jpg', 'lind.jpg', 'maple.jpg', 'oak.jpg');

    return $trees[array_rand($trees)];
}


function getChatbotResponse(string $key): string
{

    $responseMap = [
        'hi' => [
            'hello',
            'whats poppin',
            'hiiiii',
            'it is what it is'
        ],
        'trees' => [
            'I like trees',
            'trees are the greatest thing',
            'My favorite tree is birch'
        ],
        'tips' => [
            'Go and hug your favorite tree'
        ],
    ];

    // getting the responses from responseMap using the key
    $keysResponses = $responseMap[$key];

    // pick a random key
    $randomKey = array_rand($keysResponses);


    $randomResponse = $keysResponses[$randomKey];
    return $randomResponse;
}