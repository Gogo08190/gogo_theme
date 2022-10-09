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
        <h1 class="text-white text-4xl font-poppins"><span class="text-5xl font-bold text-vert uppercase">Gogo08</span><br> YouTubeur / Streameur Minecraft</h1>
        <p class="text-white text-xl">Bonjour à tous, connu sous le pseudo de <strong class="text-vert">Gogo08</strong>, je m'appelle en réalité Hugo.<br>
        Passionné par les jeux vidéos et le développement Web, je vous partage mon expérience sur Minecraft Moddé en vidéos et en live sur YouTube et Twitch.</p>
        <p class="text-white text-xl pt-4">Par le biais de mes vidéos, je partage mes connaissances pour vous améliorer en moddé, avec différents Let's Play et depuis peu la création de mes propres modpacks, je vous montre comment un mod fonctionne et comment évoluer dans le moddé !</p>
      </div>
    </div>
  </div>
</section>

<section id="videos" class="py-8 bg-tertiaire">
  <div class="container mx-auto">
    <h2 class="text-primary text-center font-bold text-4xl font-poppins">Retrouvez mes différents Let's Play</h2>

    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 pt-8">
      <div class="lg:col-span-6 xl:col-span-3">
        <a href="#" target="_blank">
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
      <div class="lg:col-span-6 xl:col-span-3">
        <a href="#" target="_blank">
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
      <div class="lg:col-span-6 xl:col-span-3">
        <a href="#" target="_blank">
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
      <div class="lg:col-span-6 xl:col-span-3">
        <a href="#" target="_blank">
          <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
    </div>

    <div class="bouton text-center pt-8">
      <a href="/contact/" class="btn_primary">Voir tous les Let's Play</a>
    </div>
  </div>
</section>

<section id="equipe" class="py-8">
  <div class="container mx-auto">
    <h2 class="text-white text-center font-bold text-4xl font-poppins"><span class="text-secondary">La Team</span> qui m'accompagne</h2>

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
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="w-full bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex flex-col items-center py-10">
              <img class="mb-3 w-36 h-36 rounded-full shadow-lg" src="{{ get_template_directory_uri() }}/dist/images/logo.jpg" alt="Bonnie image"/>
              <h5 class="mb-1 text-xl font-bold text-primary font-poppins">Noli</h5>
              <span class="text-sm text-primary font-poppins">Super-Modérateur</span>
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
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="w-full bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex flex-col items-center py-10">
              <img class="mb-3 w-36 h-36 rounded-full shadow-lg" src="{{ get_template_directory_uri() }}/dist/images/logo.jpg" alt="Bonnie image"/>
              <h5 class="mb-1 text-xl font-bold text-primary font-poppins">Koepss</h5>
              <span class="text-sm text-primary font-poppins">Super-Modérateur</span>
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
      <div class="lg:col-span-6 xl:col-span-3">
        <div class="w-full bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex flex-col items-center py-10">
              <img class="mb-3 w-36 h-36 rounded-full shadow-lg" src="{{ get_template_directory_uri() }}/dist/images/logo.jpg" alt="Bonnie image"/>
              <h5 class="mb-1 text-xl font-bold text-primary font-poppins">Mahat</h5>
              <span class="text-sm text-primary font-poppins">Modérateur</span>
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
    <h2 class="text-white text-center font-bold text-4xl font-poppins">Modpacks de la <span class="text-tertiaire">Team Chroma</span></h2>

    <div class="splide modpacks_slider py-8" role="group" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
    		<ul class="splide__list">
    			<li class="splide__slide">
            <a href="#" target="_blank">
              <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
            </a>
          </li>
    			<li class="splide__slide">
            <a href="#" target="_blank">
              <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
            </a>
          </li>
    			<li class="splide__slide">
            <a href="#" target="_blank">
              <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
            </a>
          </li>
    			<li class="splide__slide">
            <a href="#" target="_blank">
              <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
            </a>
          </li>
    			<li class="splide__slide">
            <a href="#" target="_blank">
              <img src="{{ get_template_directory_uri() }}/dist/images/Ep1.jpg" alt="{{ bloginfo('name') }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
            </a>
          </li>
    		</ul>
      </div>
    </div>
  </div>
</section>

<section id="partenaires" class="py-8">
  <div class="container mx-auto">
    <h2 class="text-white text-center font-bold text-4xl font-poppins">Mes <span class="text-vert">partenaires</span></h2>

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
