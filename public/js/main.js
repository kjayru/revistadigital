var nav = document.getElementById('main-nav');
var menu = document.getElementById('menu');
menu.addEventListener('click', function () {
  'use strict';
  nav.classList.toggle('mostrar');
});


$(document).ready(function(){
    $('.modal').each(function(){
      var src = $(this).find('iframe').attr('src');

     $(this).on('click', function(){

      $(this).find('iframe').attr('src', '');
      $(this).find('iframe').attr('src', src);

     });
    });
});

