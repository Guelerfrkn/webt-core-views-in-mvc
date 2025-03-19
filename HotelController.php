<?php
require_once __DIR__ . '/../models/HotelModel.php';

class HotelController {
    public function renderView() {
        $hotels = HotelModel::getHotels();
        $template = file_get_contents(__DIR__ . '/../views/template.html');

        $hotelHtml = "";
        foreach ($hotels as $hotel) {
            $hotelHtml .= "<div class='hotel'><h2>{$hotel['name']}</h2><p>{$hotel['description']}</p></div>\n";
        }

        echo str_replace("{{HOTEL_LIST}}", $hotelHtml, $template);
    }
}