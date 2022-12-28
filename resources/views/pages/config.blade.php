@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="lg:py-12 py-8">
  <div class="container mx-auto max-w-screen-lg text-center">
    <h1 class="titre_h1">{!! $top['titre'] !!}</h1>
    <p class="text_primary">{!! $top['desc'] !!}</p>
  </div>

  <div class="container mx-auto pt-8 max-w-screen-xl">
    <div class="grid mx-auto gap-8 lg:grid-cols-12 py-8">
      <div class="lg:col-span-6 border-4 border-vert p-8 bg-tertiaire rounded-2xl">
        <h3 class="titre_h3 mb-8">Mon PC</h3>
        @foreach($pc['list'] as $key => $pc_item )
          @foreach(get_the_terms($key, 'cat') as $cat)
            @if($cat->term_id === 3)
              <p class="flex items-center mb-4 text_secondary text-primary"><span class="mr-4 text-3xl text-primary">{!! $pc_item['pc_img'] !!}</span>{!! $pc_item['title'] !!}</p>
            @endif
          @endforeach
        @endforeach
      </div>
      <div class="lg:col-span-6 border-4 border-vert p-8 bg-tertiaire rounded-2xl">
        <h3 class="titre_h3 mb-8">Mes périphériques</h3>
        @foreach($pc['list'] as $key => $pc_item )
          @foreach(get_the_terms($key, 'cat') as $cat)
            @if($cat->term_id === 4)
              <p class="flex items-center mb-4 text_secondary text-primary"><span class="mr-4 text-3xl text-primary">{!! $pc_item['pc_img'] !!}</span>{!! $pc_item['title'] !!}</p>
            @endif
          @endforeach
        @endforeach
      </div>
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
