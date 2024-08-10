<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se as chaves existem antes de acessá-las
    $usuario = isset($_POST['usu']) ? htmlspecialchars($_POST['usu']) : 'Não informado';
    $senha = isset($_POST['sen']) ? htmlspecialchars($_POST['sen']) : 'Não informada';

    // Exibe os valores recebidos
    echo "Olá $usuario<br>";
    echo "Sua senha é: $senha";
}
