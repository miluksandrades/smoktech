<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Lucas Andrade da Silva">
        <link href="../image/smoktech_logo.png" type="img/png" rel="icon">
        <title>SmokTech</title>
        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <style>
            .icons{
                font-size: 15pt;
            }
            .card a:hover, .card a:visited, .card a{
                color: #000;
                text-decoration: none
            }
        </style>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="../index.php"><img class="img-fluid" style="vertical-align: middle; margin-left: 30px;" width="150" height="50" src="../image/smoktech.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <br/>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="../index.php">
                            <i class="icons icon-home"></i>
                            <span class="nav-link-text">Início</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="sinais.php">
                            <i class="icons fa fa-download"></i>
                            <span class="nav-link-text">Sinais Recebidos</span>
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

            </div>
            <div class="container-fluid">                
                <div class="card mb-5">
                    <div class="card-header bg-dark">
                        <p class="lead text-white">Sinais Recebidos dos dispositivos <b>SmokTech</b></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-sm-4 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-fire"></i>
                                        </div>
                                        <div class="mr-5">Grau 1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 mb-3">
                                <div class="card text-white bg-warning o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-fire"></i>
                                        </div>
                                        <div class="mr-5">Grau 2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 mb-3">
                                <div class="card text-white bg-danger o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-fire"></i>
                                        </div>
                                        <div class="mr-5">Grau 3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid" id="map" style="width: 100%; height: 400px" >
                        </div>
                        <br/>
                        <div class="container-fluid" style="height: 300px; overflow: auto">
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 4231 - Sinal <em>carbon monoxide</em> Detected. Grau 2. Transmition: Good. Esdras: <em style="color: green">OK</em></code><br/>
                            <code>[2017-06-11][12:40:38] APA - 5423 - Sinal <em>carbon dioxide</em> Detected. Grau 3. Transmition: <em style="color: green">Excelent</em>. Esdras: <em style="color: green">OK</em></code><br/>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © SmokTech 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sair</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <i class="icons fa fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">Tem certeza que quer sair?</div>
                        <div class="modal-footer">
                            <a href="login.php"><button class="btn btn-outline-primary">Sair</button></a>
                            <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancelar</button>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin.min.js"></script>
            <script>
                var markersData = [
                    {
                        lat: -5.090721,
                        lng: -54.322175,
                        nome: 'Reserva Extrativista Rio Iriri',
                        grau: 'Grau 1'
                    },
                    {
                        lat: -4.997922,
                        lng: -53.023002,
                        nome: 'Parque Nacional da Serra do Pardo',
                        grau: 'Grau 3'
                    },
                    {
                        lat: -5.680945,
                        lng: -53.402069,
                        nome: 'Estação Ecológica da Terra do Meio',
                        grau: 'Grau 2'
                    },
                    {
                        lat: -5.282098,
                        lng: -53.752240,
                        nome: 'Terra do Meio',
                        grau: 'Grau 1'
                    },
                    {
                        lat: -4.910040,
                        lng:-53.536632,
                        nome: 'Terra do Meio',
                        grau: 'Grau 2'
                    }

                ];

                function displayMarkers() {
                    var bounds = new google.maps.LatLngBounds();

                    for (var i = 0; i < markersData.length; i++) {

                        var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
                        var nome = markersData[i].nome;
                        var grau = markersData[i].grau;

                        createMarker(latlng, nome, grau);

                        bounds.extend(latlng);
                    }
                    map.fitBounds(bounds);
                }

                function createMarker(latlng, nome, grau) {
                    var marker = new google.maps.Marker({
                        map: map,
                        position: latlng,
                        title: nome
                    });

                    google.maps.event.addListener(marker, 'click', function () {

                        var iwContent = '<div id="iw_container">' +
                                '<div class="iw_title"><b style="font-size: 18px">' + nome + '</b></div><br/>' +
                                '<div class="iw_content"><b style="color: red">' + grau + '</b><br />' + '<br />' + '</div></div>';

                        infoWindow.setContent(iwContent);

                        infoWindow.open(map, marker);
                    });
                }

                function initMap() {
                    var mapOptions = {
                        center: new google.maps.LatLng(-5.074306, -53.693208),
                        zoon: 7,
                        mapTypeId: 'terrain'
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    infoWindow = new google.maps.InfoWindow();

                    google.maps.event.addListener(map, 'click', function () {
                        infoWindow.close();
                    });

                    displayMarkers();
                }
                google.maps.event.addDomListener(window, 'load', initMap);
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGcm11WvxYhWK26Nxy3ep7_81BKvAuZ7Y&callback=initMap"></script>
        </div>
    </body>

</html>
