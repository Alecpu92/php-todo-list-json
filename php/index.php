<?php 

header("Access-Control-Allow-Origin: http://localhost:5173/");
header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$lists = [
    [
        'name' => 'HTML'
    ]
    [
        'name' => 'CSS'
    ]
    [
        'name' => 'Responsive design'
    ]
    [
        'name' => 'Javascript'
    ]
    [
        'name' => 'PHP'
    ]
    [
        'name' => 'Laravel'
    ]  
    ];

    echo json_encode($lists);

