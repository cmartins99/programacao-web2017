<!DOCTYPE html>
<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" 
      action="<?php echo $_SERVER["PHP_SELF"]; ?>" 
      method="POST">
    Enviar o arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>

<?php
if (isset($_FILES['userfile'])) {
    $uploaddir = '../uploads/';
    // cria a pasta destino caso nao exista
    if (!file_exists($uploaddir)) {
        mkdir($uploaddir);
    }
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
    print "</pre>";
}
?>