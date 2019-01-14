<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

if(isset($_GET["updateNome"]) && $_GET["updateNome"] != ""){
  $updateNome = $_GET["updateNome"];
  $updateId ="#########";
}else if(isset($_GET["updateId"]) && $_GET["updateId"] != ""){
  $updateId = $_GET["updateId"];
  $updateNome = -1;
}else{
  echo "{'erro' : 'Parametros não informados'}";
  exit();
}
$strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
$sql = "SELECT * FROM cadastro where nome='{$updateNome}%' or id like'{$updateId}'";
$resultado = mysqli_query($strcon, $sql) or die ("Erro ao tentar consultar registro");

while ($registro = mysqli_fetch_array($resultado))
{
  $updateId = $registro['id'];
  $updateNome = $registro['nome'];
  $updateCpf = $registro['cpf'];
  $updateEmail = $registro['email'];


$json = '{"updateId" : "'.$updateId.'", "updateNome" : "'.$updateNome.'", "updateCpf" : "'.$updateCpf.'", "updateEmail" : "'.$updateEmail.'"}';

echo $json;
}

mysqli_close($strcon);

?>