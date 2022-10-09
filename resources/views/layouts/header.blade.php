<header id="page-header">
  <div class="pre_header bg-bleu py-1">
    <div class="container mx-auto">
      <div class="grid flex mx-auto gap-4 xl:grid-cols-12 text-center">
        <div class="2xl:col-span-4 xl:col-span-6 2xl:col-start-5">
          <a class="text-white font-poppins font-bold text-xl transition_primary hover:text-white/80">Postuler pour devenir Enseignant !</a>
        </div>
        <div class="2xl:col-span-4 xl:col-span-6 2xl:ml-auto mx-auto">
          <div class="items-center flex flex-row">
            {!! wp_nav_menu(['theme_location' => 'prenav', 'container' => false, 'menu_id' => 'main-prenav-dsk', 'menu_class' => 'flex text-lg flex-row lg:space-x-8 lg:mt-0', 'link_class' => 'block py-2 pr-4 pl-3 text-white font-normal lg:p-0 font-museo text-base']) !!}
            <a class="ml-4 text-white font-black font-museo text-lg">{!! get_option('th_tel') !!}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="bg-primary border-gray-200 px-8 lg:px-6 py-4">
    <div class="hidden lg:flex flex-wrap xl:flex-row flex-col justify-between items-center xl:items-end mx-auto max-w-screen-2xl">
      <a href="{{ get_home_url() }}" class="flex items-center">
          <img loading="lazy" class="mr-3 h-32" src="{{ wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] }}" alt="{{ get_bloginfo('name') }} - {{ get_bloginfo('description') }}">
      </a>
      <div class="hidden lg:flex items-center lg:order-2 pt-8 xl:pt-0">
          <a href="/contact/" class="btn_vert py-1 font-museo ">Contact</a>
      </div>

      <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 pt-8 xl:pt-0">
          {!! wp_nav_menu(['theme_location' => 'nav', 'container' => false, 'menu_id' => 'main-nav-dsk', 'menu_class' => 'flex flex-col mt-4 text-lg lg:flex-row lg:space-x-8 lg:mt-0', 'link_class' => 'block py-2 pr-4 pl-3 text-bleu font-normal lg:p-0 font-museo text-xl']) !!}
      </div>
    </div>

    <div class="lg:hidden flex flex-wrap flex-row justify-between items-center mx-auto max-w-screen-2xl">
      <a href="{{ get_home_url() }}" class="flex items-center">
          <img loading="lazy" class="mr-3 h-32" src="{{ wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] }}" alt="{{ get_bloginfo('name') }} - {{ get_bloginfo('description') }}">
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
          {!! wp_nav_menu(['theme_location' => 'nav', 'container' => false, 'menu_id' => 'main-nav-dsk', 'menu_class' => 'flex flex-col mt-4 text-lg lg:flex-row lg:space-x-8 lg:mt-0', 'link_class' => 'block py-2 pr-4 pl-3 text-bleu font-normal lg:p-0 font-museo text-xl']) !!}
          <a href="/contact/" class="btn_vert py-1 font-museo">Contact</a>
      </div>
    </div>
  </nav>
</header>
