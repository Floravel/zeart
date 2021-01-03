<?php

use FlorianHess\Manageartwork\Models\Artwork;
use FlorianHess\Manageartwork\Models\Location;


Route::get('artworks', function() {
    $artworks = Artwork::all();
    return $artworks;
});

Route::get('locations', function() {
    $locations = Location::all();
    return $locations;
});

Route::get('locations/list', function() {
    $locations = Location::all();

    foreach ($locations as $location) {
        $location['label'] = $location['title'];
        $location['value'] = ($location['id']);
        unset($location['title']);
        unset($location['id']);
        unset($location['slug']);
    }

    return $locations;
});
