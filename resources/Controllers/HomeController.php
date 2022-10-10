<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Theme\Models\Modpacks;
use Theme\Models\Partenaires;
use Theme\Models\Playlist;
use Theme\Models\Teams;

class HomeController extends BaseController
{

    protected $top;
    protected $lp;
    protected $team;
    protected $modpack;
    protected $partner;

    protected $modpacks;
    protected $partenaires;
    protected $playlist;
    protected $teams;


    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_home_top', true);
        $this->top['desc'] = get_post_meta(get_the_id(), 'th_desc_home_top', true);
        $this->top['btn'] = get_post_meta(get_the_id(), 'th_btn_home_top', true);
        $this->top['url'] = get_post_meta(get_the_id(), 'th_url_home_top', true);
        $this->top['img'] = get_post_meta(get_the_id(), 'th_img_home_top', true);

        $this->lp['titre'] = get_post_meta(get_the_id(), 'th_titre_home_lp', true);
        $this->lp['btn'] = get_post_meta(get_the_id(), 'th_btn_home_lp', true);
        $this->lp['url'] = get_post_meta(get_the_id(), 'th_url_home_lp', true);

        $this->team['titre'] = get_post_meta(get_the_id(), 'th_titre_home_team', true);

        $this->modpack['titre'] = get_post_meta(get_the_id(), 'th_titre_home_modpack', true);
        $this->modpack['btn'] = get_post_meta(get_the_id(), 'th_btn_home_modpack', true);
        $this->modpack['url'] = get_post_meta(get_the_id(), 'th_url_home_modpack', true);

        $this->partner['titre'] = get_post_meta(get_the_id(), 'th_titre_home_partner', true);


        $modpacks = new Modpacks();
        $this->modpacks['list'] = $modpacks->get_modpacks_list();

        $partenaires = new Partenaires();
        $this->partenaires['list'] = $partenaires->get_partenaires_list();

        $playlist = new Playlist();
        $this->playlist['list'] = $playlist->get_playlist_list();

        $teams = new Teams();
        $this->teams['list'] = $teams->get_teams_list();
    }

    public function index() {
  	  return view('pages.home', [
            'top' => $this->top,
            'lp' => $this->lp,
            'team' => $this->team,
            'modpack' => $this->modpack,
            'partner' => $this->partner,

            'modpacks' => $this->modpacks,
            'partenaires' => $this->partenaires,
            'playlist' => $this->playlist,
            'teams' => $this->teams,
        ]);
    }
}
