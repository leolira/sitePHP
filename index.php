<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LT.ARQ® - 3D Visualization</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        /*estrutura*/
        body{
            background: #E7E6E4;
            padding: 10px;
        }
        
        .container-fluid{
            background: #E7E6E4;
            padding: 10px;
            
        }
        
        div{
            border:0px solid black;
        }
        
        /*estutura <--FIM*/
        
        /*carousel*/
        .carousel-control.left, .carousel-control.right {
            background: #E7E6E4 !important;
            filter: progid: none !important;
            filter:none !important;
            background-image:none;
            outline: 0;
            opacity: 1;
        }
        
        .glyphicon.glyphicon-chevron-right,.glyphicon.glyphicon-chevron-left{
            color:#4C4D4E;
        }
        .carousel-indicators .active {
            background-color: #4C4D4E;
        }
        
        .carousel-indicators li {
            border: 1px solid #4C4D4E;
            border-radius: 10px;
        }
        /*carousel <--FIM*/
        
        
        /*nav nav-tabs*/
        .nav-tabs {
            border-bottom: none;
        }
        
        ul.nav-tabs li a{
	       font-family: abelregular;
	       font-size: 20px;
	       color: #4C4D4E; 
        }
        
        ul.nav-tabs li a:hover{
	       font-family: abelregular;
	       color: #FFF;
           background:none;
           transition:0.25s;
           border-color: #E7E6E4;
        }
        
        ul.nav-tabs > li > a:hover {
            border-color: none;
        }
        
        .dropdown-menu{
            
            background-color:  #E7E6E4;
            border-radius: 0px;
            box-shadow: none;
            border-width: 1px;
        }
        
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
            background-color:#BEBEBE;
            border: none;
            border-radius: 0px;
        }
      
        
       /*nav nav-tabs <--FIM*/

       
        /*rodapé*/    
        div#rodape  h4, a{
           font-family: abelregular;
           color: #4C4D4E; 
           border: 0px;
        }
        
        div#rodape h3{
            font-family: abelregular;
        }
        
        #cabRodape{
            text-align: center;
        }
        
        /*rodapé <--FIM*/  
        
        
        /*outros*/
        #logo img{
            display: block;
            margin: auto;

        }
        
        #serv{
            display: block;
            margin: auto;

        }
        
        a.home{
            font-family: abelregular;
	        text-decoration: none;
	        color: #272625;
	        font-size:14px;
        }
        
        h1, h2, h3, h4, label{
	        font-family:abelregular;
	        color: #272625;
        }
        
        /*outros <--FIM*/
        
        #preBox{
            width: auto;
        }
        
        .box{
            background-color: #272625;
            padding: 15px;
            color: white;
            font-family: abelregular;
            font-size: 15px;
            text-align: justify;
        }
        
        /*formulário*/
        
        .campo{
            background-color: #272625;
            margin:2px;
            padding: 5px;
            height: 30px;
            width: 250px;
            font-size: 15px;
            color: #E7E6E4;
        }
        
        .campoMsg{
            background-color: #272625;
            margin:2px;
            padding: 5px;
            height: 150px;
            width: 250px;
            font-size: 15px;
            color: #E7E6E4;
        }
        
        .buttonSend{
            margin:2px;
            padding: 5px;
            background-color: #272625;
            border-radius: 5px;
            color: #E7E6E4;  
        }
        
        .qtd{
            background-color: #272625;
            color: #E7E6E4;
            width:50px;
            padding:2px;
        }
        
        select{
            background-color: #272625;
            color: #E7E6E4;
            height:25px;
            
        }
        
        /*formulário <--FIM*/
        
    </style>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
		
<link rel="apple-touch-icon" sizes="57x57" href="lt.arq.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="lt.arq.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="lt.arq.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="lt.arq.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="lt.arq.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="lt.arq.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="lt.arq.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="lt.arq.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="lt.arq.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="lt.arq.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="lt.arq.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="lt.arq.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="lt.arq.ico/favicon-16x16.png">
<link rel="manifest" href="lt.arq.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="lt.arq.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	</head>
<div class="container">
    <body>
        <?php
        include_once("top.php");
        if(empty($_SERVER["QUERY_STRING"])){
			$var = "conteudo.php";
			include_once("$var");
		}else{
			$pg=$_GET['pg'];
			include_once("$pg.php");
		}
        
        include_once("bottom.php");
    
    ?>
    
    
    </body>
</div>

</html>