<?php

namespace Theme\Controllers;
use Theme\Models\Pc;
use Theme\Models\Partenaires;
use Illuminate\Routing\Controller as BaseController;

class ConfigController extends BaseController
{

    protected $top;
    protected $partner;

    protected $pc;
    protected $partenaires;

    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_config_top', true);
        $this->top['desc'] = get_post_meta(get_the_id(), 'th_desc_config_top', true);

        $this->partner['titre'] = get_post_meta(get_the_id(), 'th_titre_config_pc', true);

        $partenaires = new Partenaires();
        $this->partenaires['list'] = $partenaires->get_partenaires_list();

        $pc = new pc();
        $this->pc['list'] = $pc->get_pc_list();
    }

    public function index() {
  	  return view('pages.config', [
            'top' => $this->top,
            'partner' => $this->partner,

            'pc' => $this->pc,
            'partenaires' => $this->partenaires,
        ]);
    }
}
