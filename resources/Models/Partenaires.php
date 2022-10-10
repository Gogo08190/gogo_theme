<?php

namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;
use \WP_Query;

/**
 * Class Post.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Partenaires extends Model
{
    public function get_partenaires_list(){
        $args = array(
            'post_type' => 'partenaires',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $partenaires = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $partenaires[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'partenaires_img' => get_post_meta($id, 'th_partenaires_img', true),
                'partenaires_desc' => get_post_meta($id, 'th_partenaires_desc', true),
                'partenaires_url' => get_post_meta($id, 'th_partenaires_url', true),
            ];

        }
        return $partenaires;
    }
}
