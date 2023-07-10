<?php 

// ARRAY


$projects = [ 

    'ziriuzv2' => [
        'creator' => 'B4N3D',
        'frontend' => 'ReactJS',
        'backend' => 'NodeJS',
        'dataBase' => 'MongoDB',
        'Hosting' => 'Amazon Web Services',
        'versions' => [
            ['version' => 2.0, 'releaseDate' => 'August 01, 2023'],
            ['version' => 3.0, 'realeaseDate' => 'September 01, 2023'],
        ],
    ],

];

echo $projects['ziriuzv2']['versions'][0]['releaseDate'];

?>