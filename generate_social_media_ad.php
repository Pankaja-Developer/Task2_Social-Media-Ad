<?php

function generate_social_media_ad() {
    $product_name = "EcoWave Reusable Water Bottle";
    $ad_image = "eco_bottle_ad.jpg";
    $ad_caption = "Stay hydrated and eco-friendly with the $product_name! 🌱💧";
    $ad_link = "https://monsterhost.com/?utm_source=yourwebsite.com";

    $ad = "<a href='$ad_link'><img src='$ad_image' alt='Eco-Friendly Water Bottle Ad'></a>";
    $ad .= "<p>$ad_caption</p>";

    return $ad;
}

echo generate_social_media_ad();

?>