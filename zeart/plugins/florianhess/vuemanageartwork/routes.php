<?php

use FlorianHess\Vuemanageartwork\Models\Artwork;

Route::get('artworks', function() {

    $artworks = Artwork::all();

    return $artworks;
});
