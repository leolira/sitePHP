<h1>Lista Blog</h1>
	<div class="table-responsive"> 
			<table class="table">
				<tr>
					<td style="width: 10px;">ID</td>
					<td style="background-color: black;color: white;">Titulo</td>
					<td style="background-color: black;color: white;">Conteudo</td>
					<td style="background-color: black;color: white;">Assinatura</td>
					<td style="background-color: black;color: white;">Data</td>
					<td style="background-color: black;color: white;">ALTERAR</td>
					<td style="background-color: black;color: white;">EXCLUIR</td>
					
				</tr> 
				<?php foreach ($todos as $dados){ 
					$cont++;
				?>
				<tr>
					<td style="background-color: black;color: white;"><?=$dados['id'];?></td>
					<td><?=$dados['titulo'];?></td>
					<td><?=$dados['conteudo'];?></td>
					<td><?=$dados['assinatura'];?></td>
					<td><?=$dados['data'];?></td>
					<td><a href="?pg=alterarBlog&id=<?=$dados['id'];?>" ><span class="glyphicon glyphicon-edit aria-hidden="true" ></span></a></td>
					<td><a href="?pg=excluirBlog&id=<?=$dados['id'];?>"> <span class="glyphicon glyphicon-trash aria-hidden="true" ></span></td>
				</tr>
				
				<?php } ?>
			</table>
			
	</div>