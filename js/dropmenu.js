jQuery(document).ready(function($) {
  $('.sm-menu > a').click(function(event) {
    if ( $('.bg').hasClass('active') )
    {
      $('.bg').removeClass('active');
    }
    else
    {
      $('.bg').addClass('active');
    }
  });
});

