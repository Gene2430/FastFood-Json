<?php
    header('Access-Control-Allow-Origin: *');

    $FastFood = [
        [   
            "img" => "McDo.png",
            "branch" => "McDonald&apos;s",
            "founder" => "Ray Kroc",
            "tagline" => "Good Time, Great Taste",
            "origin" => "San Bernardino, California",
            "best_seller" => ["French Fries","Double Burger","Chicken Nuggets"]
        ],
        [
            "img" => "KFC.png",
            "branch" => "KFC",
            "founder" => "Colonel Harland Sanders",
            "tagline" => "Finger Lickin&apos; Good",
            "origin" => "Louisville, Kentucky U.S.A",
            "best_seller" => ["Fried Chicken","Mac and Cheese","Chicken Sandwich"]
        ],
        [
            "img" => "jollibee.jpg",
            "branch" => "Jollibee",
            "founder" => "Tony Tan Caktiong",
            "tagline" => "Langhap Sarap",
            "origin" => "Philippines",
            "best_seller" => ["Chicken Joy","Jolly Spaghetti","Peach Mango Pie"]
        ],
        [
            "img" => "chowking.png",
            "branch" => "Chowking",
            "founder" => "Robert Kuan",
            "tagline" => "Tikman ang Bagong Sarap",
            "origin" => "Philippines",
            "best_seller" => ["Pork Chao Pan","Lauriat","Wanton Mami"]
        ],
        [
            "img" => "Inasal.png",
            "branch" => "Mang Inasal",
            "founder" => "Edgar Sias",
            "tagline" => "The More, The Many-er",
            "origin" => "Philippines",  
            "best_seller" => ["Chicken Inasal","Pork Sisig","Halo-Halo"]
        ]

    ];

    $data = json_encode($FastFood);
    echo $data;
    
?>