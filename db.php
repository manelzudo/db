<?php 

if(isset($_POST['enviar']) && (($_POST['email'] != '') && ($_POST['password'] != ''))) {
    include_once('configure.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(email,senha) VALUES ('$email','$senha')");
}

?>