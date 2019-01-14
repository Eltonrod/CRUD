<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

if(isset($_GET["delNome"]) && $_GET["delNome"] != ""){
  $delNome = $_GET["delNome"];
  $delId ="#########";
}else if(isset($_GET["delId"]) && $_GET["delId"] != ""){
  $delId = $_GET["delId"];
  $delNome = -1;
}else{
  echo "{'erro' : 'Parametros não informados'}";
  exit();
}
$strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
$sql = "SELECT * FROM cadastro where nome='{$delNome}%' or id like'{$delId}'";
$resultado = mysqli_query($strcon, $sql) or die ("Erro ao tentar consultar registro");

while ($registro = mysqli_fetch_array($resultado))
{
  $delId = $registro['id'];
  $delNome = $registro['nome'];
  $delCpf = $registro['cpf'];
  $delEmail = $registro['email'];


$json = '{"delId" : "'.$delId.'", "delNome" : "'.$delNome.'", "delCpf" : "'.$delCpf.'", "delEmail" : "'.$delEmail.'"}';

echo $json;
}

mysqli_close($strcon);

?>