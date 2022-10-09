<?php
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

$page = Page::make('page-theme-footer', 'Footer')
      ->setIcon('dashicons-admin-links')
      ->setPosition(300)
      ->set();

$page->addSections([
  new Section('section-slug-footer', 'Informations'),
]);

$page->addSettings([
    'section-slug-footer' => [
      Field::text('instagram', ['label' => 'Instagram']),
      Field::text('github', ['label' => 'Github']),
      Field::text('twitter', ['label' => 'Twitter']),
      Field::text('youtube', ['label' => 'YouTube']),
      Field::text('twitch', ['label' => 'Twitch']),
    ]
]);
