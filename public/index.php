<?php
require_once '../vendor/autoload.php';
use Moe\WebtCoreViewsInMvc\Model\Entity\HotelModel;

$hotels = [
    new HotelModel('Bellagio', 'Luxury resort and casino with a famous fountain show.'),
    new HotelModel('The Venitian', 'Inspired by Venice featuring canals and gondolas.'),
    new HotelModel('Ceasars Palace', 'Inspired Roman-themed hotel and casino.')
];

$template = file_get_contents('../templates/template.html');

$hotelHtml = "";
foreach ($hotels as $hotel) {
    $hotelHtml .= "<div class='hotel'><h2>{$hotel->getName()}</h2><p>{$hotel->getDescription()}</p></div>\n";
}

echo str_replace("{{HOTEL_LIST}}", $hotelHtml, $template);