<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('about_page', 'page')
    ->add(new Section('about_top','Haut de page', [
        Field::textarea('titre_about_top', ['label' => 'Titre']),
        Field::textarea('desc_about_top', ['label' => 'Description']),
        Field::textarea('titre2_about_top', ['label' => 'Titre Réseaux']),
    ]))
    ->add(new Section('about_faq','FAQ', [
        Field::textarea('titre_about_faq', ['label' => 'Titre']),
    ]))
    ->add(new Section('about_partenaires','Partenaires', [
        Field::textarea('titre_about_partenaires', ['label' => 'Titre']),
    ]))
    ->setPriority('high')
	->setTemplate('about')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
