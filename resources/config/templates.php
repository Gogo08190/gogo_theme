<?php

/**
 * Edit this file in order to configure your theme templates.
 *
 * You can define just a template slug by only defining a key.
 * For a better user experience, you can define a display title as a
 * value and as a second argument, you can specify a list of post types
 * where your template is available.
 */
return [
  'home' => [__('Accueil', THEME_TD), ['page']],
  'contact' => [__('Contact', THEME_TD), ['page']],
  'videos' => [__('Vidéos', THEME_TD), ['page']],
  'about' => [__('About', THEME_TD), ['page']],
  'config' => [__('Config', THEME_TD), ['page']],
  'actualites' => [__('Actualités', THEME_TD), ['page']],
];
