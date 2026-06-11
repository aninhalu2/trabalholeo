 <?php
include 'config.php';

$usuario = $_POST['login'];
$senha = $_POST['senha'];

if ($usuario == 'admin' && $senha == '123') {
    $_SESSION['usuario'] = 'admin';
    header("Location: page.php");
} elseif ($usuario == 'moderador' && $senha == '123') {
    $_SESSION['usuario'] = 'moderador';
    header("Location: page.php");
} elseif ($usuario == 'usuario' && $senha == '123') { 
    $_SESSION['usuario'] = 'usuario';
    header("Location: page.php");
} else {
    echo "Usuário ou senha errado";
}
?>