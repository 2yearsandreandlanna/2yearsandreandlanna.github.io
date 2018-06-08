$(document).ready(function(){
  $('.title').click(function(){
    $('.container').addClass('open');
    setTimeout("location.href = 'game.html';",5000);
  });
  
  
  $('.close').click(function(){
    $('.container').removeClass('open');
  });
});