<?php

declare(strict_types=1);



// indexed array containing tree-pictures for the getRandomTree-function
$trees = array(
    'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Large_white_oak_at_old_house_site.jpg/1024px-Large_white_oak_at_old_house_site.jpg',

    'https://static01.nyt.com/images/2022/08/01/us/21californiatoday-1/21californiatoday-1-articleLarge.jpg?quality=75&auto=webp&disable=upscale',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Dead_Vlei_Tree_central.jpg/1600px-Dead_Vlei_Tree_central.jpg?20191027114624',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Leafy_tree_in_green_paddy_fields.jpg/1599px-Leafy_tree_in_green_paddy_fields.jpg?20180206122842',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/D%C3%BClmen%2C_Kirchspiel%2C_Dernekamp%2C_Baum_--_2021_--_9413.jpg/1600px-D%C3%BClmen%2C_Kirchspiel%2C_Dernekamp%2C_Baum_--_2021_--_9413.jpg?20211227093603',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Maple_M.jpg/640px-Maple_M.jpg',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Tree_Huggers_MG_2734.jpg/640px-Tree_Huggers_MG_2734.jpg',

    'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Beech_tree_at_crossing_-_geograph.org.uk_-_1884577.jpg/640px-Beech_tree_at_crossing_-_geograph.org.uk_-_1884577.jpg'



);

// associative multi-dimensional array containing responses for the getResponse-array with string and integer-keys
$responseMaps = [
    'Just say hi to me' => [
        1 => 'hello',
        2 => 'whats poppin',
        3 => 'hello beautiful',
        4 => 'whats crackin good loockin',
        5 => ' hi buddy, youre doing alright'
    ],
    'Tell me something about trees' => [
        1 => 'Some tree species never die of old age',
        2 => 'Trees release chemicals that can make us happier',
        3 => 'Trees have been worshipped for centuries',
        4 => ' There are 422 times as many trees on earth as people',
        5 => 'Trees help each other to ward off predators'
    ],
    'Tips to feel better' => [
        1 => 'Go and hug your favorite tree',
        2 => 'Spending time around trees reduces stress, lowers blood pressure and improves mood',
        3 => 'Exposure to forests boosts our immune system',
        4 => 'Walk barefoot on grass to decrease stress level by 62 percent!',
        5 => 'Spend some time in nature, it helps our immune-system'


    ],
];