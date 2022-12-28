<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ActualitesController extends BaseController
{

    protected $top;
    protected $infos;



    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_actualites_top', true);
        $this->top['texte'] = get_post_meta(get_the_id(), 'th_texte_actualites_top', true);
    }

    public function index() {
  	  return view('actus.actualites', [
            'top' => $this->top,
        ]);
    }

    public function single(){
        return view('actus.single', [
          
        ]);
    }
}
