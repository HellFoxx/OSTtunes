$(document).ready(function(){

	var $bg_blue = $('.bg-blue');
	var bg_state = null;

  $(window).scroll(function() {
		if ($(this).scrollTop() > 50) {
			if (bg_state != 'blue') {
				bg_state = 'blue';
				$bg_blue.stop().fadeIn(300);
			}
		} else {
			if (bg_state != 'orange') {
				bg_state = 'orange';
				$bg_blue.stop().fadeOut(300);
			}
		}
  });
    
});