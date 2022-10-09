<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('home_page', 'page')
    ->add(new Section('home_top','Haut de page', [
        Field::textarea('titre_home_top', ['label' => 'Titre']),
    ]))
    ->setPriority('high')
	->setTemplate('home')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
