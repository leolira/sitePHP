<?php

date_default_timezone_set('America/Sao_Paulo');
$date = date('d-m-Y');


 ?>
<h1>Inserir Dados no Blog</h1>
<form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=inserirblogdb" method="post">
    <div class="form-group">
        <label class="control-label" for="titulo">Titulo: </label>
        <input class="form-control" id="titulo" name="titulo" type="text" required="required"/>
    </div>
    <div class="form-group"> 
        <label class="control-label" for="subtitulo">Conteudo: </label>
        <textarea class="form-control" id="subtitulo" name="conteudo" type="text" required="required"/></textarea>
    </div>
	<div class="form-group"> 
        <label class="control-label" for="subtitulo">Assinatura: </label>
        <input class="form-control" id="subtitulo" name="assinatura" type="text" required="required"/>
    </div>
	<div class="form-group"> 
        <label class="control-label" for="subtitulo">Data: </label>
        <input class="form-control" id="subtitulo" name="data" type="text" value="<?=$date?>" required="required"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" name="Enviar">&ensp;Cadastrar&ensp;</button>
    </div>
</form>


