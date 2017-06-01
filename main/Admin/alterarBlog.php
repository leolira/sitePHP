<?php

include "objetos/blog.php";

$id = $_GET['id'];


$dao = new Blog();

$todos = $dao -> buscarBlog($id);


foreach ($todos as $dados){ 

?>

<h3>Insira novos dados:</h3>

<form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=alterarBlogdb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
	<div class="form-group">
            <label class="control-label" for="titulo"> Titulo </label>
            <input class="form-control" id="titulo" name="titulo" type="text" value="<?=$dados['titulo'];?>" required="required"/>
        </div>
    <div class="form-group"> 
            <label class="control-label" for="subtitulo">Conteudo: </label>
            <textarea class="form-control"  id="textarea"  name="conteudo" type="text"><?=$dados['conteudo'];?></textarea>
        </div>
	<div class="form-group"> 
            <label class="control-label" for="subtitulo">Assinatura: </label>
            <input class="form-control" id="subtitulo" name="assinatura" type="text" value="<?=$dados['assinatura'];?>" required="required"/>
        </div>
		<div class="form-group"> 
            <label class="control-label" for="subtitulo">Data: </label>
            <input class="form-control" id="subtitulo" name="data" type="text" value="<?=$dados['data'];?>" required="required"/>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" name="Enviar">&ensp;receber&ensp;</button>
        </div>
</table>
</form>
<?php 
}
?>



