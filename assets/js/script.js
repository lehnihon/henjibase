( function( $ ) {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    var options = {
        onKeyPress: function (cpf, ev, el, op) {
            var masks = ['000.000.000-000', '00.000.000/0000-00'];
            $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
        }
    }
    $('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
    $('.cep').mask('00000-000');
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
    $('.btn-veiculo').on('click',function(e){
        e.preventDefault();
        grupo = $(this).data('grupo');
        tarifa = $(this).data('tarifa');
        $('.idgrupo').val(grupo);
        $('.idtarifa').val(tarifa);
        $('#form-values').submit();
    });
    $('.alterar-veiculo').on('click',function(e){
        e.preventDefault();
        $('.idgrupo').remove();
        $('#form-values').submit();
    });
    $('[data-toggle="popover"]').popover();

    $('.opcheck, .opcheckb').on('click',function(){
        opcoes = $('.opcheck');
        opcoesb = $('.opcheckb');
        adicionais_lista = '';
        protecoes_lista = '';
        valortotal = 0;
        adicionais_input = '';
        protecoes_input = '';

        for(i = 0;i < opcoes.length ;i++){
            if(opcoes.eq(i).is(':checked')){
                valortotal += parseFloat(opcoes.eq(i).data('valor'));
                adicionais_input += opcoes.eq(i).val()+',';
                adicionais_lista += "<div class='row'><div class='col-7'>"+opcoes.eq(i).data('descricao')+"</div><div class='col-5'>R$"+opcoes.eq(i).data('valor').replace('.',',')+"/dia</div></div>";
            }
        }

        for(i = 0;i < opcoesb.length ;i++){
            if(opcoesb.eq(i).is(':checked')){
                valortotal += parseFloat(opcoesb.eq(i).data('valor'));
                protecoes_input += opcoesb.eq(i).val()+',';
                protecoes_lista += "<div class='row'><div class='col-7'>"+opcoesb.eq(i).data('descricao')+"</div><div class='col-5'>R$"+opcoesb.eq(i).data('valor').replace('.',',')+"/dia</div></div>";
            }
        }
        totaldiaria = parseFloat($('.totaldiaria').data('valor'));
        dias = parseFloat($('.totaldiaria').data('dias'));
        valortotal = parseFloat(valortotal);
        $('.adicionais-input').val(adicionais_input.slice(0, -1));
        $('.protecoes-input').val(protecoes_input.slice(0, -1));
        $('.totaldiaria').html("R$"+(valortotal+totaldiaria));
        $('.total').html("R$"+((valortotal+totaldiaria)*dias));
        $('.adicionais-lista').html(adicionais_lista);
        $('.protecoes-lista').html(protecoes_lista);
    });
    $('.btn-adicionais').on('click',function(e){
        if($('.check-aprovacao').is(':checked')){
            $('.passo-1').hide('slow');
            $('.passo-2').show('slow');
        }else{
            alert('É necessário aceitar os termos para prosseguir!');
        }
    });
    $('.nacionalidade').on('click',function(){
        if($(this).val() != 'S'){
            $('.brasileiro').show('slow');
            $('.nbrasileiro').hide('slow');
        }else{
            $('.brasileiro').hide('slow');
            $('.nbrasileiro').show('slow');
        }
    });
    $('.dtretirada-icon').on('click',function(){
        $('.dtretirada').focus();
    });
    $('.hrretirada-icon').on('click',function(){
        $('.hrretirada').focus();
    });
    $('.dtretorno-icon').on('click',function(){
        $('.dtretorno').focus();
    });
    $('.hrretorno-icon').on('click',function(){
        $('.hrretorno').focus();
    });
    $('.lcretirada-icon').on('click',function(){
        $('.lcretirada').focus();
    });
    $('.lcretorno-icon').on('click',function(){
        $('.lcretorno').focus();
    });
} )( jQuery );