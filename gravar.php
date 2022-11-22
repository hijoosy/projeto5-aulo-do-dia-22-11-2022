<?php 
//PASSO 1- pegar dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("y-m-d"); // padrão do banco
$foto =$_FILES["foto"];

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[amarelas][flores]
$ext = $ext[0];
?>

<?php

if(($ext != "jpg") && ($exr != "png") && ($ext !="gif")){
    echo "Arquivo Inválido";
}elseif($foto ["size"] < 1024 *8){
     echo "Tamanho excedido";
}else{


//PASSO 2- montar a conexão com o banco de dados
include_once'./conexao2.php';

$nomefoto= date("YmdHis").rand(0000,9999).".".$ext;


//PASSO 3- montar o sql de gravar no banco
$sql ="insert into cliente values(null, '".$nome."','".$email."','".$telefone."','".$dtcadastro."','".$nomefoto."')";

//PASSO 4- mandar esse comando para o mysql
if(mysqli_query($con,$sql)){
    $msg = "Gravado com sucesso!";

    move_uploaded_file($foto["tmp_name"],"./uploads/.".$nomefoto);

}else{
    $msg = "Erro ao gravar.";
}
mysqli_close($con);
echo "<script> alert('".$msg."');
location.href='cadastrar.php'; </script>";

?>
