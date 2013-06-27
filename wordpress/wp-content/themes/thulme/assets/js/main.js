$(function(){
  console.log('Hello world');

  // Navigation toggle
  $('#nav-toggle').click(function(){
    $('.navigation, .description', '.banner').slideToggle('quick');
  });
});