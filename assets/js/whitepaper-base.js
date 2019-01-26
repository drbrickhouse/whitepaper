jQuery(function($) {
  // Make Bootstrap Menu Dropdowns Work on Mobile
  if($(window).width() < 767) {
     $( ".dropdown-toggle" ).after( '<i class="fas fa-plus text-right" data-toggle="dropdown"></i>' );
  }
});
