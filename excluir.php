<?php
//pegar o id 
$id = $_GET["id"];

//abrir conexão com o banco 
include_once'./conexao2.php';

//montar a instrução 
$sql = "Delete from cliente where idcliente =".$id;

//igual ao gravar
if(mysqli_query($con,$sql)){
    $msg = "Excluido com sucesso!";
}else{
    $msg = "Erro ao excluir!";
}
mysqli_close($con);
echo "<script> alert('".$msg."');
location.href='excluir.php'; </script>";


?>