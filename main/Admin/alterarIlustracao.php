<?php

include "objetos/Ilustracao.php";

$id = $_GET['id'];


$dao = new Ilustracao();

$todos = $dao -> buscarIlustracao($id);

foreach ($todos as $dados){ 

?>
<h3>Insira novos dados:</h3>

<form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=alterarIlustracaodb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
	<div class="form-group">
            <label class="control-label" for="titulo"> Descricao </label>
            <input class="form-control" id="titulo" name="descricao" type="text" value="<?=$dados['descricao'];?>" required="required"/>
        </div>
    <div class="form-group"> 
            <label class="control-label" for="subtitulo">Tipo Ilustracao: </label>
            <input class="form-control" id="subtitulo" name="tipoIlustracao" type="text" value="<?=$dados['tipoIlustracao'];?>" required="required"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="Enviar">&ensp;receber&ensp;</button>
        </div>
</table>
</form>
<?php 
}
?>