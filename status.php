<?php
include './app/functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>status - EcoLógico</title>
    <link rel="shortcut icon" href="imgs/eco_lógico.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.min.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <style>
        .emAndamento{
            width: 25px;
            height: 25px;
            background-color: orange;
            border-radius: 50px;
        }
        
        .finalizado{
            width: 25px;
            height: 25px;
            background-color: green;
            border-radius: 50px;
        }

        .protocolo{
            text-decoration: none !important;
            color: #5ba782;
        }
    </style>
</head>

<body style="margin:0;">


    <div id="myDiv" class="animate-bottom">

        <div class="container-fluid">

            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
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

        
            <!-- <p class="p-5 h2 text-left text-success">estimativa:</p> -->
            <div class="row">
            <form id="form-status" class="mt-4 col-12">
                    <div class="col-6 offset-6" >
                        <div class="input-group mb-2 rounded">
                            
                            <input id="pesquisar-protocolo" type="text" class="form-control" id="inlineFormInputGroup" placeholder="pesquisar">
                            <div class="input-group-prepend">
                                <button form="form-status" type="submit" class="input-group-text btn btn-orange">
                                    <img width="30px" class="img-100" src="imgs/lupa.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=" col-12 pb-5">

                    <table class="table table-hover">

                        <table class="table text-success text-left">
                            <thead class="">
                                <tr>
                                    <th scope="col">protocolo</th>
                                    <th scope="col">estado</th>
                                </tr>
                            </thead>
                            <tbody class="resultado-pesquisa">
                                    <?php
                                        listarDenunciasPublic();
                                    ?>
                            </tbody>
                        </table>

                </div>

            </div>


        </div>


    </div>


   <!-- Modal -->
<div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">protocolo n° <?php echo $_GET['protocolo'];?></h5>
               <button type="button" class="btn-close btn-orange redondo" data-bs-dismiss="modal"
                   aria-label="Close"> X
               </button>
           </div>
           <div class="modal-body">

               <img class="img-fluid" src="imgs/1.png" alt="">

               <div>
                   <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
               </div>

           </div>
       </div>
   </div>
</div>






    <script src="style/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script src="./app/js/pesquisarStatus.js"></script>

</body>

</html>