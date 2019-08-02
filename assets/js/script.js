( function( $ ) {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00');
    $( ".date" ).datepicker({
        altFormat: "dd/mm/yy",
        dateFormat: "dd/mm/yy",
    });
    if($('#form-dev').is(":checked")){
        $('.local-dev').show();
    }
    $('#form-dev').on('click',function(){
        $('.local-dev').toggle();
    });
    $('.buscar-reserva').on('click',function(){
        $('#header').submit();
    });
    $('.veiculos-grupo').on('click',function(){
        id = $(this).data( "id" );
        if($('.show-'+id).is(":hidden")){
            $('.show-'+id).show();
            $('.hide-'+id).hide();
        }else{
            $('.show-'+id).hide();
            $('.hide-'+id).show();
        }
    });
} )( jQuery );