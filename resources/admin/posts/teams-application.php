<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('teams', 'Team', 'Team')
->setArguments([
	'label'	=>  'Team',
	'menu_icon' => 'dashicons-groups',
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

Metabox::make('teams_cp', 'team')
    ->setTitle('Informations')

		->add(new Section('teams_general', 'Informations générales', [
			Field::media('teams_img', ['label' => 'Image']),
			Field::text('teams_fonction', ['label' => 'Fonction']),
			Field::text('teams_youtube', ['label' => 'Youtube']),
			Field::text('teams_twitch', ['label' => 'Twitch']),
			Field::text('teams_twitter', ['label' => 'Twitter']),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();
