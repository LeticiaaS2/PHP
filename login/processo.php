<?php
    
    $usuarioCadastrado = "oi";
    $senhaCadastrado = "123";

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(($usuario == $usuarioCadastrado) && ($senha == $senhaCadastrado)){
        header("Location:inicio.php");
    }else{
        header("Location:login.php?msg=erro");
    }

    echo "<p><h1>Usuário: ".$usuario."</h1>";
    echo "<p><h1>Senha: ".$senha."</h1>";

?>
