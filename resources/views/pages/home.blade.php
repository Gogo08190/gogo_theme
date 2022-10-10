@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="py-8">
  <div class="container mx-auto">
    <div class="grid flex mx-auto gap-16 lg:grid-cols-12">
      <div class="lg:col-span-6 my-auto">
        <img src="{{ get_template_directory_uri() }}/dist/images/portrait.png" alt="{{ bloginfo('name') }}">
      </div>
      <div class="lg:col-span-6 my-auto">
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
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
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
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="w-full bg-white rounded-lg shadow-md">
          <div class="flex flex-col items-center py-10">
              <img class="mb-3 w-36 h-36 rounded-full shadow-lg" src="{{ get_template_directory_uri() }}/dist/images/logo.jpg" alt="Bonnie image"/>
              <h5 class="mb-1 text-xl font-bold text-primary font-poppins">Gogo08</h5>
              <span class="text-sm text-primary font-poppins">Youtubeur</span>
              <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#" target="_blank"><i class="icon-youtube text-4xl text-primary transition_primary hover:text-youtube mx-1"></i></a>
                <a href="#" target="_blank"><i class="icon-twitch text-4xl text-primary transition_primary hover:text-twitch mx-1"></i></a>
                <a href="#" target="_blank"><i class="icon-discord text-4xl text-primary transition_primary hover:text-discord mx-1"></i></a>
                <a href="#" target="_blank"><i class="icon-twitter text-4xl text-primary transition_primary hover:text-twitter mx-1"></i></a>
                <a href="#" target="_blank"><i class="icon-github text-4xl text-primary transition_primary hover:text-github mx-1"></i></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="modpacks" class="bg-secondary py-8">
  <div class="container mx-auto">
    <h2 class="titre_h2 text-white">{!! $modpack['titre'] !!}</h2>

    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 py-8">
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="bg-white rounded-lg shadow-md">
          <a href="#">
            <img class="rounded-t-lg" src="{{ get_template_directory_uri() }}/dist/images/chromapackx1024.png" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-primary">Chroma Technology</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
              <span class="bg-tertiaire text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">1.12.2</span>
            </div>
            <div class="flex flex-wrap items-center text-center mt-2.5 mb-5">
              <span class="bg-vert text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 my-1 rounded ml-3">Quest</span>
              <span class="bg-vert text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 my-1 rounded ml-3">Technologie</span>
              <span class="bg-vert text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 my-1 rounded ml-3">Magie</span>
              <span class="bg-vert text-primary text-xs font-semibold mr-2 px-2.5 py-0.5 my-1 rounded ml-3">Exploration</span>
            </div>
            <a href="#" class="inline-flex items-center btn_primary py-1 px-2 text-sm">
                Voir le modpack
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
          </div>
        </div>
      </div>
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
    			<li class="splide__slide">
            <img class="mb-3 mx-auto w-96" src="{{ get_template_directory_uri() }}/dist/images/bisecthosting.png" alt="BisectHosting"/>
            <h3 class="text-vert text-center text-3xl font-poppins">BisectHosting</h3>
            <p class="text-white text-center font-poppins text-xl max-w-5xl mx-auto">BisectHosting propose un hébergement de serveur simple, rapide et de haute qualité avec plus d'une douzaine d'emplacements disponibles à travers le monde, garantissant une faible latence. Après votre achat, le serveur est déjà configuré et prêt à être utilisé.<br><br>
            Utilisez le code "<strong class="text-vert">CHROMATECH</strong>"pour obtenir 25% de réduction sur votre premier mois en tant que nouveau client pour l'un de leurs serveurs de jeux.</p>
            <div class="bouton text-center pt-8">
              <a href="/contact/" target="_blank" class="btn_secondary">Découvrir</a>
            </div>
          </li>
    			<li class="splide__slide">
            <img class="mb-3 mx-auto w-96" src="{{ get_template_directory_uri() }}/dist/images/bisecthosting.png" alt="BisectHosting"/>
            <h3 class="text-vert text-center text-3xl font-poppins">BisectHosting</h3>
            <p class="text-white text-center font-poppins text-xl max-w-5xl mx-auto">BisectHosting propose un hébergement de serveur simple, rapide et de haute qualité avec plus d'une douzaine d'emplacements disponibles à travers le monde, garantissant une faible latence. Après votre achat, le serveur est déjà configuré et prêt à être utilisé.<br><br>
            Utilisez le code "<strong class="text-vert">CHROMATECH</strong>"pour obtenir 25% de réduction sur votre premier mois en tant que nouveau client pour l'un de leurs serveurs de jeux.</p>
            <div class="bouton text-center pt-8 pb-4">
              <a href="/contact/" target="_blank" class="btn_secondary">Découvrir</a>
            </div>
          </li>
    		</ul>
      </div>
    </div>
  </div>
</section>

@endsection

@section('javascript')

@endsection
