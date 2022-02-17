
   
     <?php
	
	
	 
	 if(isset($_SESSION["logado"])){
		 
		
				  session_destroy(); 
		 
			 
		  
 
  
?>

<!doctype html>
<html>
<head>
<style type="text/css">
*{
 margin:0;  padding:0;	
}

body{
	background:url(img/BG.gif);
	}

   div#video{
float:left;
background:#FBFBFB;
width:110px;
height:20px;
margin-top:35px;
margin-left: -185px;
padding:5px 0;
color:#646464;
font: 14px "tahoma";

}


 a#linkvideo{
	color:#646464;
font: 14px "tahoma";
text-align:left;

	}

a#linkcadVideo{
	color:#646464;
font: 14px "tahoma";
text-align:left;

	}
	
	a#linkEditVideo{
	color:#646464;
font: 14px "tahoma";
text-align:left;

	}
	
	
   div#editVideo{

float:left;
background:#C0C0C0;
width:160px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 15px;
border: 1px solid #9B9B9B;
color:#646464;
font: 14px "tahoma";
text-align:left;

}



   div#cadVideo{

float:left;
background:#C0C0C0;
width:160px;
height:20px;
margin-top:-2px;
margin-left: 3px;
padding:5px 15px;
border: 1px solid #9B9B9B;
color:#646464;
font: 14px "tahoma";
text-align:left;

}
  div#manutencao{

float:left;
background:#C0C0C0;
width:160px;
height:20px;
margin-top:-2px;
margin-left: 3px;
padding:5px 15px;
border: 1px solid #9B9B9B;
color:#646464;
font: 14px "tahoma";
text-align:left;

}

a#linkManutencao{
	color:#646464;
font: 14px "tahoma";
text-align:left;

	}


a{ 
display:block;
  float:left;
  padding:1px 5px;
  text-decoration:none;
  
}

a:hover{ 

background:#DDDEC0;


}
div#painel{
float:left;	
background:#F4F4F4;
width:1050px;
height:880px;
margin-top: 50px;
margin-left: 50px;	
}

div#blocoTop{
	float:left;
background:#F4F4F4;
width:1040px;
height:100px;
margin-top: 3px;
margin-left: 3px;
border:1px solid #C4C4C4;
}

div#blocoTop div.textTop span.painel{
float:left;
font-weight:normal;
font:34px "Tahoma";
color:#A2A2A2;	
text-background:#f5f5f5;
margin-top:20px;
margin-left:125px;
background:-moz-linear-gradient(top #f5f5f5, #ccc);
background:-webkit-gradient(linear,left top, left bottom, from(#f5f5f5), to(#DADADA));
background:linear-gradient(topo, #f5f5f5,#DADADA);
text-align:center;


}


div#painel div#blocoLeft{
float: left;
background:#F4F4F4;
width:200px;
height:754px;
margin-top:3px;
margin-left: 3px;
border:1px solid #C4C4C4;
padding:5px 0;
}


div#painel div#blocoCenter{
float: left;
background:#F4F4F4;
width:835px;
height:740px;
margin-top:-742px;
margin-left:208px;
border:1px solid #C4C4C4;
}

div#painel div#blocoLeft div#blocoTitulo{
float: left;
color:#F4F4F4;
font: 16px "tahoma";
background:#606060;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
border:1px solid #939393;
padding:5px 0;
}

div#painel div#blocoLeft div#blocoSauda{
float: left;
color:#646464;
font: 12px "tahoma";
background:#FBFBFB;
width:180px;
margin-left:3px;
height:20px;
margin-top:0px;
padding:5px 0;
}


div#painel div#blocoLeft div#blocoSauda a#sair{
float:left;
margin-left:10px;	
margin-top:-1px;
}


div#painel div#blocoLeft div#blocoSauda span{
float:left;
margin-left:4px;	
}
div#painel div#blocoLeft div#blocoHome{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;

}

div#painel div#blocoLeft div#blocoHome a#linkHome{

color:#646464;
font: 14px "tahoma";
margin-left:4px;
}

div#painel div#blocoLeft div#blocoProdutos{
float:left;
background:#FCFCFC;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
font: 14px "tahoma";
color:#646464;
}

div#painel div#blocoLeft div#blocoProdutos span{
margin-left:5px;	
float:left;
background:#FCFCFC;
width:190px;
height:20px;
margin-top:-5px;
padding:5px 0;
font: 14px "tahoma";
color:#646464;
}


div#painel div#blocoLeft div#CadProdutos{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;

}

div#painel div#blocoLeft div#EditProd{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;

}

div#painel div#blocoLeft div#Gerencia{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}
div#painel div#blocoLeft div#Gerencia span.textoGerencia{
float:left;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}
div#painel div#blocoLeft div#CadProdutos a#linkProd{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



div#painel div#blocoLeft div#EditProd a#linkEditProd{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}

