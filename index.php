<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio - EcoLógico</title>
    <link rel="shortcut icon" href="imgs/eco_lógico.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.min.css">

    <link rel="stylesheet" href="style/load.css">
</head>

<body onload="myFunction()" style="margin:0;">


    <div id="loader">
        <div class="d-flex flex-column align-items-center">
            <img class="load-img animate__animated  animate__slower  animate__slower animate__slideInDown"
                src="imgs/eco_lógico.png" alt="">
            <p class="load-msg animate__animated  animate__slower  animate__slideInUp">todos por uma cidade mais limpa.
            </p>
        </div>

    </div>


    <div style="display:none;" id="myDiv" class="animate-bottom">




    </div>

    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }



        function showPage() {
            window.location = "inicio.php";
        }
    </script>

</body>

</html>