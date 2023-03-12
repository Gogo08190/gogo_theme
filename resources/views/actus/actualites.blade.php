@extends('layouts.main')

@section('styles')

@endsection

@section('content')

	<section id="top" class="py-16">
		<div class="container mx-auto">
			<div class="titre text-center">
				<h1 class="titre_h1 font-poppins">{!! $top['titre'] !!}</h1>
        <p class="text_primary">{!! $top['texte'] !!}</p>
			</div>
		</div>

    <div class="container mx-auto">
      <div class="last_actu pt-16 pb-32">
        <p class="titre_h2 text-white mb-8">Notre dernière actualité</p>
				@query(['post_type' => 'post', 'posts_per_page' => 1])
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="grid flex mx-auto max-w-screen-xl lg:gap-8 lg:grid-cols-12 rounded-3xl border-2 border-vert transition_primary hover:scale-105">
						<div class="lg:col-span-6">
							<img class="rounded-tl-3xl lg:rounded-bl-3xl rounded-tr-3xl lg:rounded-tr-none" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'actu_miniature'); ?>" loading="lazy" alt="<?php the_title(); ?>">
						</div>
						<div class="lg:col-span-6 my-auto p-4">
							<h3 class="text-vert font-poppins font-black xl:text-2xl lg:text-xl md:text-lg text-base">{!! Loop::title() !!}</h3>
							<div class="date">
								<span class="font-roboto text-primary/50 italic text-sm">{{ Loop::date('j/m/Y') }}</span>
							</div>
							<p class="lg:mb-8 mb-3 text_primary text-base"><?php echo wp_trim_words(get_the_excerpt(), 24); ?></p>
							<span class="font-poppins text-vert xl:text-xl lg:text-lg md:text-base text-sm font-medium">Lire la suite</span>
						</div>
					</a>
				@endquery
			</div>

			<div class="all_actu relative">
        <p class="titre_h2 text-white mb-8">Nos autres actualités</p>
				<div class="grid flex mx-auto max-w-screen-xl gap-16 lg:grid-cols-12 py-8">
					@query(['post_type' => 'post', 'offset' => 1])
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
    </div>
	</section>

@endsection

@section('javascript')

@endsection
