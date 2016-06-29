jQuery(document).ready(function($) {
  if( $('.insert-post-ads-wrapper').length > 0 ) {
    $('.insert-post-ads-wrapper').hide();
    var random = Math.floor(Math.random()*$('.insert-post-ads-wrapper').length);
    $(".insert-post-ads-wrapper").eq(random).show();
  }
});