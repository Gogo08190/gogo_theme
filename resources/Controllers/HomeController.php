<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    protected $top;


    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_home_top', true);
    }

    public function index() {
  	  return view('pages.home', [
            'top' => $this->top,
        ]);
    }
}
