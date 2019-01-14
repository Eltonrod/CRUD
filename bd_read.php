<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

if(isset($_GET["consultaNome"]) && $_GET["consultaNome"] != ""){
  $consultaNome = $_GET["consultaNome"];
  $consultaId ="#########";
}else if(isset($_GET["consultaId"]) && $_GET["consultaId"] != ""){
  $consultaId = $_GET["consultaId"];
  $consultaNome = -1;
}else{
  echo "{'erro' : 'Parametros não informados'}";
  exit();
}
$strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
$sql = "SELECT * FROM cadastro where nome='{$consultaNome}%' or id like'{$consultaId}'";
$resultado = mysqli_query($strcon, $sql) or die ("Erro ao tentar consultar registro");

while ($registro = mysqli_fetch_array($resultado))
{
  $consultaId = $registro['id'];
  $consultaNome = $registro['nome'];
  $consultaCpf = $registro['cpf'];
  $consultaEmail = $registro['email'];


$json = '{"consultaId" : "'.$consultaId.'", "consultaNome" : "'.$consultaNome.'", "consultaCpf" : "'.$consultaCpf.'", "consultaEmail" : "'.$consultaEmail.'"}';

echo $json;
}

mysqli_close($strcon);

?>
