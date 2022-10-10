<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;


Metabox::make('home_page', 'page')
    ->add(new Section('home_top','Haut de page', [
        Field::textarea('titre_home_top', ['label' => 'Titre']),
        Field::textarea('desc_home_top', ['label' => 'Description']),
        Field::text('btn_home_top', ['label' => 'Texte Bouton']),
        Field::text('url_home_top', ['label' => 'URL Bouton']),
        Field::media('img_home_top', ['label' => 'Image']),
    ]))

    ->add(new Section('home_lp','Lets Play', [
        Field::textarea('titre_home_lp', ['label' => 'Titre']),
        Field::text('btn_home_lp', ['label' => 'Texte Bouton']),
        Field::text('url_home_lp', ['label' => 'URL Bouton']),
    ]))

    ->add(new Section('home_team','La Team', [
        Field::textarea('titre_home_team', ['label' => 'Titre']),
    ]))

    ->add(new Section('home_modpack','Modpacks', [
        Field::textarea('titre_home_modpack', ['label' => 'Titre']),
        Field::text('btn_home_modpack', ['label' => 'Texte Bouton']),
        Field::text('url_home_modpack', ['label' => 'URL Bouton']),
    ]))

    ->add(new Section('home_partner','Partenaires', [
        Field::textarea('titre_home_partner', ['label' => 'Titre']),
    ]))
    ->setPriority('high')
	->setTemplate('home')
	->setTitle('Contenu de la page')
	->addTranslation('done', 'Sauvegarde réussie')
	->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
	->addTranslation('saving', 'Sauvegarde en cours')
    ->addTranslation('submit', 'Sauvegarder')
	->set();
