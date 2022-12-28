<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('contact_page', 'page')
    ->add(new Section('contact_top','Haut de page', [
        Field::textarea('titre_contact_top', ['label' => 'Titre']),
        Field::textarea('desc_contact_top', ['label' => 'Description']),
        Field::textarea('titre2_contact_top', ['label' => 'Titre Réseaux']),
        Field::text('shortcode_contact_top', ['label' => 'Shortcode']),
    ]))
    ->setPriority('high')
	->setTemplate('contact')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
