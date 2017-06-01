<div class="col-sm-9">
		  <h4><small>Posts mais recentes</small></h4>
		  <?php foreach ($busca as $dados){ 
					?>
		  <hr>
		  <h2><?=$dados['titulo'];?></h2> <!-- Pegar o Título no BD Admin-->
		  
		  <h5><span class="glyphicon glyphicon-time"></span> <?=$dados['assinatura'];?> </h5> <!-- Pegar Assinatura no BD Admin-->
		  
		  
		  <p><?=$dados['conteudo'];?></p><!-- Pegar Conteúdo no BD Admin-->
		  <p>Postado em: <?=$dados['data'];?></p><!-- Pegar Conteúdo no BD Admin-->
		  
		  <hr>
		  <br>
		  <?php } ?>