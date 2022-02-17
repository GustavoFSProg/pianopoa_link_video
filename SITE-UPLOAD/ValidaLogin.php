<?php

require_once "classes/DB.php";

$conn= DB::getInstance()->getDB();

session_start();
//$conn=new PDO('mysql:host=pag_jordana.mysql.dbaas.com.br;dbname=pag_jordana','pag_jordana','jogu33')or print (mysql_error());
//print "Conexão Efetuada com sucesso!";

 

//$conn=new PDO('mysql:host=localhost;dbname=pag_jordana','root','')or print (mysql_error());
//print "Conexão Efetuada com sucesso!";


if(isset($_POST["entrar"])){
	 
	 
	 $email=$_POST["email"];
	 $senha=$_POST["senha"];
	 
	
	 
	 $sqlSel="SELECT * FROM admin";
	 $querySel=$conn->prepare($sqlSel);
	$querySel->execute();
		
		
	 
	foreach( $querySel as $linhas)
	{
		echo '<p>';
		//Nome do campo na tabela pesquisada
		$mail= $linhas["email"];
		$pass= $linhas["senha"];
		echo '</p>';
	}
 
				 
				 
				 if($mail == $email && $pass == $senha){
			 
			 $_SESSION["logado"]= 1;
			 
			 include "admin.php";
			 
			 }else{
				 
				 echo '<script>alert("Email ou senha incorretos!");</script><br><br><center><h1><a href="login.php">Voltar</a></h1></center>';
				 
				 } 
		 
		 
	 
	 }
	 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página Jordana Brusa</title>
</head>

<body background="img/BG.gif">
</body>
</html>