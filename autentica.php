<?php
session_start();
include_once("usuario.php");

$user = $_POST["email"];
$pass = $_POST["senha"];
$logins = validaUsuario($user, $pass);

if ($logins == null) {
    $_SESSION['login'] = false; ?>

    <meta http-equiv="refresh" content="1; URL='login.php?mensagem=ui'" />
<?php } else {
    $_SESSION['login'] = true;
?>
    <meta http-equiv="refresh" content="1; URL='index.php'" />
<?php    }
exit(1);

?>