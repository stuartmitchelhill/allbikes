$(document).ready(function(){
  $('.bxslider').bxSlider();
});

$(function(){
         $('#show-all').click(function(){
               $('.product').show();
               $('.filter-link').removeClass('active');
               $(this).addClass('active');
        });
        $('.filter-link').click(function(){
              $('.product').hide();
              $(this).toggleClass('active');
              var selected = $(this).attr('target');
              $(selected).toggleClass('active');
              console.log(selected);
        });
});
