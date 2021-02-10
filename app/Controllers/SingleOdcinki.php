<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleOdcinki extends Controller
{
    public function odcinki()
    {
        return (object) [
            'name' => get_field('nazwa-odcinka', get_the_ID()),
            'photo' => get_field('zdjecie_do_strony_odcinka', get_the_ID()),
            'photo2' => get_field('miniatura_odcinka', get_the_ID()),
            'desc' => get_field('opis_odcinka', get_the_ID()),
            'yt' => get_field('link_do_youtube', get_the_ID()),
            'spotify' => get_field('link_do_spotify', get_the_ID()),
            'apple' => get_field('link_do_odcinka_na_apple', get_the_ID())
             
        ];
    
}
    protected function getImages($id)
    {
        $image = get_field('miniatura_odcinka', $id);
        $episode = get_field('nazwa-odcinka', $id);

        $picture = $image['sizes']['myCustomSize'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];
        
        return (object) [
                        'title' => $title,
                        'alt' => $alt,
                        'picture' => $picture,
                        'episode' => $episode,
                        'permalink' => get_post_permalink($odcinek)
                    ];
    }
}