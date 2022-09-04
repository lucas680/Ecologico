<?php 

function status($nome, $telefone){
    if(isset($nome) && isset($telefone)){
        return 1;
    }else{
        return 0;
    }
}

function paramDenuncia($con, $descricao, $referencia, $nome, $telefone, $bairro, $rua, $imagem, $status, $data, $perfil, $tipo){
    session_start();

    $protocolo = gerarProtocolo();

    $sql = "INSERT INTO tb_denuncias(den_descricao, den_referencia, den_data, den_imagem, den_nome, den_tell, den_perfil, den_status, bai_id, rua_id, tip_id, den_protocolo) VALUES (:descricao, :referencia, :dataAtual, :imagem, :nome, :telefone, :perfil,  :statusAtual, :bairro, :rua, :tipo, :protocolo)";

    $stmt = $con->prepare($sql);

    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':referencia', $referencia);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':bairro', $bairro);
    $stmt->bindParam(':rua', $rua);
    $stmt->bindParam(':imagem', $imagem);
    $stmt->bindParam(':statusAtual', $status);
    $stmt->bindParam(':dataAtual', $data);
    $stmt->bindParam(':perfil', $perfil);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->bindParam(':protocolo', $protocolo);
    
    $_SESSION['protocolo'] = true;
    $_SESSION['num'] = $protocolo;

    return $stmt;
}

function gerarProtocolo(){
    include 'conexao.php';

    $cont = 0;
    $boolean = false;
    $numRandom = '';

    while($boolean === false){
        for ($i=0; $i < 10; $i++) { 
            $numRandom .= rand(0, 9);
        }

        $sql = "SELECT den_protocolo FROM tb_denuncias";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        for ($i=0; $i < count($resultados); $i++) { 
            if($resultados[$i]['den_protocolo'] === $numRandom){
                $cont++;
            }
        }
        if ($cont === 0) {
            $boolean = true;
        }else{
            $numRandom = '';
        }
    }

    return $numRandom;
}

function salvarImagem($nome_imagem, $imagem){
    $diretorio = "./imagens/";
    move_uploaded_file($imagem, $diretorio.$nome_imagem);
}

function listarBairros(){
    include 'conexao.php';

    $sql = "SELECT * FROM tb_bairros";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($lista);
    $html = '';
    for ($i = 0; $i < count($lista); $i++) { 
        $html .= "<option value=".$lista[$i]['bai_id'].">".$lista[$i]['bai_nome']."</option>";
    }

    echo $html;
}

function listarRuas(){
    include 'conexao.php';

    $sql = "SELECT * FROM tb_ruas";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($lista);
    $html = '';
    for ($i = 0; $i < count($lista); $i++) { 
        $html .= "<option value=".$lista[$i]['rua_id'].">".$lista[$i]['rua_nome']."</option>";
    }

    echo $html;
}

function listarDenunciasADM(){
    include 'conexao.php';

    $sql = "SELECT den_descricao, tb_ruas.rua_nome, tb_bairros.bai_nome FROM
            tb_denuncias 
            join tb_bairros on tb_bairros.bai_id = tb_denuncias.bai_id
            join tb_ruas on tb_ruas.rua_id = tb_denuncias.rua_id";
    
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($lista);
    $html = '';
    
    // for ($i = 0; $i < count($lista); $i++) { 
    //     $html .= "<option value=".$lista[$i]['rua_id'].">".$lista[$i]['rua_nome']."</option>";
    // }

    echo $html;
}

function listarDenunciasPublic(){
    include 'conexao.php';

    $sql = "SELECT tb_denuncias.den_protocolo, tb_denuncias.den_status FROM tb_denuncias order by den_id";
    
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $html = '';
    $cor = '';

    for ($i = 0; $i < count($lista); $i++) { 

        if($lista[$i]['den_status'] === '1'){
            $cor = "
            <div class='col-2'>
                <div class='emAndamento'></div>
            </div>";
        }else if($lista[$i]['den_status'] === '2'){
            $cor = "
            <div class='col-2'> 
                <div class='finalizado'></div>    
            </div>";
        }

        $html .= "
        <tr>
        
            <td  scope='row' class='mouse-click' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                ".$lista[$i]['den_protocolo']."
            </td>

            <td class='row'>".$cor." em andamento</td>
        </tr>
        ";
    }

    echo $html;
}

function listarTipos(){
    include 'conexao.php';

    $sql = "SELECT * FROM tb_tipos ORDER BY tip_id";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($lista);
    $html = '';
    for ($i = 0; $i < count($lista); $i++) { 
        $html .= "<option value=".$lista[$i]['tip_id'].">".strtoupper($lista[$i]['tip_nome'])."</option>";
    }

    echo $html;
}

function cadastrarRua($rua, $bairro){
    include 'conexao.php';


    $sql = "SELECT tb_ruas.rua_nome FROM tb_ruas";

    $stmt = $con->prepare($sql);
    $stmt->execute();
    $lista = $stmt->fetchAll();
    $repetiu = false;

    for ($i=0; $i < count($lista); $i++) { 
        if($lista[$i]['rua_nome'] === $rua){
            $repetiu = true;
            break;
        }else{

        }
    }

    if($repetiu === false){
        $sql = "INSERT INTO tb_ruas(rua_nome, bai_id) values (:nome, :bairro)";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(':nome', $rua);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->execute();
    }else{
        echo "erro";
    }
}

