<?php
include "objetos/config.inc.php";
?>
<html>
<head>
	<script src="js/script.js" type="text/javascript"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="c.css">
	<!--<link href="css/style.css" rel="stylesheet">-->

</head>

<body style="background: black;" >

 <div class="container-fluid" style="background: black;">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
					
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        
                    </div>
					<div class="col-sm-12">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
						<img style=" margin: 25px;" class="img-responsive"  src="Admin.png" height="120" width="120" alt="Imagem"/>
						</div>
						<div class="col-sm-4">
						</div>
					</div>
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="conect.php" method="post">
							
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="Usuário">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="senha" placeholder="Senha">
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
 
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success">Login</a>
                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->
 
                                </div>
                             </div>
							</div>
						</div>
							</div>    
						</form>     
			</div>                     
			</div>  
	</div>
</body>
</html>
