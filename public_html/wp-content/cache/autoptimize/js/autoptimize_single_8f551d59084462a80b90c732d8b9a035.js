const CHANGE_WIDTH=768;const ADD_CLASS="m_horizontal"
jQuery(window).on('load resize',function($){var i_width=$(window).outerWidth(true);if(i_width>CHANGE_WIDTH){if(!$('.entries').hasClass(ADD_CLASS)){$('.entries').eq(0).addClass(ADD_CLASS);}}else{if($('.entries').hasClass(ADD_CLASS)){$('.entries').eq(0).removeClass(ADD_CLASS);}}});jQuery(window).on('scroll',function($){if(100<jQuery(this).scrollTop()){jQuery('.floating').show();}else{jQuery('.floating').hide();}});jQuery('a[href^="#"]').click(function(){var header=0;var speed=300;var id=jQuery(this).attr('href');var target=jQuery('#'==id?'html':id);var position=jQuery(target).offset().top-header;if(0>position){position=0;}
jQuery('html, body').animate({scrollTop:position},speed);return false;});