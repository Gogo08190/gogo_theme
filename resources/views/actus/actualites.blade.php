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
							<h3 class="text-vert font-poppins font-black xl:text-3xl lg:text-2xl md:text-xl text-lg">{!! Loop::title() !!}</h3>
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
						<div class="lg:col-span-6 xl:col-span-4">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="group">
								<div class="bg-primary rounded-3xl border-2 border-vert h-full transition_primary group-hover:scale-105">
						      <img class="rounded-t-3xl" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'actu_miniature'); ?>" loading="lazy" alt="<?php the_title(); ?>">

							    <div class="p-5">
							        <h3 class="text-vert font-poppins font-black text-lg">{!! Loop::title() !!}</h3>
											<div class="date">
												<span class="font-roboto text-primary/50 italic text-sm">{{ Loop::date('j/m/Y') }}</span>
											</div>
							        <p class="mb-3 text_primary text-base"><?php echo wp_trim_words(get_the_excerpt(), 24); ?></p>
											<span class="font-poppins text-vert text-sm font-medium">Lire la suite</span>
							    </div>
								</div>
							</a>
						</div>
					@endquery
				</div>
			</div>
    </div>
	</section>

@endsection

@section('javascript')

@endsection
