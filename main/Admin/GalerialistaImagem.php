<h1>Lista de Imagens da galeria</h1>
	<div class="table-responsive"> 
			<table class="table">
				<tr>
					<td style="width: 10px;">ID</td>
					<td style="	color: #0034A1;">DESCRIÇÃO</td>
					<td style="	color: #0034A1;">DATA</td>
					<td style="	color: #0034A1;">ILUSTRACAO</td>
				</tr>
				<?php foreach ($todos as $dados){ 
					$cont++;
				?>
				<tr>
					<td style="background-color: black;color: white;"><?=$dados['id'];?></td>
					<td><?=$dados['descricao'];?></td>
					<td><?=$dados['data'];?></td>
					<td><?=$dados['ilustracao'];?></td>
				</tr>
				
				
				
				<?php } ?>
			</table>
			
	</div>