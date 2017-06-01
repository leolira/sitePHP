<h1>Lista de Ilustracao</h1>
	<div class="table-responsive"> 
			<table class="table">
				<tr>
					<td style="width: 10px;">ID</td>
					<td style="background-color: black;color: white;">DESCRIÇÃO</td>
					<td style="background-color: black;color: white;">Tipo Ilustração</td>
					<td style="background-color: black;color: white;">ALTERAR</td>
					<td style="background-color: black;color: white;">EXCLUIR</td>
					
				</tr>
				<?php foreach ($todos as $dados){ 
					$cont++;
				?>
				<tr>
					<td style="background-color: black;color: white;"><?=$dados['id'];?></td>
					<td><?=$dados['descricao'];?></td>
					<td><?=$dados['tipoIlustracao'];?></td>
					<td><a href="?pg=alterarIlustracao&id=<?=$dados['id'];?>" ><span class="glyphicon glyphicon-edit aria-hidden="true" ></span></a></td>
					<td><a href="?pg=excluirIlustracao&id=<?=$dados['id'];?>"> <span class="glyphicon glyphicon-trash aria-hidden="true" ></span></td>
				</tr>
				
				<?php } ?>
			</table>
			
	</div>