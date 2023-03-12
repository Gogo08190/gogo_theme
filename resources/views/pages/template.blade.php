@extends('layouts.main')

@section('content')
<div id="top_page" class="pt-16 pb-4">
  @loop
  <div class="container mx-auto text-center relative">
    <h1 class="max-w-4xl text-white font-jura font-semibold xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-center mx-auto">{!! Loop::title() !!}</h1>
    <hr class="w-16 h-1 bg-vert border-0 rounded-full mx-auto mt-2">
  </div>

  <div class="container mx-auto pt-16">
    <div class="text_primary">
        {!! Loop::content() !!}
    </div>
  </div>
  @endloop
</div>

@endsection
