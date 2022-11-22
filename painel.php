<?php session_start(); ?>
<?php include_once'cabecalho.php'; ?>
     <h1>Painel do Sistema</h1>
     <hr>
     <?php
          echo"<br>Seja Bem Vindo(a) :" .$_SESSION["nome"];

          echo"<hr>Menu :";
          if ($_SESSION["perfil"] == "adm") {
           include_once'menu-adm.php';
          } else {
            include_once'menu-usuario.php';
          }
          
        ?>
<?php include_once'rodape.php'; ?>