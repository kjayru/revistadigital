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

                editslider(e.background,e.title,e.external_url,e.url,e.state,e.id)
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
//$('#tb-usuarios').DataTable();
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



    $(document).on('change','.preimage',function(e){
        var output = $(this).parent().parent().children('figure').children('img');
        console.log(e.target.files[0])

        output.attr('src',URL.createObjectURL(e.target.files[0]));
    })
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

/*function porcentaje(){
    let i =1;
   var timerid = setInterval(function() {
        if(i<100){
            $(".contador").css('width',`${i}%`);
            i++;
        }else{
            clearInterval(timerid);
        }
    }, 60 * 1);
}*/

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




$(".oncategory").on('change',function(e){
    if($(this).is(':checked')){
        let category = $(this).val();
        values.push($(this).val());
        $("#canvafiltro .item").hide();
        
        for(let i=0;i<values.length;i++){
            console.log(values[i]);
            let valsearch = '.categoria-'+values[i];
           
            $(valsearch).show();
        }
    }else{
        values.remover($(this).val());
       
           
            let valsearch = '.categoria-'+$(this).val();
           
            $(valsearch).hide();
        
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
        opsel+='<option value="'+e.slug+'" '+evento+'>'+e.nombre+'</option>';
    });
    opsel+= '</select>';
    return opsel;
}




function itemslider(){

    var item = `<div class="bitem">
    <div class="col-md-11">
        <div class="row">
                <div class="col-md-4 slide-image">
                        <figure class="figure">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
                                alt="..." >
                        </figure>
                        <div class="file-field">
                                    <input type="file"  name="imagen[]" class="form-control preimage" placeholder="Imagen" required>
                        </div>

                </div>
                <div class="col-md-7">

                        <div class="md-form form-group">
                                <input type="text" name="texto[]" id="form2" placeholder="Texto" class="form-control" required>

                        </div>

                        <div class="form-row mb-4 form-group">
                            <div class="col-md-10 md-form selectorurl">${ categorias()}

                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input type="checkbox"  name="nuevaVentana[]" value="2"  class="form-check-input urlexterna" id="f1">
                                    <label class="form-check-label" for="f1">Externo</label>
                                </div>
                            </div>
                        </div>
                        <div class="md-form form-group">
                            <div class="form-check">
                                    <input type="checkbox" name="estado[]" value="2" class="form-check-input" id="form4">
                                    <label class="form-check-label" for="form4">Ocultar</label>
                            </div>

                        </div>
                    </div>
             </div>
         </div>
        <div class="col-md-1">
            <a href="#" class="btn btn-danger btn-xs btn-borrar-nuevo" data-toggle="tooltip" data-placement="top" title="Eliminar slide"><i class="fas fa-minus-circle"></i></a>
        </div>

    </div>`;
return item;
}

function editslider(imagen,texto,nuevaVentana,valor,estado,itemid){
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
    var item = `<div class="bitem" id="item-${itemid}">
    <div class="col-md-11">
        <div class="row">
    <input type="hidden" name="item_id[]" value="${itemid}">
    <div class="col-md-4 slide-image">
            <figure class="figure">
                    <img src="/storage/${imagen}" class="figure-img img-fluid z-depth-1"
                    alt="..." >
            </figure>
            <div class="file-field">
                        <input type="file"  name="imagen[]"  class="form-control preimage"  placeholder="Imagen">
            </div>

    </div>
    <div class="col-md-7">

            <div class="md-form form-group">
                    <input type="text" name="texto[]" value="${texto}" id="form2" placeholder="Texto" class="form-control" required>

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
                        <label class="form-check-label" >Externo</label>
                    </div>
                </div>
            </div>`;

            item+=`<div class="md-form form-group">
                <div class="form-check">
                        <input type="checkbox" name="estado[]" ${status}  value="2" class="form-check-input" >
                        <label class="form-check-label" >Ocultar</label>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="col-md-1">
        <a href="#" class="btn btn-danger btn-xs btn-borrar-slider-edit" data-id="${itemid}" data-toggle="tooltip" data-placement="top" title="Eliminar slide"><i class="fas fa-minus-circle"></i></a>
        </div>
    </div>`;


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