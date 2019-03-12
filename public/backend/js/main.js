$(".op-slider").on('click',function(e){
    e.preventDefault();
    $(".panel1").show();
    $(".panel2").hide();
    $(".panel3").hide();
    $(".list-group-item").removeClass('active');
    $(this).addClass('active');
});

$(".op-video").on('click',function(e){
    e.preventDefault();
    $(".panel1").hide();
    $(".panel2").show();
    $(".panel3").hide();
    $(".list-group-item").removeClass('active');
    $(this).addClass('active');

});

$(".op-imagen").on('click',function(e){
    e.preventDefault();
    $(".panel1").hide();
    $(".panel2").hide();
    $(".panel3").show();
    $(".list-group-item").removeClass('active');
    $(this).addClass('active');
});

$('[data-toggle="tooltip"]').tooltip();

$(".btn-nuevo-item").click(function(e){
   $(".items").append(itemslider());
});

$(document).on('click',".btn-borrar-nuevo",function(e){
    e.preventDefault();
    $(this).parent().parent().remove();
});
$(".btn-crear-slider").on('click',function(e){
    e.preventDefault();
    $("#frm-items .items").html('');
    $("#canvaslider .product-name").html("Nuevo Slider");
    $(".items").append(itemslider());
});

//cambio de estado slider
$(".estado-slider").on('change',function(e){
    var estado;
    let id = $(this).data('id');
    if($(this)[0].checked){
        estado = 1;
    }else{
        estado = 0;
    }
    let token = $("#frm-items input[name='_token']").val();

   var datasend = ({'id':id,'estado':estado,'_token':token,'_method':'POST'});

    $.ajax({
        url:'/admin/sliders/estado',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                //window.location.reload();
            }
        }
    });

});

$(document).on('click',".btn-borrar-slider-edit",function(e){
    e.preventDefault();

    id = $(this).data('id');

    $("#frm-delete input[name='item_id']").val(id);
    $("#delete-modal").modal('show');

});

$(document).on('change','.urlexterna',function(e){
    if($(this)[0].checked){
        $(this).parent().parent().parent().children('.selectorurl').html('<input type="text" name="url[]" id="form3" placeholder="http://www.claro.com.pe" class="form-control" required>');
    }else{
        opsel = categorias();

        $(this).parent().parent().parent().children('.selectorurl').html(opsel);
    }

});

$(".btn-slider-editar").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $.ajax({
        url:'/admin/sliders/'+id+'/edit',
        type:'GET',
        dataType:'json',
        success:function(response){

            //open modal
            //editslider(imagen,texto,nuevaVentana,url,estado)
            $("#canvaslider .product-name").html("Editar Slider");
            $("#frm-items #slider_id").val(response[0].id);
            $("#frm-items input[name='_method']").val('PUT');
            $("#frm-items input[name='nombre']").val(response[0].title);

            $("#frm-items .items").html('');
            $.each(response[0].items,function(i,e){

                editslider(e.background,e.backmovil,e.title,e.hidetitle,e.external_url,e.url,e.description,e.state,e.id)
            })
            $("#canvaslider").modal('show');
        }
    });
});
//magazine
$("#paso1").submit(function(e){
    e.preventDefault();
    $(".step1").hide();
    $(".step2").fadeIn(350,'swing');
    $(".indicador").removeClass("active");
    $(".indicadores ul li:nth-child(2)").addClass('active');

   let categoria =  $("#paso1 #categoria").val();
   let catmes = $("#paso1 #catmes").val();
   let catyear =  $("#paso1 #catyear").val();

   $("#paso2 #categoria2").val(categoria);
   $("#paso2 #catmes2").val(catmes);
   $("#paso2 #catyear2").val(catyear);
});

$("#paso2").submit(function(e){
    e.preventDefault();
    var categoria = '';

    let catval = $("#categoria2").val();
    let catmes = $("#catmes2").val();
    let catyear = $("#catyear2").val();

    if(catval && catmes && catyear){
        $.ajax({
            url: '/admin/contents/postpdf',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend(){
                $(".capa").show();
            },
            success: function (response) {

                $(".btn-step-final").attr('href',"/"+response);
                if(response){
                    $(".capa").fadeOut(350,'swing');
                }else{
                    console.log("actividad");
                }
            },
            error: function (err) {
                console.log(err)
            }

        })

        $(".step2").hide();
    $(".step3").fadeIn(350,'swing',function(){
        //porcentaje();
        console.log(categoria);

    });

    $(".indicador").removeClass("active");
    $(".indicadores ul li:nth-child(3)").addClass('active');
    }else{
        alert("debes completar el formulario en el PASO 1 para continuar");
        return false;
    }


    
});

