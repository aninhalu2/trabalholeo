<?php
include 'config.php';
 
$cor_fundo = 'gray'; 
$titulo = "Bem-vindo";

if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 'admin') {
        $cor_fundo = 'pink';
        $titulo = "Olá Admin";
    } elseif ($_SESSION['usuario'] == 'moderador') {
        $cor_fundo = 'blue';
        $titulo = "Olá Moderador";
    } elseif ($_SESSION['usuario'] == 'usuario') { 
        $cor_fundo = 'orange';
        $titulo = "Olá Usuário";
    }
}
?>