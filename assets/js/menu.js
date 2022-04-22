$(document).ready(function(){

  $('.menu-item-toggle').click(function(){

    if($(this).hasClass('active'))
    {
      $(this).removeClass('active')
    }
    else
    {
      $(this).addClass('active')
    }

  });

});