$("#frm-delete").submit(function(e){
    e.preventDefault();
    let id = $("#frm-delete input[name='item_id']").val();
    $.ajax({
        url: '/admin/sliders/delete',
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,

        success: function (response) {
            if(response.rpta=='ok'){
                var ct = "#item-"+id;
                $("#delete-modal").modal('hide');
                $(ct).remove();
            }
        },
        error: function (err) {
            console.log(err)
        }

    })

});

$("#frm-delete2").submit(function(e){
    e.preventDefault();
    let id = $("#frm-delete2 input[name='id']").val();
    $.ajax({
        url: '/admin/sliders/delete',
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,

        success: function (response) {
            if(response.rpta=='ok'){

                $("#delete-modal2").modal('hide');
                window.location.reload();

            }
        },
        error: function (err) {
            console.log(err)
        }

    })

});

//$('#tb-categories').DataTable();
$('#tb-usuarios').DataTable({
    "language":{
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      }
});
//$('.dataTables_length').addClass('bs-select');

//datamenu




$(".btn-add-content").on('click',function(e){
    e.preventDefault();
    //$("#document-full .ql-editor").html('<div class="box1"><a>Contenido</a><div>Inserte contenido</div></div>');
    let ph = $("#document-full .ql-editor").html();


});

$("#tipocontenido").change(function(){
    let tipo = $(this).val();
    let itoken = $("#paso2 input[name='_token']").val();

    if(tipo==1){

        let opt = '';
        $.ajax({
            url:'/admin/getvideo',
            method:'GET',
            dataType:'json',
            beforeSend:function(){},
            success:function(response){

                    opt = `<select name="video" class="form-control" required>`;
                    opt+=`<option value="">Seleccione</option>`;
                    $.each(response, function(i,e){
                        opt+=`<option value="${e.id}">${e.embed}</option>`;
                    })
                    opt += `</select>`;
                    $(".iholder").html(opt);

            }
        });

    }
    if(tipo==2){

        let opt1 = '';
        $.ajax({
            url:'/admin/getgallery',
            method:'GET',
            dataType:'json',
            beforeSend:function(){},
            success:function(response){
                console.log(response);
                    opt1 = `<select name="imagenes" class="form-control" required>`;
                    opt1+=`<option value="">Seleccione</option>`;
                    $.each(response, function(i,e){

                        opt1+=`<option value="${e.id}">${e.name}</option>`;
                    })
                    opt1 += `</select>`;


                    $(".iholder").html(opt1);
            }
        });

    }
    if(tipo==3){


        let postdoc = `<input type='file' name="pdffile" accept=".pdf" class="form-control-file" required>`;
        $(".iholder").html(postdoc);

    }

});



$('#frm-gallery').on('submit', (function (e) {
    e.preventDefault();
       $.ajax({
        url: '/admin/contents/postgallery',
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            $("#canvaimagen").modal('close');
        },
        error: function (err) {
            console.log(err)
        }
    });

  }))


$(document).ready(function(){
  $(".btn-category-borrar").on('click',function(e){
    e.preventDefault();
        var r = confirm("Esta seguro de Eliminar");
        if (r == true) {
            $(this).parent('td').children('form').submit();

        } else {
            return false;
        }

   })

   $("#frm-items").on('submit',function(e){
    e.preventDefault();

        var id = $('#slider_id').val();
        var metodo = $('#frm-items #metodo').val();


        let url ='';
        if(metodo=='POST'){
            url ='/admin/sliders/store';
        }else{
            url = '/admin/sliders/'+id;
        }
        $.ajax({
            url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
            }
        },
        error: function (err) {
            console.log(err)
        }
        })
    });




    $(".btn-slider-borrar").on('click',function(e){
        e.preventDefault();
        id = $(this).data('id');

        $("#frm-delete2 input[name='id']").val(id);
        $("#delete-modal2").modal('show');

    });


//pre-image
    $(document).on('change','.preimage',function(e){
        var output = $(this).parent().parent().children('.cdi').children().children('img');
        output.attr('src',URL.createObjectURL(e.target.files[0]));
    });

    $(document).on('change','.preimagemovil',function(e){
        var output = $(this).parent().parent().children('.cmi').children().children('img');
        output.attr('src',URL.createObjectURL(e.target.files[0]));
    });
})


