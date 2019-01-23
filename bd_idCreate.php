<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
$sql = "SELECT id FROM cadastro ORDER BY  `id` DESC";
$resultado = mysqli_query($strcon, $sql) or die ("Erro ao tentar consultar registro");

//while 
$registro = mysqli_fetch_array($resultado);
//{
  $idCreate = $registro['id'] + 1;

$json = '{"idCreate" : "'.$idCreate.'"}';

echo $json;
//}

mysqli_close($strcon);

?>
