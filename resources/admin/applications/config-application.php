<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('config_page', 'page')
    ->add(new Section('config_top','Haut de page', [
        Field::textarea('titre_config_top', ['label' => 'Titre']),
        Field::textarea('desc_config_top', ['label' => 'Description']),
    ]))

    ->add(new Section('config_partenaires','Partenaires', [
        Field::textarea('titre_config_partenaires', ['label' => 'Titre']),
    ]))


    ->setPriority('high')
	->setTemplate('config')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
