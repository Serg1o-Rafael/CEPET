<?php

if(!empty($_GET['ID_USUARIO'])){

    include("conexao.php");
    $id = $_GET['ID_USUARIO'];

    $sql = mysqli_query($mysqli, "UPDATE usuarios SET AUTENTICACAO = 1 WHERE ID_USUARIO ='$id'");

    if($sql == true){
        
        echo "<!DOCTYPE html>
               <html lang='pt-br'>
               <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Criar Conta</title>
                  <link rel='stylesheet' href='/cepet/cadastro/css/estilocadastro.css'> 
                  <link rel='stylesheet' type='text/css' href='/cepet/usuario/css/padrao.css'>
                  <link rel='icon' href='/cepet/cadastroimg/logos/icon.ico'>  
                    <link rel='stylesheet' type='text/css' href='/cepet/usuario/css/adotar.css'>
                  <script src='jscript/main.js' defer> </script>
               </head>
               
                  <div class='logoimg'>
               <img src='/cepet/cadastro/img/logos/cepet-preto.png' width='20%' alt='Logo Cepet'>
                     </div>
                     <hr style='background-color: #3d9f9b; min-height: 30px;> </hr>'<br> <br>
                     Você foi autenticado! <br> <br>
                     <style>
                     a:link{text-decoration:none; </style>
                     
                     <a href='/cepet/ambos/login.php'><button class='btn'>Ir para o login. </button></a> ";

    }else{
        echo "Erro ao auntenticar usuario!";
    }
}
?>

<script>
    history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>