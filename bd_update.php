<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$gravarUpdateId = $_GET['gravarUpdateId'];
$gravarUpdateNome = $_GET['gravarUpdateNome'];
$gravarUpdateCpf = $_GET['gravarUpdateCpf'];
$gravarUpdateEmail = $_GET['gravarUpdateEmail'];

$strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
$sql = "UPDATE cadastro SET nome='$gravarUpdateNome', cpf='$gravarUpdateCpf' WHERE email='$gravarUpdateEmail'";
$resultado = mysqli_query($strcon, $sql) or die ("Erro ao tentar consultar registro");

$json = '{"gravarUpdateNome" : "'.$gravarUpdateNome.'", "gravarUpdateCpf" : "'.$gravarUpdateCpf.'", "gravarUpdateEmail" : "'.$gravarUpdateEmail.'"}';

echo $json;


mysqli_close($strcon);




?>

