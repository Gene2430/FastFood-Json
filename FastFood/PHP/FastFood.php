<?php
    header('Access-Control-Allow-Origin: *');

    $FastFood = [
        [   
            "img" => "",
            "branch" => "McDonald&apos;s",
            "founder" => "Ray Kroc",
            "tagline" => "Good Time, Great Taste",
            "origin" => "San Bernardino, California",
            "best_seller" => ["French Fries","Double Burger","Chicken Nuggets"]
        ],
        [
            "img" => "",
            "branch" => "KFC",
            "founder" => "Colonel Harland Sanders",
            "tagline" => "Finger Lickin&apos; Good",
            "origin" => "Louisville, Kentucky U.S.A",
            "best_seller" => ["Fried Chicken","Mac and Cheese","Chicken Sandwich"]
        ],
        [
            "img" => "",
            "branch" => "Jollibee",
            "founder" => "Tony Tan Caktiong",
            "tagline" => "Langhap Sarap",
            "origin" => "Philippines",
            "best_seller" => ["Chicken Joy","Jolly Spaghetti","Peach Mango Pie"]
        ],
        [
            "img" => "Dolittle.jpg",
            "branch" => "Chowking",
            "founder" => "Robert Kuan",
            "tagline" => "Tikman ang Bagong Sarap",
            "origin" => "Philippines",
            "best_seller" => ["Pork Chao Pan","Lauriat","Wanton Mami"]
        ],
        [
            "img" => "JW3.jpg",
            "branch" => "Mang Inasl",
            "founder" => "Edgar Sias",
            "tagline" => "The More, The Many-er",
            "origin" => "Philippines",
            "best_seller" => ["Chicken Inasal","Prok Sisig","Halo-Halo"]
        ]

    ];

    $data = json_encode($FastFood);
    echo $data;
    
?>