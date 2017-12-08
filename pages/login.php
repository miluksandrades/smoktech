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
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header" style="text-align: center">Login</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="usuario">Usuário</label>
                            <input class="form-control" id="usuario" type="text" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input class="form-control" id="senha" type="password" placeholder="Senha">
                        </div>
                        <a class="btn col-12 btn-outline-primary" onclick="acessar()">Entrar</a>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function acessar() {
                var usuario = document.getElementById("usuario").value;
                var senha = document.getElementById("senha").value;

                if (usuario === "admin" && senha === "admin") {
                    location.href = "../index.html";
                } else {
                    alert('Usuário não Existe');
                }
            }
        </script>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>

        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
