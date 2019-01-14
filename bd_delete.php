<?Php
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");


$deleteId = $_GET["deleteId"];

   $strcon = mysqli_connect('localhost','root','usbw','bd_crud') or die('Erro ao conectar ao banco');
   $del = "DELETE FROM cadastro where id='{$deleteId}'";
   $delgo = mysqli_query($strcon, $del) or die ('Erro ao tentar deletar');

$json = '{"deleteId" : "'.$deleteId.'"}';
echo $json;
mysqli_close($strcon);



?>