//videos
$("#frm-video").on('submit',function(e){
    e.preventDefault();
    var id = $('#video_id').val();
    var metodo = $('#frm-video input[name="_method"]').val();


    let url ='';
    if(metodo=='POST'){
        url ='/admin/videos/store';
    }else{
        url = '/admin/videos/'+id;
    }
    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
            }
        },
        error: function (err) {
            console.log(err)
        }
    })

});



$(".btn-video-editar").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');

    $.ajax({
        url:'/admin/videos/'+id+'/edit',
        type:'GET',
        dataType:'json',
        success:function(response){

            $("#canvavideo .product-name").html("Editar Video");
            $("#frm-video #video_id").val(response.id);
            $("#frm-video input[name='_method']").val('PUT');
            $("#frm-video input[name='name']").val(response.name);
            $("#frm-video input[name='embed']").val(response.embed);

            if(response.destacado == 2){
                $("#frm-video #destacado").attr('checked',true);
            }
            if(response.status ==1 ){
                $("#frm-video #oculto").attr('checked',true);
            }



            $("#canvavideo").modal('show');
        }
    });

})

//cambio de estado video
$(".estado-video").on('change',function(e){
    var estado;
    let id = $(this).data('id');
    if($(this)[0].checked){
        estado = 2;
    }else{
        estado = 1;
    }
    let token = $("#frm-video input[name='_token']").val();

   var datasend = ({'id':id,'estado':estado,'_token':token,'_method':'POST'});

    $.ajax({
        url:'/admin/videos/estado',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                //window.location.reload();
            }
        }
    });

});


$(".destacado-video").on('change',function(e){
    var estado;
    let id = $(this).data('id');
    if($(this)[0].checked){
        estado = 2;
    }else{
        estado = 1;
    }
    let token = $("#frm-video input[name='_token']").val();

   var datasend = ({'id':id,'destacado':estado,'_token':token,'_method':'POST'});

    $.ajax({
        url:'/admin/videos/destacado',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                //window.location.reload();
            }
        }
    });

});
//borrar video

$(".btn-video-borrar").on('click',function(e){
    e.preventDefault();
    id = $(this).data('id');

    $("#frm-delete3 input[name='id']").val(id);
    $("#delete-modal3").modal('show');

});




$("#frm-delete3").submit(function(e){
    e.preventDefault();
    let id = $("#frm-delete3 input[name='id']").val();
    $.ajax({
        url: '/admin/videos/delete',
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,

        success: function (response) {
            if(response.rpta=='ok'){

                $("#delete-modal2").modal('hide');
                window.location.reload();

            }
        },
        error: function (err) {
            console.log(err)
        }

    })

});

var values = [];

var values2 = [];


$(".oncategory").on('change',function(e){
    if($(this).is(':checked')){
        let category = $(this).val();
        values.push($(this).val());
        $("#canvafiltro .item").hide();
        
        for(let i=0;i<values.length;i++){
           
            let valsearch = '.categoria-'+values[i];
           
            $(valsearch).show();
        }
    }else{
        values.remover($(this).val());
       
           
            let valsearch = '.categoria-'+$(this).val();
           
            $(valsearch).hide();

            if(values.length==0){
                $("#canvafiltro .item").show();
            }
        
    }
});

$(".onmes").on('change',function(e){
    if($(this).is(':checked')){
        
        values2.push($(this).val());
        $("#canvafiltro .item").hide();
        
        for(let i=0;i<values2.length;i++){
            
            let valsearch = '.'+values2[i];
           
            $(valsearch).show();
        }
    }else{
        values2.remover($(this).val());
       
           
            let valsearch = '.'+$(this).val();
           
            $(valsearch).hide();

            if(values2.length==0){
                $("#canvafiltro .item").show();
            }
        //end
    }
});



function categorias(valor){
    opsel = '<select name="url[]" class="form-control"><option value="">Seleccione</option>';

    $.each(categories,function(i,e){
        if(e.slug==valor){
            evento = 'selected';
        }else{
            evento = '';
        }
        opsel+='<option value="'+e.slug+'"'+evento+'>'+e.nombre+'</option>';
    });
    opsel+= '</select>';
    return opsel;
}




