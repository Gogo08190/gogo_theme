<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('partenaires', 'Partenaires', 'Partenaires')
->setArguments([
	'label'	=>  'Partenaires',
	'menu_icon' => 'dashicons-networking',
	'public'        => false,
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

Metabox::make('partenaires_cp', 'partenaires')
    ->setTitle('Informations')

		->add(new Section('partenaires_general', 'Informations générales', [
			Field::media('partenaires_img', ['label' => 'Image']),
			Field::textarea('partenaires_desc', ['label' => 'Description']),
			Field::text('partenaires_url', ['label' => 'URL']),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();
