<div>
<script src="js/jquery-3.2.1.js"></script>    
<script src="js/dform.js"></script>
    
<a href="index.php">home¬</a>
    <div class="col-md-12 col-sx-12">
        <h1>Peça o seu orçamento</h1>
    </div>
    <div class="col-md-12 col-sx-12">
       <form action="?pg=main/pedirOrcamento" mehotd="post">
        <div class="col-md-12 col-sx-12">
            <h4>Nome:</h4>
   			<input type="text" name="nome"  id="nome" class="campo">
        </div>
        <div class="col-md-12 col-sx-12">
   			<h4>E-mail:</h4>
   			<input type="email" name="email"  id="email" class="campo">
   		</div>
        <div class="col-md-12 col-sx-12">
   			<h4>Telefone:</h4>
   			<input type="text" name="telefone" id="telefone" class="campo">
        </div>  
           
            <div id="dynamicDiv">
            <h4>Selecione o tipo que será digitalizado: </h4>
                <p>
                <select>
                    <option selected="selected" disabled>Selecione tipo</option>
                    <option value="imgExt">Imagem externa</option> 
                    <option value="imgInt">Imagem interna</option>
                    <option value="imgHum">Planta Humanizada</option>
                    <option value = "video">Video animação</option>
                </select>                    
                <label for="qtd_prod">Qtd: </label>
                <input type="number" id="qtd_prod" class="qtd">
            </br>
                <a href="javascript:void(0)" id="addInput">(+) novo item</a>
                </p>
            </div>
            </br>
            <div class="col-md-12 col-sx-12" id="dynamicDiv">
            <input type="submit" value="ENVIAR" class="buttonSend" onclick="return validar()"/>
            </div>
        </form>
    </div>
</div>