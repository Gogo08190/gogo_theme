@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="lg:py-12 py-8">
  <div class="container mx-auto max-w-screen-lg text-center">
    <h1 class="titre_h1">{!! $top['titre'] !!}</h1>
    <p class="text_primary">{!! $top['desc'] !!}</p>
  </div>

  <div class="container mx-auto text-center pt-8">
    <h2 class="titre_h3 text-vert pb-8">{!! $top['titre2'] !!}</h2>
    <a href="{!! get_option('th_youtube') !!}" target="_blank"><i class="icon-youtube xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-youtube mx-2"></i></a>
    <a href="{!! get_option('th_twitch') !!}" target="_blank"><i class="icon-twitch xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-twitch mx-2"></i></a>
    <a href="{!! get_option('th_discord') !!}" target="_blank"><i class="icon-discord xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-discord mx-2"></i></a>
    <a href="{!! get_option('th_twitter') !!}" target="_blank"><i class="icon-twitter xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-twitter mx-2"></i></a>
    <a href="{!! get_option('th_github') !!}" target="_blank"><i class="icon-github xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-github mx-2"></i></a>
  </div>
</section>

<section id="faq" class="py-16 bg-tertiaire">
  <div class="container mx-auto max-w-screen-lg font-poppins">
    <h2 class="titre_h2">{!! $faqs['titre'] !!}</h2>

    <div class="pt-8">
      @foreach($faq['list'] as $faq_item )
      <button class="accordion titre_h3">{!! $faq_item['faq_question'] !!}</button>
      <div class="panel xl:text-base lg:text-sm text-xs">
        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      @endforeach
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

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>

@endsection
