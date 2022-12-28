<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{

    protected $top;

    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_contact_top', true);
        $this->top['desc'] = get_post_meta(get_the_id(), 'th_desc_contact_top', true);
        $this->top['titre2'] = get_post_meta(get_the_id(), 'th_titre2_contact_top', true);
        $this->top['shortcode'] = get_post_meta(get_the_id(), 'th_shortcode_contact_top', true);
    }

    public function index() {
  	  return view('pages.contact', [
            'top' => $this->top,
        ]);
    }
}
