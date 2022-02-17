<!doctype html>
<html>
<head>

<link href="css/CadProd.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Documento sem título</title>
</head>



<?php

require_once "classes/DB.php";

 require "ConfigUpload.php";
  
	session_start();
	
 
  
  $conn=DB::getInstance()->getDB();



   if(isset($_POST["ok"])){
	   
	   
	   $arquivo_nome=$_FILES["arquivo"]["name"];
	$arquivo_tamanho=$_FILES["arquivo"]["size"];
	$arquivo_temporario=$_FILES["arquivo"]["tmp_name"];
	
	$titulo=strip_tags(filter_input(INPUT_POST,"titulo"));
	
	if($arquivo_nome != "" && $titulo != ""){
		
		$id='';
		
		$campos=array($titulo, $arquivo_nome);
		
		$sqlInsere="INSERT INTO fotos VALUES('', ?, ?)";
		$queryInsere=$conn->prepare($sqlInsere);
		
		if($queryInsere->execute($campos)){
			
		  echo '<div class="erros">IMAGEM CADASTRADA COM SUCESSO!</div>';
		
			
			}else{
				echo '<div class="erros">Erro! Imagem não cadastrada</div>';
				
				}
		
		
		
	}
	
	
		
		if(empty($arquivo_nome)){
			
				echo '<div class="erro">Preencha todos os campos</div>';
			
			
			}elseif(!empty($arquivo_nome)){
				
				 $ext=strrchr($arquivo_nome,".");
		 
	 	$nome_final=($config_upload["renomeia"] ? md5 (time()).$ext : $arquivo_nome);
		$caminho=$config_upload["caminho_absoluto"].$nome_final;
		
		if(move_uploaded_file($arquivo_temporario,$caminho)){
			
			echo "UPLOAD EFETUADO COM SUCESSO!";
			
			
			
		}else
			{
				
				echo "Erro no Upload!";
				
				}
			}	
				
				
				}
	   
	  	
	   
	
  
?>
 <body>
 <h1><span id="CadProd">Cadastrar Fotos - Painel 1</span></h1>
 
 
 <div id="cadastroProd">
 <form action="CadFotos.php" method="post" enctype="multipart/form-data">
 
 <br><br>
 
	<label><span>Imagem: </span><input type="file" name="arquivo"><br><br>
    <input type="hidden" name="ok" value="ok"></label>
    
 <label><span> Titulo</span><br><input type="text" size="50" name="titulo" id="titulo"><Br><br></label>
 
 					
<br><br><br>
  <input type="submit" value="Cadastrar" class="btn">
 
  
 </div>
 </form>
 </div>
 
 
 
 

</body>
</html>