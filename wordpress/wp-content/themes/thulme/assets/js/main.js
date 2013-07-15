$(function(){
  console.log('Hello world');

  // Navigation toggle
  $('#nav-toggle').click(function(){
    $('.navigation', '.banner').slideToggle('quick');
  });

  // Loop Twitter feed
  $('.widget_twitter ul').addClass('looper-inner').wrap('<div class="looper slide up" />');
  $('.widget_twitter .looper li').addClass('item');
  $('.widget_twitter .looper').looper('to', 1);
  $('.content-info .widget_twitter').show();
});

function INCallback() {
  IN.Tags.Share.getCount("http://thulme.com", function(count){
    $('.content-info .social-buttons .btn-social-linkedin .btn-tip').html(count);
  });
}
