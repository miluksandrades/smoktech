<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="image/smoktech_logo.png" type="img/png" rel="icon">
        <meta name="author" content="Lucas Andrade da Silva">
        <title>SmokTech</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php"><img class="img-fluid" style="vertical-align: middle; margin-left: 30px;" width="150" height="50" src="image/smoktech.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
                            <i class="icons icon-home"></i>
                            <span class="nav-link-text">Início</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="pages/sinais.php">
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
                <div class="card mb-5">
                    <div class="card-header bg-dark">
                        <p class="lead text-white">Áreas de Proteção Ambiental sobre vigilância do sistema <b>SmokTech</b></p>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">APA - 4231</h5>
                                </div>
                            </a>

                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p class="lead"><b>Dispositivos</b>: sc-0001, sc-0002, sc-0003, sc-0004</p>
                                        <p class="lead"><b>Local</b>: Parque Estadual do Xingu</p>
                                        <p class="lead"><b>Responsável</b>: ICMBIO - Santa Cruz do Xingu - MT</p>
                                    </div>
                                    <div class="container-fluid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711243.1787171598!2d-52.80895812915924!3d-10.008550007262814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x931b4f475c862e01%3A0xc8ff3b05031707e3!2sParque+Estadual+do+Xingu!5e0!3m2!1spt-BR!2sbr!4v1512747033446" height="300" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">APA - 5423</h5>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p class="lead"><b>Dispositivos</b>: sc-0121, sc-0122, sc-0123, sc-0324</p>
                                        <p class="lead"><b>Local</b>: Floresta Nacional do Tapajós</p>
                                        <p class="lead"><b>Responsável</b>: ICMBIO - Fordlândia - PA</p>
                                    </div>
                                    <div class="container-fluid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1441645.2636140722!2d-54.39081289189122!3d-3.582861157275562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9289976fd9032f53%3A0x5b9a87adaf37784e!2sFloresta+Nacional+do+Tapaj%C3%B3s!5e0!3m2!1spt-BR!2sbr!4v1512747328364" height="300" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">APA - 6783</h5>
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p class="lead"><b>Dispositivos</b>: sc-0141, sc-0162, sc-0223, sc-0674</p>
                                        <p class="lead"><b>Local</b>: Reserva Extrativista Renascer</p>
                                        <p class="lead"><b>Responsável</b>: IBAMA - Santarém - PA</p>
                                    </div>
                                    <div class="container-fluid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1442866.6590230642!2d-54.1383364105716!3d-2.69859037950827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x928f7a211e813a29%3A0x76670659f9febd3a!2sReserva+Extrativista+Renascer!5e0!3m2!1spt-BR!2sbr!4v1512747632834" height="300" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">APA - 5494</h5>
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p class="lead"><b>Dispositivos</b>: sc-0431, sc-0430, sc-0903, sc-0907</p>
                                        <p class="lead"><b>Local</b>: Reserva Extrativista Verde pra Sempre</p>
                                        <p class="lead"><b>Responsável</b>: IBAMA - Porto de Moz - PA</p>
                                    </div>
                                    <div class="container-fluid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1443032.538002898!2d-53.439170769994114!3d-2.555024048560314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9292478a14df424b%3A0xa10d7676687579a4!2sReserva+Extrativista+Verde+para+Sempre!5e0!3m2!1spt-BR!2sbr!4v1512747756472" height="300" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">APA - 2032</h5>
                                </div>
                            </a>
                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p class="lead"><b>Dispositivos</b>: sc-0901, sc-0902, sc-0893, sc-0904</p>
                                        <p class="lead"><b>Local</b>: Floresta Nacional Caxiuanã</p>
                                        <p class="lead"><b>Responsável</b>: IBAMA - Porto de Moz - PA</p>
                                    </div>
                                    <div class="container-fluid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1443504.702833203!2d-52.65066729756501!3d-2.0931793451830143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9290a02c228bdecf%3A0x1e0e958fec8bc4e5!2sFloresta+Nacional+de+Caxiuan%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1512747815743" height="300" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
                                    </div> 
                                    
                                </div>
                            </div>
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
                            <a href="pages/login.php"><button class="btn btn-outline-primary">Sair</button></a>
                            <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancelar</button>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="js/sb-admin-datatables.min.js"></script>
            <script src="js/sb-admin-charts.min.js"></script>

        </div>
    </body>

</html>