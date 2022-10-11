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
class Modpacks extends Model
{
    public function get_modpacks_list(){
        $args = array(
            'post_type' => 'modpacks',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'DESC'
        );

        $posts = new WP_Query($args);

        $modpacks = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $modpacks[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'modpacks_img' => get_post_meta($id, 'th_modpacks_img', true),
                'modpacks_version' => get_post_meta($id, 'th_modpacks_version', true),
                'modpacks_cat' => get_post_meta($id, 'th_modpacks_cat', false),
                'modpacks_url' => get_post_meta($id, 'th_modpacks_url', true),
            ];

        }
        return $modpacks;
    }
}
