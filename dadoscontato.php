<!DOCTYPE html>
<html>
<head>
    <title>Simples Site PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
require_once('menu.php');
?>


<span class="label label-success">Dados enviados com sucesso !!!</span>
<div class="well well-large">

    <em>Nome: </em> <strong><?=$_POST["nome"]?></strong><br>
    <em>Email: </em><strong><?=$_POST["email"]?></strong><br>
    <em>Assunto: </em><strong><?=$_POST["assunto"]?></strong><br>
    <em>Mensagem: </em><strong><?=$_POST["mensagem"]?></strong><br>
</div>


<?php
require_once('rodape.php');
?>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>