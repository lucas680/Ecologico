$('#form1').submit(function(e){
    e.preventDefault();

    var id_bairro = $('#bairro').val();
    var id_rua = $('#rua').val();

    $('.dados-rota').empty();

    $.ajax({
        url: 'http://localhost/projetoSocial/app/pesquisarRota.php',
        method: 'POST',
        data: {bairro: id_bairro, rua: id_rua},
        dataType: 'json'
    }).done(function(result){
        if(result.length === 0){
            $('.dados-rota').empty();
        }else{
            $('.dados-rota').replaceWith('<div class="pb-5 dados-rota"><p class="text-success h4">dia:</p><div class="col-12 bg-dark"><p class="text-success font-weight-bold p-3">'+ result[0]['rot_dias'] +'</p></div><p class="text-success h4">horário:</p><div class="col-12 bg-dark"><p class="text-success font-weight-bold p-3">'+ result[0]['rot_hora'] +' h</p></div></div>');
        }
    })
});