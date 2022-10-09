// Import Flowbite
import Flowbite from 'flowbite'

/*--------------------------------------------------------------
# SplideJS
--------------------------------------------------------------*/

import Splide from '@splidejs/splide';

var elms = document.getElementsByClassName( 'partenaires_slider' );
for ( var i = 0; i < elms.length; i++ ) {
  new Splide( elms[ i ], {
    type : 'loop',
    arrows : false,
    perPage : 1,
  }).mount();
};

var elms2 = document.getElementsByClassName( 'modpacks_slider' );
for ( var i = 0; i < elms2.length; i++ ) {
  new Splide( elms2[ i ], {
    type : 'loop',
    arrows : false,
    perPage : 4,
    gap: "2rem",
    breakpoints: {
      1230: {
        perPage: 3,
        gap    : '.7rem',
      },
      959: {
        perPage: 2,
        gap    : '.7rem',
      },
      639: {
        perPage: 1,
        gap    : '.7rem',
        pagination: true,
      },
    },
  }).mount();
};

/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/

$(document).ready(function(){
	$('.nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});
