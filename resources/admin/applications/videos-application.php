<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('videos_page', 'page')
    ->add(new Section('videos_top','Haut de page', [
        Field::textarea('titre_videos_top', ['label' => 'Titre']),
        Field::textarea('desc_videos_top', ['label' => 'Description']),
        Field::text('btn_videos_top', ['label' => 'Texte bouton']),
        Field::text('url_videos_top', ['label' => 'URL']),
    ]))
    ->setPriority('high')
	->setTemplate('videos')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
