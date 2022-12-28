@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="lg:py-12 py-8">
  <div class="container mx-auto max-w-screen-lg text-center">
    <h1 class="titre_h1">{!! $top['titre'] !!}</h1>
    <p class="text_primary">{!! $top['desc'] !!}</p>
  </div>

  <div class="container mx-auto pt-16">
    <div class="grid flex mx-auto gap-8 lg:grid-cols-12 pt-8">
      @foreach($playlist['list'] as $playlist_item )
      <div class="lg:col-span-6 xl:col-span-4">
        <a href="{{ $playlist_item['playlist_url'] }}" target="_blank">
          <img src="{{ wp_get_attachment_image_src($playlist_item['playlist_img'], 'playlist')[0] }}" loading="lazy" alt="{{ $playlist_item['title'] }}" class="rounded-3xl drop-shadow-xl transition_primary hover:scale-105">
        </a>
      </div>
      @endforeach
    </div>

    <div class="bouton text-center pt-12">
      <a href="{{ $top['url'] }}" target="_blank" class="btn_secondary">{!! $top['btn'] !!}</a>
    </div>
  </div>
</section>

@endsection

@section('javascript')

@endsection
