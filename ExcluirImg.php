<?php
 require "classes/DB.php";
 
 $conn=DB::getInstance()->getDB();
 
 if(isset($_GET["deletar"])){
	 
	 $id_foto=$_GET["id"];
	 
	 $querySel=$conn->prepare("SELECT * FROM fotos WHERE ID_FOTOS= ?");
	 $querySel->execute(array($id_foto));
	 
	 while($linhas= $querySel->fetchObject()){
		 
		 $imagem= $linhas->embed;
		 
		 }
		 
	 
	 $queryDel=$conn->prepare("DELETE FROM fotos WHERE ID_FOTOS= ?");
	 
	 if($queryDel->execute(array($id_foto))){
		 
		
		 unlink("upload/".$imagem);
		 
			echo '<script>alert("Imagem excluída com sucesso!");</script>';	 
		 
		 }else{
			 echo '<script>alert("Erro!Imagem não excluída!");</script>';	 
		 
			 }
	 
	 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

</body>
</html>