// m_horizontalのON/OFF
jQuery(window).on('load resize', function ($) {
	const smWindowSize = 768;
	if (window.innerWidth <=  smWindowSize){
		jQuery(".entries").removeClass("m_horizontal");
	}else {
		jQuery(".entries").addClass("m_horizontal");
 }
});