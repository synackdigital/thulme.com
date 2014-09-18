$(function(){

  // Mobile nav behaviour on home page
  if ( $('#nav-toggle').css('display') != 'none' ) {

    // Nav toggle button
    $('#nav-toggle').click(function(){
      $('.navigation', '.banner').slideToggle('quick');
    });

    // Section nav
    $('section.category', 'body.home').each( function( index ) {
      $entries = $('ul', $(this));
      $entries.hide();

      $('.category-name a', $(this)).click( $.proxy( function( event ) {
        event.preventDefault();
        $('ul', $(this)).slideToggle('quick');
      }, this ));
    })
  }

  // Loop Twitter feed
  $('.widget_twitter ul').addClass('looper-inner').wrap('<div class="looper slide up" />');
  $('.widget_twitter .looper li').addClass('item');
  $('.widget_twitter .looper').looper('to', 1);
  $('.content-info .widget_twitter').show();
});