function itemslider(){

    var item = `<div class="bitem">
    <div class="col-md-11">
        <div class="row">
                <div class="col-md-5 slide-image">
                        <div class="row">
                            <div class="col-6 cdi"> 
                                <figure class="figure">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="img-fluid z-depth-1" >
                                </figure>
                            </div>
                            <div class="col-6 cmi">
                                <figure class="figure">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="img-fluid z-depth-1" >
                                </figure>
                            </div>
                            <div class="col-6 text-center">                              
                                    <button class="btn btn-success bt-desktop" type="button">Desktop</button>
                                    <input type="file"  name="imagen[]" class="preimage"  accept="image/png, image/jpeg" required style="display:none">                                                     
                            </div>
                            <div class="col-6 text-center">              
                                    <button class="btn btn-success bt-movil" type="button">Movil</button>
                                    <input type="file"  name="imagenmovil[]" class="preimagemovil"  accept="image/png, image/jpeg" style="display:none;" >
                            </div>                       
                        </div>
                </div>

                <div class="col-md-7">
                        
                        <div class="form-row mb-4 form-group">
                            <div class="md-form col-md-10 form-group">
                                    <input type="text" name="texto[]" id="form2" placeholder="Texto" class="form-control" required>

                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input type="checkbox"  name="ocultotexto[]" value="2"  class="form-check-input ocultotexto" id="f2">
                                    <label class="form-check-label fontsize-10" for="f2">Oculto</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4 form-group">
                            <div class="col-md-10 md-form selectorurl">${ categorias()}

                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input type="checkbox"  name="nuevaVentana[]" value="2"  class="form-check-input urlexterna" id="f1">
                                    <label class="form-check-label fontsize-10" for="f1">Externo</label>
                                </div>
                            </div>
                        </div>
                        <div class="md-form form-group"> 
                                    <textarea name="descripcion[]"  class="form-control"  placeholder="Descripción"></textarea>  
                        </div>

                        <div class="md-form form-group">
                            <div class="form-check">
                                    <input type="checkbox" name="estado[]" value="2" class="form-check-input" id="form4">
                                    <label class="form-check-label " for="form4">Ocultar slide</label>
                            </div>
                        </div>
                </div>

             </div>
         </div>
        <div class="col-md-1 faces">
            <a href="#" class="btn btn-danger btn-xs btn-borrar-nuevo" data-toggle="tooltip" data-placement="top" title="Eliminar slide"><i class="fas fa-minus-circle"></i></a>
        </div>

    </div><hr>`;
return item;
}

function editslider(imagen,backmovil,texto,hidetexto,nuevaVentana,valor,description,estado,itemid){

    if(imagen==null){
        imagen='';
    }
    if(backmovil==null){
        backmovil='';
    }
    if(texto==null){
        texto='';
    }
    
    if(valor==null){
        valor='';
    }
    if(description==null){
        description='';
    }
    

    if(nuevaVentana==2){
        evento = 'checked';
    }else{
        evento = '';
    }
    if(estado==2){
        status = 'checked';
    }else{
        status = '';
    }
    if(hidetexto==2){
        etexto = 'checked';
    }else{
        etexto = '';
    }


    var item = `<div class="bitem" id="item-${itemid}">
    <div class="col-md-11">
        <div class="row">
            <input type="hidden" name="item_id[]" value="${itemid}">
           
            <div class="col-md-5 slide-image">
                <div class="row">
                    <div class="col-6 cdi"> 
                        <figure class="figure">
                        <img src="/storage/${imagen}" class="img-fluid z-depth-1" >
                        </figure>
                    </div>
                    <div class="col-6 cmi">
                        <figure class="figure">
                        <img src="/storage/${backmovil}" class="img-fluid z-depth-1" >
                        </figure>
                    </div>
                    <div class="col-6 text-center">                              
                            <button class="btn btn-success bt-desktop" type="button">Desktop</button>
                            <input type="file"  name="imagen[]" class="preimage"  accept="image/png, image/jpeg"  style="display:none">                                                     
                    </div>
                    <div class="col-6 text-center">              
                            <button class="btn btn-success bt-movil" type="button">Movil</button>
                            <input type="file"  name="imagenmovil[]" class="preimagemovil"  accept="image/png, image/jpeg" style="display:none;" >
                    </div>                       
                </div>
            </div>
         <div class="col-md-7">
            <div class="form-row mb-4 form-group">
                <div class="md-form col-md-10 form-group">
                        <input type="text" name="texto[]" value="${texto}" id="form2" placeholder="Texto" class="form-control" required>

                </div>
                <div class="col-md-2">
                    <div class="form-check">
                        <input type="checkbox"  name="ocultotexto[]" value="2" ${etexto} class="form-check-input ocultotexto" id="f2">
                        <label class="form-check-label fontsize-10" for="f2">Oculto</label>
                    </div>
                </div>
            </div>

            <div class="form-row mb-4 form-group"><div class="col-md-10 md-form selectorurl">`;
            if(nuevaVentana==1){
                item+=`${ categorias(valor)}`;
            }else{
                item+=`<input type="text" name="url[]" id="form3" placeholder="http://www.claro.com.pe" class="form-control" value="${valor}" required></input>`;
            }

            item+=`</div>
                <div class="col-md-2">
                    <div class="form-check">
                        <input type="checkbox"  name="nuevaVentana[]"  value="2" ${evento} class="form-check-input urlexterna" >
                        <label class="form-check-label fontsize-10" >Externo</label>
                    </div>
                </div>
            </div>`;

            item+=`<div class="md-form form-group"> 
                     <textarea name="descripcion[]"  class="form-control"  placeholder="Descripción">${description}</textarea>  
                </div>
                <div class="md-form form-group">
                    <div class="form-check">
                            <input type="checkbox" name="estado[]" ${status}  value="2" class="form-check-input" >
                            <label class="form-check-label" >Ocultar</label>
                    </div>
                </div>
        </div>
        </div>
        </div>
        <div class="col-md-1 faces">
        <a href="#" class="btn btn-danger btn-xs btn-borrar-slider-edit" data-id="${itemid}" data-toggle="tooltip" data-placement="top" title="Eliminar slide"><i class="fas fa-minus-circle"></i></a>
        </div>
    </div><hr>`;


$("#frm-items .items").append(item);
}


