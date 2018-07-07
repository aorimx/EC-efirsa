$(document).ready(function(){
    //Evento para cambiar el ordenamiento de productos desde un select
    $('.container-filtros select').on('change',function(){
        window.location.href = $(this).find(':selected').val();
    });
});