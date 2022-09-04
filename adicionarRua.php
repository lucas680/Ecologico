<?php
session_start();

include './app/functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Rua - EcoLógico</title>
    <link rel="shortcut icon" href="imgs/eco_lógico.png" type="image/x-icon">

    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/animate.min.css">
    <style>
        .btn-protocolo{
            border: none;
            border-radius: 10px;
            background-color: #0AC204;
            color: white;
            padding: 10px;
            margin-top:20px;
            cursor: pointer;
        }

        .btn-protocolo:hover{
            transition-duration: 0.8s;
            background-color: #05A100;
        }
    </style>
</head>

<body>

    <div>
        <div class="container-fluid">

            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-12 mx-auto my-3">
                    <h1 class="display-1 mb-5 animate__animated animate__bounceIn">
                        <img class="img-fluid" src="imgs/logo.png" alt="logo">
                    </h1>
                    <p class="lead mb-3 h3 text-light font-weight-bold animate__animated animate__bounceIn">Adicionar Rua.</p>
                   
                </div>
                <!-- <div class="product-device box-shadow d-none d-md-block"></div> -->
                <!-- <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->

            </div>
        </div>

        <div class="container-fluid bg-light rounded">

            <form class="text-light pt-5 pb-5" method="POST" action="./app/salvarRua.php" enctype="multipart/form-data">
                <div class="form-row">
                    
                    <div class="form-group mb-3">
                    <select name="bairro" class="form-select" aria-label="Default" required>
                            <option value="" selected>bairro</option>
                            <?php
                                listarBairros();
                            ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <input required name="rua" type="text" class="form-control rounded" id="" placeholder="Nome da rua:">

                    </div>

                   
                </div>

               
                <div class="form-group">

                    <input placeholder="Salvar" class="btn btn-orange btn-block rounded font-weight-bold" type="submit">

                </div>



            </form>

        </div>
    </div>


    </div>

    <?php
    if(isset($_SESSION['num'])){
        include './modalProtocolo.php';
        echo "<script type='text/javascript'>";
        echo "document.getElementById('id01').style.display='block'";
        echo "</script>";

        unset($_SESSION['num']);
    }
    ?>

    
    <script src="style/bootstrap.bundle.min.js"></script>

</body>

</html>