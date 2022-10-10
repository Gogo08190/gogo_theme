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
class Teams extends Model
{
    public function get_teams_list(){
        $args = array(
            'post_type' => 'teams',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $teams = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $teams[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'teams_img' => get_post_meta($id, 'th_teams_img', true),
                'teams_fonction' => get_post_meta($id, 'th_teams_fonction', true),
                'teams_youtube' => get_post_meta($id, 'th_teams_youtube', true),
                'teams_twitch' => get_post_meta($id, 'th_teams_twitch', true),
                'teams_twitter' => get_post_meta($id, 'th_teams_twitter', true),
            ];

        }
        return $teams;
    }
}
