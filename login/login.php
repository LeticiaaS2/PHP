<?php
    include("header.php")
?>

        <div class="login">
            <h3>Tela de login</h3>
            <form action="processo.php" method="POST">
                <span>Usuário: </span>
                <input type="text" name="usuario">
                <span>Senha: </span>
                <input type="password" name="senha">
                <input type="submit" value="Entrar" name="entrar">
            </form>
        </div>

        <?php if(isset($_GET["msg"])){
            echo "
        <div style='margin 0 auto; text-align: center'>
            <span style='color: red;'>Usuário ou senha inválido(s)!
        </div> ";
    }
        ?>

<?php
    include("footer.php")
?>