div#painel div#blocoLeft div#EditProd a#linkEditProd{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}

div#painel div#blocoLeft div#Gerencia a#linkGerencia{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



div#painel div#blocoLeft div#clientes{
float:left;
background:#FBFBFB;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;

}

div#painel div#blocoLeft div#clientes a#linkCli{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}


div#painel div#blocoLeft div#cadCli{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}

div#painel div#blocoLeft div#cadCli a#linkCadCli{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



div#painel div#blocoLeft div#listaCli{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}

div#painel div#blocoLeft div#listaCli a#linklistaCli{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



div#painel div#blocoLeft div#admim{
float:left;
background:#FBFBFB;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;

}


div#painel div#blocoLeft div#admim a#linkAdmim{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



div#painel div#blocoLeft div#cadNovo{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}


div#painel div#blocoLeft div#cadNovo a#linkcadNovo{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}


div#painel div#blocoLeft div#editAdm{
float:left;
background:#C0C0C0;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;
border: 1px solid #9B9B9B;
color:#9B9B9B;
}


div#painel div#blocoLeft div#editAdm a#linkeditAdm{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}


div#painel div#blocoLeft div#categ{
float:left;
background:#FBFBFB;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;

}




div#painel div#blocoLeft div#categ a#linkcateg{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}


div#painel div#blocoLeft div#subcateg{
float:left;
background:#FBFBFB;
width:190px;
height:20px;
margin-top:0px;
margin-left: 3px;
padding:5px 0;

}


div#painel div#blocoLeft div#subcateg a#linksubcateg{

color:#646464;
font: 14px "tahoma";
margin-left:5px;
}



	
	
 
	

div#painel div#blocoCenter div#grafico{
	width:610px;
	height:640px;
	background:#09f;
	padding:5px;
	
	}
	
	a#sair{
		padding:3px 8px;
		background:#ff8080;
		font:13px Tahoma;
		color:#FDFDFD;
		text-decoration:none;
		margin: 3px;
		
		}
	
	a#sair:hover{
		background:#731C1D;
		
		}
		
		
  
</style>
<!--<link href="Admin.css" rel="stylesheet" type="text/css"/>-->
<title>Painel Administração</title>
</head>

<body>

<div id="painel">
<div id="blocoTop">
<div class="textTop">
 <span class="painel">JORDANA BRUSA - PAINEL ADMINISTRATIVO </span>
</div>
</div>

<div id="blocoLeft">

<div id="blocoTitulo">
<span>&nbsp; GERENCIAMENTO</span>

</div>
<div id="blocoSauda">
<span>Olá, Jordana Brusa</span>
&nbsp;&nbsp;&nbsp;<a href="index.php?acao=sair" id="sair" >Sair</a>
</div>

<div id="blocoHome">
<a href="Index.php" id="linkHome">Home</a>
</div>

<div id="blocoHome">
<a href="TabelaEstatistics.php" id="linkHome" target="iframe1">Estatística</a>
</div>


<div id="blocoProdutos">
<span>Fotos - Painel 1</span>
</div>

<div id="CadProdutos">
<a href="CadFotos.php" id="linkProd" target="iframe1">Cadastrar Fotos</a>
</div>

<div id="EditProd">
<a href="PesqFotos.php" id="linkEditProd" target="iframe1">Pesquisar Fotos</a>
</div>



<div id="clientes">
<a href="pages/sidebar.php" id="linkCli" target="iframe1">Fotos - Painel 2</a>
</div>

<div id="cadCli">
<a href="CadFotos2.php" id="linkCadCli" target="iframe1">Cadastrar Fotos</a>
</div>


<div id="listaCli">
<a href="pesqFotos2.php" id="linklistaCli" target="iframe1">Pesquisar Fotos</a>
</div>




<div id="admim">
<a href="pages/sidebar.php" id="linkAdmim" target="iframe1">Textos - Painel 1</a>
</div>


<div id="cadNovo">
<a href="CadTextos_1.php" id="linkcadNovo" target="iframe1">Cadastrar Textos</a>
</div>


<div id="editAdm">
<a href="PesqTextos_1.php" id="linkeditAdm" target="iframe1">Pesquisar Textos</a>
</div>


<div id="admim">
<a href="pages/sidebar.php" id="linkAdmim" target="iframe1">Textos - Painel 2</a>
</div>


<div id="cadNovo">
<a href="CadTextos_2.php" id="linkcadNovo" target="iframe1">Cadastrar Textos</a>
</div>


<div id="editAdm">
<a href="PesqTextos_2.php" id="linkeditAdm" target="iframe1">Pesquisar Textos</a>
</div>



</div>
<div id="blocoCenter">

<iframe width="825" height="730" name="iframe1">
</iframe>

</div>




	
</div>
</div>
</body>
</html>
		<?php   
		  
			  }else{
				  
				  include "Proibida.php";
				  
				   }
  
 
?>
    