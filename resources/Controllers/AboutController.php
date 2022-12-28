<?php

namespace Theme\Controllers;
use Theme\Models\Faq;
use Theme\Models\Partenaires;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{

    protected $top;
    protected $faqs;
    protected $partner;

    protected $faq;
    protected $partenaires;

    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_about_top', true);
        $this->top['desc'] = get_post_meta(get_the_id(), 'th_desc_about_top', true);
        $this->top['titre2'] = get_post_meta(get_the_id(), 'th_titre2_about_top', true);

        $this->faqs['titre'] = get_post_meta(get_the_id(), 'th_titre_about_faq', true);

        $this->partner['titre'] = get_post_meta(get_the_id(), 'th_titre_about_partenaires', true);

        $faq = new Faq();
        $this->faq['list'] = $faq->get_faq_list();

        $partenaires = new Partenaires();
        $this->partenaires['list'] = $partenaires->get_partenaires_list();
    }

    public function index() {
  	  return view('pages.about', [
            'top' => $this->top,
            'faqs' => $this->faqs,
            'partner' => $this->partner,

            'faq' => $this->faq,
            'partenaires' => $this->partenaires,
        ]);
    }
}
