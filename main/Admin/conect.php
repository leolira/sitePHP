<?PHP
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];


include "objetos/config.inc.php";


//Seleciona o banco de dados


//Comando SQL de verificação de autenticação
$sql = "SELECT *
FROM usuarios
WHERE login = '$login' 
AND senha = '$senha'";


$res = $conn -> query($sql);

$cont =0;

foreach ($res as $dados){
	$cont++;
}



//Caso consiga logar cria a sessão
if ($cont!=0) {
	
	echo "vazio";
	// session_start inicia a sessão
	session_start();
	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:index.php');
}

//Caso contrário redireciona para a página de autenticação
else {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	

	//Redireciona para a página de autenticação
	header('location:login.php');
	
}
?>