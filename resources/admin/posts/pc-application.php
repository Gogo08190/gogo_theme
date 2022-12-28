<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Taxonomy;
use Themosis\Support\Facades\TaxonomyField;
use Themosis\Support\Section;

PostType::make('pc', 'Périphériques', 'Périphériques')
->setArguments([
	'label'	=>  'Périphériques',
	'menu_icon' => 'dashicons-desktop',
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

Metabox::make('pc_cp', 'pc')
    ->setTitle('Informations')

		->add(new Section('pc_general', 'Informations générales', [
			Field::text('pc_img', ['label' => 'Image']),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();

Taxonomy::make('cat', 'pc', 'Catégorie', 'Catégorie')->setArguments([
				'hierarchical'       => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
		])
		->set();
