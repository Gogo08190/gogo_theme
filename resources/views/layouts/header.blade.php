<header id="page-header">
  <nav class="bg-primary px-8 lg:px-6 py-4">
    <div class="hidden lg:flex flex-wrap xl:flex-row flex-col justify-between items-center mx-auto max-w-screen-2xl">
      <a href="{{ get_home_url() }}" class="flex items-center">
          <img loading="lazy" class="mr-3 h-32 rounded-full outline outline-vert transition_primary hover:rotate-45" src="{{ wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] }}" alt="{{ get_bloginfo('name') }} - {{ get_bloginfo('description') }}">
      </a>
      <div class="hidden lg:flex items-center lg:order-2 pt-8 xl:pt-0">
          <a href="{!! get_option('th_youtube') !!}" target="_blank" class="btn_youtube py-1 mx-2">Youtube</a>
          <a href="{!! get_option('th_twitch') !!}" target="_blank" class="btn_twitch py-1 mx-2">Twitch</a>
          <a href="{!! get_option('th_discord') !!}" target="_blank" class="btn_discord py-1 mx-2">Discord</a>
      </div>

      <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 pt-8 xl:pt-0">
          {!! wp_nav_menu(['theme_location' => 'nav', 'container' => false, 'menu_id' => 'main-nav-dsk', 'menu_class' => 'flex flex-col mt-4 text-lg lg:flex-row lg:space-x-8 lg:mt-0', 'link_class' => 'block py-2 pr-4 pl-3 text-white font-normal lg:p-0 font-poppins text-xl']) !!}
      </div>
    </div>

    <div class="lg:hidden flex flex-wrap flex-row justify-between items-center mx-auto max-w-screen-2xl">
      <a href="{{ get_home_url() }}" class="flex items-center">
          <img loading="lazy" class="mr-3 h-32 rounded-full transition_primary hover:rotate-45" src="{{ wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] }}" alt="{{ get_bloginfo('name') }} - {{ get_bloginfo('description') }}">
      </a>
      <div class="lg:hidden flex items-center lg:order-2">
        <button data-collapse-toggle="mobile-menu" type="button" class="contents items-center p-2 ml-1 text-sm text-primary rounded-lg lg:hidden hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-transparent" aria-controls="mobile-menu-2" aria-expanded="false">
          <div class="nav-icon">
            <span class="block w-6 h-1 rounded-full"></span>
            <span class="block w-10 h-1 rounded-full"></span>
            <span class="block w-10 h-1 rounded-full"></span>
            <span class="block w-8 h-1 rounded-full"></span>
          </div>
        </button>
      </div>

      <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 text-center" id="mobile-menu">
          {!! wp_nav_menu(['theme_location' => 'nav', 'container' => false, 'menu_id' => 'main-nav-dsk', 'menu_class' => 'flex flex-col mt-4 text-lg lg:flex-row lg:space-x-8 lg:mt-0', 'link_class' => 'block py-2 pr-4 pl-3 text-white font-normal lg:p-0 font-poppins text-xl']) !!}
          <div class="flex flex-col items-center">
            <a href="/contact/" class="btn_youtube inline-block py-1 my-2">Youtube</a>
            <a href="/contact/" class="btn_twitch py-1 my-2">Twitch</a>
            <a href="/contact/" class="btn_discord py-1 my-2">Discord</a>
          </div>
      </div>
    </div>
  </nav>
</header>
