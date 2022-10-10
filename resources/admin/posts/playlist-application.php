<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('playlist', 'Playlist', 'Playlist')
->setArguments([
	'label'	=>  'Playlist',
	'menu_icon' => 'dashicons-video-alt3',
	'public'        => true,
	'rewrite'       => true,
	'query_var'     => true,
	'show_ui'		=> true,
	'has_archive'   => false,
    'supports' => ['title','thumbnail'],
	'show_in_menu'	=> true,
	'menu_position' => 200,
	'labels' => "Tous"
])
->set();

Metabox::make('playlist_cp', 'playlist')
    ->setTitle('Informations')

		->add(new Section('playlist_general', 'Informations générales', [
			Field::media('playlist_img', ['label' => 'Image']),
			Field::text('playlist_url', ['label' => 'URL']),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();
