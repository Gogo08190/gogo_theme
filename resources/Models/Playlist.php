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
class Playlist extends Model
{
    public function get_playlist_list(){
        $args = array(
            'post_type' => 'playlist',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $playlist = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $partenaires[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'playlist_img' => get_post_meta($id, 'th_playlist_img', true),
                'playlist_url' => get_post_meta($id, 'th_playlist_url', true),
            ];

        }
        return $playlist;
    }
}
