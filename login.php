<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/footer_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/favecon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>VemComigo - SingIn</title>
</head>
<body>
    <?php
    include_once("header.php");
    ?>
    <main>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="img/cadastro.gif" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <h1 class="logar">Entrar:</h1>
                        <form action="autentica.php" method="POST">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Digite um endere??o de email v??lido" />
                                <label class="form-label" for="form3Example3">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4" name="senha" class="form-control form-control-lg" placeholder="Digite a senha" />
                                <label class="form-label" for="form3Example4">Senha</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="https://gartic.com.br/imgs/mural/ne/negromaravilhoso_/senta-e-chora.png" target="_blank" class="text-body">Esqueceu a sua senha?</a>
                            </div>
                            <p class="incorreto">

                                <?php
                                if ($_GET["mensagem"] == 'nl')
                                    echo "??? Usu??rio n??o logado";
                                else if ($_GET["mensagem"] == 'ui')
                                    echo "??? Usu??rio ou senha incorretos";
                                ?>
                            </p>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                <p class="small fw-bold mt-2 pt-1 mb-0">N??o possui uma conta? <a href="cadastro.php" class="link-registro">Registre-se</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>