jQuery(function($) {
  // Make Bootstrap Menu Dropdowns Work on Mobile
  if($(window).width() < 767) {
    $( '.dropdown-toggle' ).after( '<i class="fas fa-plus whitepaper-toggle" data-toggle="dropdown"></i>' );
  } else {
    $( '.whitepaper-toggle' ).remove();
  }
});
