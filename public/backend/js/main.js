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



$(".btn-nuevo-item").click(function(e){
    let item = `<div class="bitem">
    <div class="col-md-4 slide-image">
            <figure class="figure">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
                    alt="..." >
                </figure>
            <div class="file-field">

                    <div class="d-flex justify-content-center">
                    <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Imagen</span>
                        <input type="file" name="imagen[]">
                    </div>
                    </div>
            </div>

    </div>
    <div class="col-md-7">

        <div class="md-form form-group">
                <input type="text" name="texto[]" id="form2" class="form-control">
                <label for="form2">texto</label>
        </div>

        <div class="form-row mb-4 form-group">
            <div class="col-md-10 md-form">
                <input type="text" name="url[]" id="form3" class="form-control">
                <label for="form3">Url</label>
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input type="checkbox"  name="nuevaVentana[]" class="form-check-input" id="f1">
                    <label class="form-check-label" for="f1">Externo</label>
                </div>
            </div>
        </div>
        <div class="md-form form-group">
            <div class="form-check">
                    <input type="checkbox" name="estado[]" class="form-check-input" id="form4">
                    <label class="form-check-label" for="form4">Ocultar</label>
            </div>

        </div>
    </div>
</div>`;

   $(".items").append(item);
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
            categoria = response;
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
        $(".btn-step-final").attr('href',"/"+categoria);
    });

    $(".indicador").removeClass("active");
    $(".indicadores ul li:nth-child(3)").addClass('active');
});

//$('#tb-categories').DataTable();
//$('#tb-usuarios').DataTable();
//$('.dataTables_length').addClass('bs-select');

//datamenu




$(".btn-add-content").on('click',function(e){
    e.preventDefault();
    //$("#document-full .ql-editor").html('<div class="box1"><a>Contenido</a><div>Inserte contenido</div></div>');
    let ph = $("#document-full .ql-editor").html();
    console.log(ph);

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

})
function porcentaje(){

         //
    let i =1;
   var timerid = setInterval(function() {
        if(i<100){

            $(".contador").css('width',`${i}%`);
            i++;
        }else{
            clearInterval(timerid);
        }


    }, 60 * 1);


}
