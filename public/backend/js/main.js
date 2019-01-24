
    $('#tb-categories').DataTable();
    $('#tb-usuarios').DataTable();
    $('.dataTables_length').addClass('bs-select');


    $('#tb-usuarios_wrapper').find('label').each(function () {
        $(this).parent().append($(this).children());
    });
    $('#usuarios_wrapper .dataTables_filter').find('input').each(function () {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
    });
    $('#usuarios_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#usuarios_wrapper .dataTables_filter').addClass('md-form');
    $('#usuarios_wrapper select').removeClass('custom-select custom-select-sm form-control form-control-sm');
    $('#usuarios_wrapper select').addClass('mdb-select');
    $('#usuarios_wrapper .mdb-select').materialSelect();
    $('#usuarios_wrapper .dataTables_filter').find('label').remove();



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

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('.mdb-select').materialSelect();
})

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
$(".btn-step-1").click(function(e){
    e.preventDefault();
    $(".step1").hide();
    $(".step2").fadeIn(350,'swing');
    $(".indicador").removeClass("active");
    $(".indicadores ul li:nth-child(2)").addClass('active');
});

$(".btn-step-2").click(function(e){
    e.preventDefault();
    $(".step2").hide();
    $(".step3").fadeIn(350,'swing');
    $(".indicador").removeClass("active");
    $(".indicadores ul li:nth-child(3)").addClass('active');
});
