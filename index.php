<?php include ("moises_o_cara.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nome_empresa . " - cadastro" ?></title>
    <link rel="stylesheet" src="bootstrap-4.5.0-dist\css\bootstrap.css">
<script src = "bootstrap-4.5.0-dist\js\bootstrap.js">  </script>
</head>
<body>
    <div id="container">
        <?php

            $user = $_POST["user"];
            $password = $_POST["password"];
            $connect = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db(mysqli $connect, "cadastros");
            $busca = mysqli_query("SELECT usuarios FROM cadastros WHERE usuarios = '$user'");
            $query_insert = mysqli_query("INSERT INTO usuarios (nome, senha) VALUES ('$user', '$password')", $connect);
            if ($query_insert) {
                echo "deu certo eu acho";
            }

        ?>
    </div>
    

</body>
</html>