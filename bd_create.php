<?php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Brazil/East");

$nome = $_GET['gravarNome'];
$cpf = $_GET['gravarCpf'];
$email = $_GET['gravarEmail'];

$strcon = mysqli_connect('localhost','root','usbw','BD_crud') or die('Erro ao conectar ao banco');
$result_msg_contato = "INSERT INTO cadastro(nome,cpf,email)
VALUES
('$nome','$cpf','$email')";

$resultado_msg_contato = mysqli_query($strcon, $result_msg_contato);

    echo '<script>alert("Dados enviados com sucesso!!"); </script>';
    header('location: index.php');

   $json = '{"nome" : "'.$nome.'", "cpf" : "'.$cpf.'", "email" : "'.$email.'"}';
        
        echo $json;

    mysqli_close($strcon);
?>
