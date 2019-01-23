
    $('#tb-categories').DataTable();
    $('.dataTables_length').addClass('bs-select');

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
    $('.file_upload').file_upload();
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
