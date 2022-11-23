<?php
// regate de dados da tela
$id= $_POST["id"];
$nome= $_POST["nome"];
$email= $_POST["email"];
$telefone= $_POST["telefone"];


// conexão com banco de dados
include_once'./conexao2.php';


// montar instrução de atualização de banco
$sql = "update cliente set nome = '".$nome."',email = '".$email."',telefone = '".$telefone."' where idcliente =".$id;


// atualização é igual ao gravar
if(mysqli_query($con,$sql)){   
     $msg = "Atualizado com sucesso!";
}else{  
      $msg = "Erro ao atualizar!";
}
mysqli_close($con);
echo "<script> alert('".$msg."');location.href='index.php'; </script>";



?><?php include_once('rodape.php'); ?>