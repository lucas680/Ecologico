<?php
include './app/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotas - EcoLógico</title>
    <link rel="shortcut icon" href="imgs/eco_lógico.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.min.css">
</head>

<body style="margin:0;">


    <div id="myDiv" class="animate-bottom">

        <div class="container-fluid">

            <div class="col-12 mx-auto my-3">
                <h1 class="display-1 mb-5 animate__animated animate__bounceIn">
                    <img class="img-fluid" src="imgs/logo.png" alt="logo">
                </h1>
                <p class="lead mb-3 h3 text-light font-weight-bold animate__animated animate__bounceIn">todos por uma cidade mais limpa.</p>
                <a class="mt-5 text-center " href="inicio.php">
                    <img class="img-100 girar" src="imgs/arrow-left.png" alt="">
                </a>
            </div>
                <!-- <div class="product-device box-shadow d-none d-md-block"></div> -->
                <!-- <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->

            </div>
        </div>

        <div class="container-fluid bg-light rounded">

            <h2 class="p-5 text-success">preencha os campos abaixo</h2>

            <form id="form1" class="row">


                <div class="col-3">
                    <label class="text-success" for="">bairro:</label>
                </div>

                <div class=" col-9">
                    <div class="form-group mb-3">
                        <select id="bairro" class="form-select" aria-label="Default" required>
                            <option value="" selected>selecionar</option>
                            <?php
                                listarBairros();
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <label class="text-success" for="">rua</label>
                </div>

                <div class="col-9">
                    <div class="form-group mb-3">
                        <select id="rua" class="form-select" aria-label="Default" required>
                            <option value="" selected>selecionar</option>
                            <?php
                                listarRuas();
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <input form="form1" type="submit" class="btn pl-3 pr-3 btn-orange rounded text-center mb-5" value="Resultado">
                </div>
            </form>

            <div class="pb-5 dados-rota">
                
            </div>

        </div>



    </div>

    <button type="button" class="btn btn-orange suporte redondo" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img class="img-100" src="imgs/suporte2.png" alt="">
    </button>

    <!-- Modal -->
    <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">suporte tecnico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> X </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                        <span class="input-group-text btn-orange">enviar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <script src="style/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./app/js/pesquisarRota.js"></script>
       


</body>

</html>