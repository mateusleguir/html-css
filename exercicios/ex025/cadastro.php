<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Cadastro PHP</title>
</head>

<body>
    Olá <?php echo htmlspecialchars($_POST['usu']); ?>
    Sua senha é: <?php echo (int)$_POST['sen']; ?>

</body>

</html>