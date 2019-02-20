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

/*
$(document).on('click','a',function(e){

 let label = $(this).data('label');
  if(label){
    e.preventDefault();
    let token = $("#fr-front input[name='_token']").val();
    let datasend = ({'_token':token,'label':label,'_method':'POST'});
    let url = $(this).attr('href');
     
      $.ajax({
        url:'/reportes/store',
        type:'POST',
        dataType:'json',    
        data:datasend,
        success:function(response){
          
          window.location.href=url;
          
        }
      });
  }else{
    return true;
  }
 

});*/