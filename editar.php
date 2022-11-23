<?php include_once('cabecalho.php'); ?>

<?php
$id=$_GET["id"];
include_once'./conexao2.php';
$sql="select * from cliente where idcliente =".$id;

$result= mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
    <h1><span class="badge badge-dark">Atualização de cliente</span></h1>
    <hr>
    <form action="atualizar.php" method="post">

        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/><br/><br/>

        Nome:<br/><input type="text" name="nome" value="<?php echo $row["nome"]; ?>" class="btn btn-outline-dark" required/> <br/><br/>
        
        Email:<br/><input type="text" name="email" value="<?php echo $row["email"]; ?>"class="btn btn-outline-dark" required/> <br/><br/>
        
        Telefone:<br/><input type="text" name="telefone" value="<?php echo $row["telefone"]; ?>" class="btn btn-outline-dark" required/> <br/><br/>
        <input type="submit" value="Atualizar" class="btn btn-dark"/>
    </form>
    
<?php include_once('rodape.php'); ?>