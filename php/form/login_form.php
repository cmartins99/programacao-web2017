<!DOCTYPE html>
<html>
    <body>
        <h1>Form Login</h1>
        <form action="login_post.php" method="POST">
            Login: <input type="text" name="login" required><br>
            Senha: <input type="password" name="senha" required><br>
            <input type="submit">
        </form>
        <?php
        if (!empty($_GET["erro"])) {
            echo "<p><strong>" . $_GET["erro"] . "</strong></p>";
        }
        ?>
    </body>
</html>
