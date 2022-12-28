<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Theme\Models\Playlist;
class VideosController extends BaseController
{

    protected $top;

    protected $playlist;

    function __construct(){
        $this->top['titre'] = get_post_meta(get_the_id(), 'th_titre_videos_top', true);
        $this->top['desc'] = get_post_meta(get_the_id(), 'th_desc_videos_top', true);
        $this->top['btn'] = get_post_meta(get_the_id(), 'th_btn_videos_top', true);
        $this->top['url'] = get_post_meta(get_the_id(), 'th_url_videos_top', true);

        $playlist = new Playlist();
        $this->playlist['list'] = $playlist->get_playlist_list();
    }

    public function index() {
  	  return view('pages.videos', [
            'top' => $this->top,

            'playlist' => $this->playlist,
        ]);
    }
}
