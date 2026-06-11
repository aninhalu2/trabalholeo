<?php
include 'rules.php';
?>
<div style="background-color: <?php echo $cor_fundo; ?>; color: white; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
    
    <h2><?php echo $titulo; ?></h2>

    <div>
        <?php if (isset($_SESSION['usuario'])): ?>
            <a href="#" style="color: white; margin-right: 15px;">Configurações</a>
            <a href="logout.php" style="color: black; background: white; padding: 5px; text-decoration: none;">Sair</a>
        <?php else: ?>
            <form action="credencias.php" method="POST">
                <input type="text" name="login" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit">Entrar</button>
            </form>
        <?php endif; ?>
    </div>
</div>