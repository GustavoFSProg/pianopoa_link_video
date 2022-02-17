
<!doctype html>
<html>
<head>
<link href="css/ListaProd.css" rel="stylesheet" type="text/css">
<style type="text/css">

div#WinPesqProd{
		float:left;
		width:3070px;
		height:2800px;
		background:#E4E4E4;
		margin-top:2px;
		
		
		}

	/*paginacao da pesquisa produtos*/
div#WinPesqProd div#paginator{
	float:left;
	/*background:#fff;*/
	width:100%;
	margin-top:55px;
	}
	
div#WinPesqProd	div#paginator span.page{
		
		padding:4px 6px;
		background:#fff;
		border:1px solid #ccc;
		float:left;
		margin-right:6px;
		font:14px  "Lucida";
		color:#666;	
		}
		
	div#WinPesqProd	div#paginator a{
		
		padding:5px 6px;
		background:#fff;
		border:1px solid #ccc;
		float:left;
		margin-right:6px;
		font:14px  "Lucida";
		color:#666;	
		text-decoration:none;
		}
		
	div#WinPesqProd	div#paginator a:hover{
			background:#069;
		border-color:#036;
		color:#ccc;
		}
div#WinPesqProd	div#paginator strong{
		padding:4px 6px;
		background:#09f;
		float:left;
		color:#fff;
		margin-right:6px;
		}
	
</style>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>


<h1><span id="CadProd">Pesquisa de Fotos - Painel 1</span></h1>
 
<div id="WinPesqProd">

<table width="200" border="1">
  <tbody>
   <thead>
    <tr>
       <td>TITULO</td>
      <td>EMBED</td>
      <td>IMAGEM</td>
      <td>Editar</td>
      <td>Excluir</td>
   
    </tr>
    </thead>
    <?php 
	
	include "Config.php";
	
	require "classes/DB.php";
	
	 $conn=DB::getInstance()->getDB();
	 
	  $pg=(isset($_GET["pg"])) ? (int)htmlentities($_GET["pg"]) : '1';
 	$maximo= '8';
 
 	$inicio=(($pg * $maximo) - $maximo);
	 
   $cont= 0;
   $id=array();
   
   
   
   $querySel=$conn->prepare("SELECT * FROM fotos");
   $querySel->execute();
   
   while($linhas= $querySel->fetchObject()){
	   
	   $id[$cont]= $linhas->embed;
	   
	   $cont= $cont + 1;
	   
	   
   
   
	?>
    <tr>
    
      <td><?php echo $linhas->titulo;?></td>
      <td><?php echo $linhas->embed;?></td>
      
       
         <td><img src="upload/<?php echo $id[$cont - 1];?>" width="85" height="65" alt=""/></td>
   
      <td><CENTER><a href="EditProduto.php?editar=sim&id=<?php echo $linhas->id_fotos;?>"><img src="img/ico-mark.png" width="20" alt=""></center></a>
      
      </td>
      <td>
         <a href="ExcluirImg.php?deletar=sim&id=<?php echo $linhas->id_fotos;?>"><center><img src="img/Delete.png" width="20"></center></a>
     
      </td>
    </tr>
    
    <?php
   }
   ?>
  </tbody>
</table>



<div id="paginator">
  <?php
  $sql3="SELECT * FROM fotos";
	$sql_res=$conn->prepare($sql3);
	$sql_res->execute();
	
	$total=$sql_res->rowCount();
	$pags=ceil($total/$maximo);
	$links= '5';
	
	
echo "<span class='page'>Pagina:".$pg." de ".$pags."</span>";

echo '<a href="pesqFotos.php?pg=1">1</a>';

for($i= $pg - 1; $i <= $pg - $links ; $i++){
	
//	echo $i;
	if($i <= 0){}
	else{
		//echo "<a href='#'>entrou no if</a>";
		
	echo '<a href="pesqFotos.php?pg='.$i.'>'.($i - 1).'</a>';	
			}
}echo '<strong>'.$pg.'</strong>';


for($i = $pg + 1; $i <= $pg + $links; $i++){
	
	
	if($i > $pags){}
	else{
		
		echo '<a href="pesqFotos.php?pg='.$i.'>'.($i - 1).'</a>';	
		
		}
	
	}
	
	
	
echo '<a href="PesqFotos.php?pg='.$pags.'">Última Página</a>';
		
?>
	
</div>
</div>
</body>
</html>