Array.prototype.remover = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};


$(document).on('click',".bt-desktop",function(e){
    e.preventDefault();
   let cont =  $(this).parent().children('input').trigger('click');
  
});

$(document).on('click',".bt-movil",function(e){
    e.preventDefault();
   let cont =  $(this).parent().children('input').trigger('click');
   
});



tinymce.init({
    menubar: false,
    selector: '#editor-container',
    //skin: 'voyager',
    min_height: 300,
    resize: 'vertical',

    plugins: 'a11ychecker advcode formatpainter linkchecker media mediaembed pageembed permanentpen powerpaste tinycomments tinydrive tinymcespellchecker',
    toolbar: 'a11ycheck code formatpainter insertfile pageembed permanentpen tinycomments',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    
    extended_valid_elements: 'span,input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    
    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
    convert_urls: false,
    image_caption: true,
    image_title: true,
    verify_html: false,
    paste_word_valid_elements: "b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
    content_css: '/css/main.css',
    init_instance_callback: function(editor) {
        if (typeof tinymce_init_callback !== "undefined") {
            tinymce_init_callback(editor);
        }
    },
    setup: function(editor) {
        editor.on('init', function(e) {
            console.log('Editor was initialized.');
        });
    }
});

$("#step1").on('click',function(){
   $(".step2").hide();
   $(".step1").show();
   $(".indicador").removeClass('active');
   $(this).addClass('active');
});
$("#step2").on('click',function(){
    $(".step1").hide();
    $(".step2").show();
    $(".indicador").removeClass('active');
   $(this).addClass('active');
 });

$(".btn-ind").hover(
    function(){
        $(this).css('cursor','pointer');
    },
    function(){
        $(this).css('cursor','default');
    }
);

$(".btn-step-reinicio").on('click',function(e){
    e.preventDefault();
    $(".step3").hide();
    $(".step2").hide();
    $(".step1").show();
    $(".indicador").removeClass('active');
   $(".indicador:first-child").addClass('active');

});

$(document).on('change','.preimage',function(e){
    var output = $(this).parent().children('.preview').children('img');
    console.log(output);
    output.attr('src',URL.createObjectURL(e.target.files[0]));
})



$(document).on('keyup','.sensorkey',function(e){
    let key = $(this).val();
    remplaza(key);
});

$(document).on('focusout','.sensorkey',function(e){
    let cadena = $(this).val();
    remplaza(cadena);
});

function remplaza(cadena){
    let str = cadena.replace(/\s+/g, '-').toLowerCase();
    $(".islug").val(str);
};

$(".btn-category-delete").on("click", function(){
    let id = $(this).data('id');
    $("#fr-delete-category #id").val(id);
    $("#fr-delete-category").attr('action','/admin/categories/'+id);
});

//btn-file-delete
//fr-delete-file

$(".btn-file-delete").on("click", function(){
    let id = $(this).data('id');
    $("#fr-delete-file #id").val(id);
    $("#fr-delete-file").attr('action','/admin/historials/'+id);
});
  

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});