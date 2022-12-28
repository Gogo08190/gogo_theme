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
class Faq extends Model
{
    public function get_faq_list(){
        $args = array(
            'post_type' => 'faq',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $faq = array();

        foreach($posts->get_posts() as $key => $val){
            $id = $val->ID;
            $faq[$id] = [
                'title' => $val->post_title,
                'url' => get_the_permalink($val->ID),
                'faq_question' => get_post_meta($id, 'th_faq_question', true),
                'faq_reponse' => get_post_meta($id, 'th_faq_reponse', true),
            ];

        }
        return $faq;
    }
}
