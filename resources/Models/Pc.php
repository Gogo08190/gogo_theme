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
class Pc extends Model
{
    public function get_pc_list(){
        $args = array(
            'post_type' => 'pc',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $pc = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $pc[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'pc_img' => get_post_meta($id, 'th_pc_img', true),
            ];

        }
        return $pc;
    }
}
