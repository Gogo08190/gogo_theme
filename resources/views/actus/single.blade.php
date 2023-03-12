@extends('layouts.main')

@section('styles')

@endsection

@section('content')

<section id="top" class="relative py-16">
  <img class="w-full max-h-[32rem] object-cover" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'actu_miniature'); ?>" loading="lazy" alt="<?php the_title(); ?>">
  <div class="container max-w-screen-xl mx-auto pt-8">
    <h1 class="max-w-5xl text-white font-poppins font-black xl:text-4xl lg:text-3xl md:text-2xl text-xl mx-auto text-center">{!! Loop::title() !!}</h1>
    <hr class="w-16 h-1 bg-vert border-0 rounded-full mx-auto my-2">
    <p class="text-white font-poppins font-medium xl:text-base lg:text-sm text-xs uppercase text-center mt-8">
      <?php
        $parentcategory = "";
        foreach ((get_the_category()) as $category) {
          if ($category->category_parent == 0) {
            $parentcategory .= "$category->name";
          }
        }
       ?>
      <?php echo $parentcategory ?> | {{ Loop::date('j F Y') }}
    </p>
  </div>
</section>

<div id="post_content" class="font-popins text-bleu xl:text-base lg:text-sm text-xs">
  @loop
    <div class="container mx-auto max-w-screen-xl text_primary">
      {!!Loop::content()!!}
    </div>
  @endloop
</div>

<div id="last_actus" class="py-8">
  <div class="container mx-auto">
    <div class="titre">
      <p class="titre_h3 text-white">Découvrez nos dernières actualités</p>
      <hr class="w-1 h-8 bg-rouge border-0 rounded-full mx-auto my-6">
    </div>

    <div class="grid mx-auto xl:gap-24 gap-12 py-12 md:grid-cols-12 max-w-screen-xl">
      @query(['post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => [get_the_ID()]])
      <div class="lg:col-span-4 col-span-6 max-w-sm rounded-3xl border-2 border-vert shadow-md hover:scale-105 mx-auto transition_primary">

        <div>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img class="rounded-t-3xl" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'actu_miniature2'); ?>" loading="lazy" alt="<?php the_title(); ?>">
          </a>
          <div class="p-5">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <p class="text-white font-poppins font-medium text-xs uppercase">
                <?php
                  $parentcategory = "";
                  foreach ((get_the_category()) as $category) {
                    if ($category->category_parent == 0) {
                      $parentcategory .= "$category->name";
                    }
                  }
                 ?>
                <?php echo $parentcategory ?> | {{ Loop::date('j F Y') }}
              </p>
              <h3 class="text-vert font-poppins font-black text-lg">{!! Loop::title() !!}</h3>
              <hr class="w-8 h-1 bg-vert border-0 rounded-full my-4">
              <p class="font-popins text-white lg:text-sm text-xs pb-4"><?php echo wp_trim_words(get_the_excerpt(), 16); ?>...</p>
              <a class="font-popins text-vert lg:text-sm text-xs" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">> Lire la suite de l'article</a>
            </a>
          </div>
        </div>

      </div>
      @endquery
    </div>
  </div>

  <div class="bouton text-center py-8">
    <a href="/actualites/" class="btn_secondary">Toutes nos actualités</a>
  </div>
</div>

@endsection

@section('javascript')

@endsection
