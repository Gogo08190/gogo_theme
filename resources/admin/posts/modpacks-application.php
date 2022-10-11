<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('modpacks', 'Modpacks', 'Modpacks')
->setArguments([
	'label'	=>  'Modpacks',
	'menu_icon' => 'dashicons-palmtree',
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

Metabox::make('modpacks_cp', 'modpacks')
    ->setTitle('Informations')

		->add(new Section('modpacks_general', 'Informations générales', [
			Field::media('modpacks_img', ['label' => 'Image']),
			Field::text('modpacks_version', ['label' => 'Version']),
			Field::text('modpacks_url', ['label' => 'URL']),
			Field::choice('modpacks_cat', ['choices' => ['Quêtes', 'Technologie', 'Magie', 'Exploration', 'Skyblock', 'Expert'], 'multiple' => true]),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();
