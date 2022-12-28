@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="py-8">
  <div class="container mx-auto text-center">
    <h1 class="titre_h1">{!! $top['titre'] !!}</h1>
    <p class="text_primary">{!! $top['desc'] !!}</p>
  </div>
  <div class="container mx-auto text-center pt-16">
    <h2 class="titre_h2 text-white">{!! $top['titre2'] !!}</h2>
    <div class="social">
      <div class="container mx-auto text-center pt-8">
        <a href="{!! get_option('th_youtube') !!}" target="_blank"><i class="icon-youtube xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-youtube mx-2"></i></a>
        <a href="{!! get_option('th_twitch') !!}" target="_blank"><i class="icon-twitch xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-twitch mx-2"></i></a>
        <a href="{!! get_option('th_discord') !!}" target="_blank"><i class="icon-discord xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-discord mx-2"></i></a>
        <a href="{!! get_option('th_twitter') !!}" target="_blank"><i class="icon-twitter xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-twitter mx-2"></i></a>
        <a href="{!! get_option('th_github') !!}" target="_blank"><i class="icon-github xl:text-4xl lg:text-3xl md:text-2xl text-xl text-white transition_primary hover:text-github mx-2"></i></a>
      </div>
    </div>
  </div>

  <div class="container mx-auto form font-poppins pt-16">
    {!! do_shortcode($top['shortcode']) !!}
  </div>
</section>

@endsection

@section('javascript')

@endsection
