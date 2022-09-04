<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graficos - EcoLógico</title>
    <link rel="shortcut icon" href="imgs/eco_lógico.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.min.css">

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
            <div class="row">
                <div class="col-12">
                    <canvas id="geral" width="100%"></canvas>
                </div>
                <div class="col-12">
                    <canvas id="bairro" class="">
                    </canvas>
                </div>
                <div class="col-12">
                    <canvas id="tipo" class="">
                    </canvas>
                </div>
            </div>

        </div>



    </div>



    </div>



    <script src="style/bootstrap.bundle.min.js"></script>
    <script src="chartjs/Chart.min.js"></script>
    <script src="chartjs/utils.js"></script>

    <!-- grafico geral -->
    <script>
        const ctx = document.getElementById('geral').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'geral',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: [
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- grafico por bairro -->
    <script>
        const ctx1 = document.getElementById('bairro').getContext('2d');
        const myChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'BAIRRO X RUA',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: [
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 159, 64)'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <!-- grafico relação aos tipos de denuncia -->
    <script>
        const ctx2 = document.getElementById('tipo').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['RCC', 'QUEIMADAS', 'ORG'],
                datasets: [{
                    label: '# of Votes',
                    data: [1, 1, 1],
                    backgroundColor: [
                        'rgb(255, 159, 64)',
                        'rgb(255, 206, 86)',
                        'rgb(51, 151, 78)'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>