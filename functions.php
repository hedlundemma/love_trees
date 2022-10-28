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

    $responseMaps = [
        'Just say hi to me' => [
            'hello',
            'whats poppin',
            'hiiiii',
            'it is what it is'
        ],
        'Tell me something about trees' => [
            'Some tree species never die of old age',
            'Trees release chemicals that can make us happier',
            'Trees have been worshipped for centuries',
            ' There are 422 times as many trees on earth as people',
            'Trees help each other to ward off predators'
        ],
        'Tips to feel better' => [
            'Go and hug your favorite tree',
            'Spending time around trees reduces stress, lowers blood pressure and improves mood',
            'Exposure to forests boosts our immune system'

        ],
    ];

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