<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class pageOdcinki extends Controller
{
    public function odcinki() {
        $args = [         
            'post_type' => 'odcinki',
            
                 ];

            $the_query = new \WP_Query($args);
            $odcinki = [];

            if( $the_query->post_count > 0 )
            {
                $odcinki = array_map(function($odcinek){
                    $image = get_field('miniatura_odcinka', $odcinek);
                    $episode = get_field('nazwa-odcinka', $odcinek);
                    $tags = get_field('tagi', $odcinek);

                    $picture = $image['sizes']['medium'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                    $caption = $image['caption'];
                    

                    return (object) [
                        'title' => $title,
                        'alt' => $alt,
                        'picture' => $picture,
                        'episode' => $episode,
                        'permalink' => get_post_permalink($odcinek),
                        'tags' => $tags
                    ];
                }, $the_query->posts);
                wp_reset_postdata();

            }
            return $odcinki;
    }
}
