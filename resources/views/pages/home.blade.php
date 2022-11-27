@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="py-8">
  <div class="container mx-auto">
    <div class="grid flex mx-auto gap-16 lg:grid-cols-12">
      <div class="lg:col-span-6 my-auto lg:order-1 order-2">
        <img class="xl:w-full lg:w-4/5 md:w-3/5 w-3/6 mx-auto" src="{{ get_template_directory_uri() }}/dist/images/portrait.png" loading="lazy" alt="{{ bloginfo('name') }}">
      </div>
      <div class="lg:col-span-6 my-auto lg:order-2 order-1">
        <h1 class="titre_h1">{!! $top['titre'] !!}</h1>
        <p class="text_primary">{!! $top['desc'] !!}</p>
      </div>
    </div>
  </div>
</section>

<section id="videos" class="py-8 bg-tertiaire">
  <div class="container mx-auto">
    <h2 class="titre_h2">{!! $lp['titre'] !!}</h2>

    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 pt-8">
      <div class="lg:col-span-6 xl:col-span-3">
        <a href="#" target="_blank">
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" loading="lazy" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
    </div>

    <div class="bouton text-center pt-8">
      <a href="{{ $lp['url'] }}" target="_blank" class="btn_primary">{!! $lp['btn'] !!}</a>
    </div>
  </div>
</section>

<section id="equipe" class="py-8">
  <div class="container mx-auto">
    <h2 class="titre_h2 text-white">{!! $team['titre'] !!}</h2>

    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 py-8">
      @foreach($teams['list'] as $teams_item )
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="w-full bg-white rounded-lg shadow-md">
          <div class="flex flex-col items-center py-10">
              <img class="mb-3 w-36 h-36 rounded-full shadow-lg transition_primary hover:rotate-45" loading="lazy" src="{{ wp_get_attachment_image_src($teams_item['teams_img'], 'teams')[0] }}" alt="{{ $teams_item['title'] }}">
              <h3 class="mb-1 xl:text-xl lg:text-lg md:text-base text-sm font-bold text-primary font-poppins">{!! $teams_item['title'] !!}</h3>
              <span class="text-sm text-primary font-poppins">{!! $teams_item['teams_fonction'] !!}</span>
              <div class="flex mt-4 space-x-3 md:mt-6">
                @if($teams_item['teams_youtube'])
                <a href="{{ $teams_item['teams_youtube'] }}" target="_blank"><i class="icon-youtube text-4xl text-primary transition_primary hover:text-youtube mx-1"></i></a>
                @endif
                @if($teams_item['teams_twitch'])
                <a href="{{ $teams_item['teams_twitch'] }}" target="_blank"><i class="icon-twitch text-4xl text-primary transition_primary hover:text-twitch mx-1"></i></a>
                @endif
                @if($teams_item['teams_twitter'])
                <a href="{{ $teams_item['teams_twitter'] }}" target="_blank"><i class="icon-twitter text-4xl text-primary transition_primary hover:text-twitter mx-1"></i></a>
                @endif
              </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="modpacks" class="bg-secondary py-8">
  <div class="container mx-auto">
    <h2 class="titre_h2 text-white">{!! $modpack['titre'] !!}</h2>

    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 py-8">
      @foreach(array_slice($modpacks['list'], 0, 4) as $modpacks_item )
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="bg-white rounded-lg shadow-md">
          <a href="{{ $modpacks_item['modpacks_url'] }}" target="_blank">
            <img class="rounded-t-lg" loading="lazy" src="{{ wp_get_attachment_image_src($modpacks_item['modpacks_img'], 'modpacks')[0] }}" alt="{{ $modpacks_item['title'] }}">
          </a>
          <div class="p-5">
            <a href="{{ $modpacks_item['modpacks_url'] }}" target="_blank">
                <h3 class="mb-2 xl:text-2xl lg:text-xl md:text-lg text-base font-bold tracking-tight text-primary">{!! $modpacks_item['title'] !!}</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
              <span class="bg-tertiaire text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">{!! $modpacks_item['modpacks_version'] !!}</span>
            </div>
            <div class="flex flex-wrap items-center text-center mt-2.5 mb-5">
              @foreach($modpacks_item['modpacks_cat'] as $cat_item)
              <span class="bg-vert text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 my-1 rounded ml-3">{!! $cat_item !!}</span>
              @endforeach
            </div>
            <a href="{{ $modpacks_item['modpacks_url'] }}" target="_blank" class="inline-flex items-center btn_primary py-1 px-2 text-sm">
                Voir le modpack
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="bouton text-center pt-8">
      <a href="{{ $modpack['url'] }}" target="_blank" class="btn_primary">{!! $modpack['btn'] !!}</a>
    </div>
  </div>
</section>

<section id="partenaires" class="py-8">
  <div class="container mx-auto">
    <h2 class="titre_h2 text-white">{!! $partner['titre'] !!}</h2>

    <div class="splide partenaires_slider py-8" role="group" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
    		<ul class="splide__list">
          @foreach($partenaires['list'] as $partenaires_item )
      			<li class="splide__slide">
              <img class="mb-3 mx-auto xl:w-96 lg:w-80 md:w-72 w-64" loading="lazy" src="{{ wp_get_attachment_image_src($partenaires_item['partenaires_img'], 'partner')[0] }}" alt="{{ $partenaires_item['title'] }}">
              <h3 class="text-vert text-center xl:text-3xl lg:text-2xl md:text-xl text-lg font-poppins">{!! $partenaires_item['title'] !!}</h3>
              <p class="text-white text-center font-poppins xl:text-xl lg:text-lg md:text-base text-sm max-w-5xl mx-auto">{!! $partenaires_item['partenaires_desc'] !!}</p>
              <div class="bouton text-center pt-8">
                <a href="{{ $partenaires_item['partenaires_url'] }}" target="_blank" class="btn_secondary">Découvrir</a>
              </div>
            </li>
          @endforeach
    		</ul>
      </div>
    </div>
  </div>
</section>

@endsection

@section('javascript')

@endsection
