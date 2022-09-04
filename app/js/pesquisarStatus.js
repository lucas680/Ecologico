$('#form-status').submit(function(e) {
    e.preventDefault();

    var pesquisa = $('#pesquisar-protocolo').val();

    $.ajax({
        url: 'http://localhost/projetoSocial/app/pesquisarProtocolo.php',
        method: 'POST',
        data: {pesquisa:pesquisa},
        dataType: 'json'
    }).done(function(result){
        console.log(result);

        var html;
        var cor;
        for (var i = 0; i < result.length; i++) {

            if(result[i]['den_status'] === '1'){
                cor = "<div class='col-2'><div class='emAndamento'></div></div>";
            }else if(result[i]['den_status'] === '2'){
                cor = "<div class='col-2'> <div class='finalizado'></div></div>";
            }

            html += "<tr><td  scope='row' class='mouse-click' data-bs-toggle='modal' data-bs-target='#exampleModal'>"+result[i]['den_protocolo']+"</td><td class='row'>"+cor+" em andamento</td></tr>";
        }

        $('.resultado-pesquisa').replaceWith('<tbody class="resultado-pesquisa">'+html+'</tbody>');
    });
});