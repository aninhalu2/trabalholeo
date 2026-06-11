 <?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
</head>
<body style="margin: 0; font-family: Arial;">

    <?php include 'login.php'; ?>

    <div style="display: flex;">
        
        <div style="width: 200px; background-color: lightgray; min-height: 80vh; padding: 20px;">
            <h3>Menu</h3>
            <?php if ($_SESSION['usuario'] == 'admin'): ?>
                
                <p><a href="#">opção 1</a></p>
                <p><a href="#">opção 2</a></p>
            <?php elseif ($_SESSION['usuario'] == 'moderador'): ?>
                
                <p><a href="#">opção 1</a></p>
                <p><a href="#">opção 2</a></p>
            <?php elseif ($_SESSION['usuario'] == 'usuario'): ?>  
                <p><a href="#">opção 1</a></p>
                <p><a href="#"> opção 2</a></p>
            <?php endif; ?>
        </div>
        
        <div style="padding: 20px;">
            <?php if ($_SESSION['usuario'] == 'admin'): ?>
                <h1 style="color: pink;">Conteúdo</h1>
                
            <?php elseif ($_SESSION['usuario'] == 'moderador'): ?>
                <h1 style="color: blue;">Conteúdo</h1>
               
            <?php elseif ($_SESSION['usuario'] == 'usuario'): ?> <h1 style="color: orange;">Conteúdo</h1>
                 
            <?php endif; ?>
        </div>

    </div>

</body>
</html>