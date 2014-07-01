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

<form class="form-horizontal" action="dadoscontato.php" method="post">

    <div class="control-group">
        <label class="control-label" for="inputNome">Nome</label>
        <div class="controls">
            <input type="text" id="inputNome" name="nome" placeholder="Nome">
        </div>
    </div>


    <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
            <input type="text" id="inputEmail" name="email" placeholder="Email">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputAssunto">Assunto</label>
        <div class="controls">
            <input type="text" id="inputAssunto" name="assunto" placeholder="Assunto">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputMensagem">Password</label>
        <div class="controls">
            <textarea rows="3" id="inputMensagem"  name="mensagem" placeholder="Mensagem"></textarea>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Enviar</button>
        </div>
    </div>
</form>



<?php
require_once('rodape.php');
?>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
