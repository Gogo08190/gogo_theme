<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('faq', 'FAQ', 'FAQ')
->setArguments([
	'label'	=>  'FAQ',
	'menu_icon' => 'dashicons-lightbulb',
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

Metabox::make('faq_cp', 'faq')
    ->setTitle('Informations')

		->add(new Section('faq_general', 'Informations générales', [
			Field::textarea('faq_question', ['label' => 'Question']),
			Field::textarea('faq_reponse', ['label' => 'Réponse']),
		]))

    ->addTranslation('done', 'Sauvegarde réussie')
    ->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
    ->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
    ->set();
