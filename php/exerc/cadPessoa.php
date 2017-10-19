<!DOCTYPE html>
<html>
    <body>
        <h1>Form Hello</h1>
        <form action="validaCad.php" method="get">
            Nome: <input name="nome" type="text" size="20" required> <br>
            Idade: <input name="idade" type="number" size="3" required> <br>
            Sexo: <select required name="sexo">
                    <option>Masc</option>
                    <option>Fem</option>
                  </select>
            <br>
            Endereço:<input name="end" type="text" size="60" > <br>
            <input type="submit"><input type="reset">
        </form>
        
        <?php
        if (!empty($_GET["erro"])) {
            echo "<p><strong>" . $_GET["erro"] . "</strong></p>";
        }
        ?>
    </body>
</html>

 
