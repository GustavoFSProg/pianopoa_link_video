<?php if(isset($_POST["ok"])){
	  
	 	 
	
	$arquivo_nome=$_FILES["arquivo"]["name"];
	$arquivo_tamanho=$_FILES["arquivo"]["size"];
	$arquivo_temporario=$_FILES["arquivo"]["tmp_name"];
	
	  
				
				
				
	  $titulo=strip_tags(filter_input(INPUT_POST, "titulo"));		
	  
	   
	 
	 if($titulo != "" && $arquivo_nome != ""){
	  
	  
			
			 $campos= array($titulo,$arquivo_nome);
			 
			$sqlInsere="INSERT INTO FOTOS VALUES('',?, ?)";
			 $qryInsere=$conexao->prepare($sqlInsere);
			if($qryInsere->execute($campos)){
			 
			  echo '<div class="erros">IMAGEM CADASTRADA COM SUCESSO!</div>';
			}
		
			
	 }else{
		  
		  
		  
		  echo '<div class="mensagem">Preencha todos os campos</div>
 ';
   	  	   }
	  
	}
	  
	  
	  if(empty($arquivo_nome)){
				
				echo '<div class="erros">Selecione uma imagem.</div>';
				
				}
				
				elseif(!empty($arquivo_nome)){	
				
				
	//print_r($arquivo_nome);
	
	
		
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
				
			?>