<div class="col-sm-9">
		  <h4><small>Posts mais recentes</small></h4>
		  <?php foreach ($todo as $dados){ 
					?>
		  <hr>
		  <h2><?=$dados['titulo'];?></h2> <!-- Pegar o Título no BD Admin-->
		  
		  <h5><span class="glyphicon glyphicon-time"></span> <?=$dados['assinatura'];?> </h5> <!-- Pegar Assinatura no BD Admin-->
		  
		  
		  <p><?=$dados['conteudo'];?></p><!-- Pegar Conteúdo no BD Admin-->
		  <p>Postado em :<?=$dados['data'];?></p><!-- Pegar Conteúdo no BD Admin-->
		  
		  <hr>
		  <br>
		  <?php } ?>
		  
	<nav aria-label="Page navigation">
	  <ul class="pagination">
		
		<?php
		
		$cont = 1;
		$num = 0;
		$valor = 0;
		
		
		foreach ($todos as $dados){
			$todos = array_reverse($dados);
			
			if($valor==$num){
				
				$valor+=5;?>
			<li><a href="?pg=main/postagens&id=<?=$dados['id'];?>"> <?=$cont++;?> </a></li>
			<?php }
		$num++;} ?>
		
		<li>
		  
		</li>
	  </ul>
	</nav>