<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Bem-Vindo</title>
</head>
<body>
    <div class=mainbox>
        <div class="caixa">
            
    
        <?php echo "<h1>Bem-Vindo utilizador : " . $_SESSION['username'] . "</h1>"; ?>
        <?php echo "<h1>Email: " . $_SESSION['email'] . "</h1>"; ?>
        

        <a href="logout.php">Logout</a>
        <a href="contactos.html">Voltar ao website</a>
        </div>
    </div>
</body>
</html>