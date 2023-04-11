<?php
    header('Access-Control-Allow-Origin: *');

    $FastFood = [
        [   
            "img" => "Mcdoo.jpg",
            "branch" => "McDonald&apos;s",
            "founder" => "Ray Kroc",
            "tagline" => "Good Time, Great Taste",
            "origin" => "California",
            "best_seller" => ["French Fries","Double Burger","Chicken Nuggets"]
        ],
        [
            "img" => "KFCC.jpg",
            "branch" => "KFC",
            "founder" => "Harland Sanders",
            "tagline" => "Finger Lickin&apos; Good",
            "origin" => "Kentucky U.S.A",
            "best_seller" => ["Fried Chicken","Mac and Cheese","Chicken Sandwich"]
        ],
        [
            "img" => "jollibeee.jpg",
            "branch" => "Jollibee",
            "founder" => "Tony Tan Caktiong",
            "tagline" => "Langhap Sarap",
            "origin" => "Philippines",
            "best_seller" => ["Chicken Joy","Jolly Spaghetti","Peach Mango Pie"]
        ],
        [
            "img" => "chowkingg.jpg",
            "branch" => "Chowking",
            "founder" => "Robert Kuan",
            "tagline" => "Tikman ang Tagumpay",
            "origin" => "Philippines",
            "best_seller" => ["Pork Chao Pan","Lauriat","Wanton Mami"]
        ],
        [
            "img" => "Inasall.jpg",
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