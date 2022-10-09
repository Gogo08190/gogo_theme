<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Themosis\Core\ThemeManager;
use Themosis\Support\Facades\Asset;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register()
    {
        /** @var ThemeManager $theme */
        $theme = $this->app->make('wp.theme');

        /* CSS */
        Asset::add('theme_tailwind_css', 'css/app.min.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('theme_custom_css', 'css/style.min.css', [], $theme->getHeader('version'))->to('front');

        /* JS */
        Asset::add('theme_jquery_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', [], $theme->getHeader('version'))->to('front');
        Asset::add('theme_jquery_migrate_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js', [], $theme->getHeader('version'))->to('front');
        Asset::add('theme_custom_js', 'js/theme.min.js', [], $theme->getHeader('version'))->to('front');
    }
}
