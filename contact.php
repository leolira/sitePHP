<div class="container">
    <a href="index.php">home¬</a>
	<div class="row">				
        <div clas="col-md-12 col-sx-12">
            <h1>Contato</h1>
        </div>
        <div clas="col-md-12 col-sx-12">
            <div class="box" id="preBox">
	Se você está interessado em nossos serviços, preencha nosso formulário e nos diga que tipo de serviço você deseja, para que entremos em contato.        
			</div>
        <br>
        <div clas="col-md-12 col-sx-12">
    <form name="form1" action="enviar.php" method="post" >
        <h4>NOME:</h4>            
        <input type="text" class="campo" id="nome" name="nome" required="" 
data-validation-required-message="Por favor, digite seu nome" required="" >
        </div>
        <div clas="col-md-12 col-sx-12">
            <h4>E-MAIL:</h4>
            <input name="email" type="email" class="campo" data-validation-required-message="Por favor, digite seu e-mail." required="" >
        </div>
    
        <div clas="col-md-12 col-sx-12">					
            <h4>MENSAGEM:</h4>
            <textarea name="mensagem" class="campoMsg" data-validation-required-message="Por favor, digite uma mensagem." required="" ></textarea>
        </div>
    
        <input type="submit" value="ENVIAR" class="buttonSend" onclick="return validar()"/>
    </form>										
        </div>
    </div>
</div>
</div>
