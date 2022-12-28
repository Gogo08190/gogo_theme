<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('actualites_page', 'page')
    ->add(new Section('actualites_top','Haut de page', [
        Field::textarea('titre_actualites_top', ['label' => 'Titre']),
        Field::textarea('texte_actualites_top', ['label' => 'Texte']),
    ]))

    ->setPriority('high')
	->setTemplate('actualites')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
