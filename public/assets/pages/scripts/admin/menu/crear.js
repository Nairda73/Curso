$(document).ready(function (){
    Cursor.validacionGeneral('form-general');
    $('#icono').on('blur', function(){
        $('#mostrar-icono').removeClass().addClass('fa fa-fw' + $(this).val());
    });
});