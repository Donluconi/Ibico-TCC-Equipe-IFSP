<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>	
<?php
session_start();
if((isset ($_SESSION['email']) == false) and (isset ($_SESSION['senha']) == false))
{
    
   header('location:../ibico/index.html');
    }

$logado = $_SESSION['Nome'];

?>
<script>
    	
    	$(function(){
    	var url = '../ibico/php/insere_pedido.php';
    	function carregando()
    	{
    		$('.loadPedido').fadeIn('slow');
    	}
    		$('.criaPedidoAjax').submit(function(){   			
                var dados = $(this).serialize();
                $.ajax({
                  url:url,
                  type: 'POST',
                  data: dados,
                  beforeSend: carregando,
                  success: function(retorno){
           
                  	if(retorno==1)
                  	{

                  		$('.erroPedido').html("Erro ao tentar registrar o pedido, por favor tente mais tarde");
                  		$('.loadPedido').fadeOut('slow');
                  	}
                  	else{

                 alert("Pedidos realizado com sucesso !");
                   window.location.href ="meuspedidos.php";
            		 }

               
                 
               }
                  
    	});
      return false;
     });
});
    </script>



    <link href="css/style.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- Titulo que fica na guia superior --> 
	<title>IBico Solutions</title>

	
	 <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Folha de Estilo - Stylesheet -->
    <link href="css/gallery-materialize.min.css" rel="stylesheet">

    <!-- Materiais de Icone - Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
			<!-- CSS  -->
			<link href="min/plugin-min.css" type="text/css" rel="stylesheet">
			<link href="min/custom-min.css" type="text/css" rel="stylesheet" >
			<script src="js/funcoes.js"></script>
		</head>


	<body id="top" class="scrollspy">

		<!-- Pr?? - Carregamento - Pre Loader -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		 
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		 
		</div>

<!-- Barra de Navega????o -->

 <div class="navbar-fixed">
    <nav id="nav_f" class="blue lighten-1" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
           
		   <a href="#" id="logo-container" class="brand-logo">IBico</a> 
		   
		   <!-- <img src="img/logo.png" widht="62px" height="62px"></a> -->
                <ul class="right hide-on-med-and-down">
				    
					<li><a href="index.html">Home</a></li>
					<li><a class='dropdown-button' href='#anuncios' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">An??ncios<i class="material-icons right">arrow_drop_down</i></a></li>
					
					<li><a class='dropdown-button' href='#pedidos' data-activates='anuncios-dropdown' data-belowOrigin="true" data-constrainWidth="false">Pedidos<i class="material-icons right">arrow_drop_down</i></a></li>
					
				    <li><a class='dropdown-button' href='#avaliacoes' data-activates='avaliacoes-dropdown' data-belowOrigin="true" data-constrainWidth="false">Avalia????es
					
					<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a href="sobrenos.php">Sobre n??s</a></li>
 
					<!-- ??cone "cabe??a de login" lado direito  -->
					
					<ul class="right hide-on-med-and-down">
					<li>
					<a class='right dropdown-button' href='#logar' data-activates='user_dropdown' data-belowOrigin="true" data-constrainWidth="false"><i class='material-icons'>account_circle</i></a>
					</li>
	                </ul>

					<!-- Lista dentro da cabe??a de Login -->
		
					<ul class="dropdown-content" id="user_dropdown">	
					
					<li><a href="meuperfil.php">Meu Perfil</a>

        			<!-- class = indigo - text --> 
					<li><a class="" href="#!">Ajustes</a></li>
					
				    <li><a class="modal-trigger" type="submit" name="action" href="../ibico/php/finalizaSessao.php">Sair</a>	
				    </ul>
					

					<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					</div>
	
				<!-- Estrutura Dropdown de An??ncios (o que vem depois que voc?? clica em an??ncios/pedidos/avalia????es - Dropdown Structure -->
					<ul>
					<ul id='feature-dropdown' class='dropdown-content'>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalcriaranuncio">Criar an??ncios</a></li>
					<li><a href="anuncios.php">Encontre an??ncios</a></li>
					<li><a href="meusanuncios.php">Meus an??ncios</a></li>
					
					
					</ul>
					
					
					<!-- Estrutura Dropdown de Pedidos - Dropdown Structure -->
					<ul>
					<ul id='anuncios-dropdown' class='dropdown-content'>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalcriarpedido">Criar pedido</a></li>
					<li><a href="pedidos.php">Encontre pedidos</a></li>
					<li><a href="meuspedidos.php">Meus pedidos</a></li>
										
					</ul>
					
					
						<!-- Estrutura Dropdown de Avalia????es - Dropdown Structure -->
					<ul>
					<ul id='avaliacoes-dropdown' class='dropdown-content'>
					<li><a href="meuperfil.php">Minhas Avalia????es</a></li>
					<li><a href="avaliacoes.php">Avalia????es de Profissionais</a></li>
					
					</ul>

					
				<!-- Constru????o para Mobile - Responsivo, quando voc?? diminui a p??gina ele aparece 3 tra??os pra exibir o menu (Em constru????o) --> 
				
                <ul id="nav-mobile" class="side-nav">
											 
				<li><a href="index.html">Home</a></li>
				<li><a href="#anuncios">An??ncios</a></li>	
				<li><a href="#pedidos">Pedidos</a></li>	
				<li><a href="#contato">Sobre n??s</a></li>
				<li><a href="#logar">Sair</a></li>				
					
				</ul>
				
                <!-- Os 3 tra??os -->
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			   
			
			</div>
        </div>
    </nav>
</div>
	
	
	<!-- Menu de Buscas (An??ncios e Pedidos - Home 2) -->
	
	
	
	
			<!-- BUSCAR AN??NCIOS - GUIA AN??NCIOS (CRIADO UM CARD COM OS DADOS DE BUSCA) -->
									
			
		<div class="row">
			<!-- <div class="col s12 m4 l3"> -->
			 <div class="col s12 m3">
			
		   <div class="nav-wrapper">
		   <ul class="tabs tabs-transparent">
		   <li class="tab"><a class="blue-text text-blue center-align" href="#cardmeuspedidos">Pedidos</a></li>
		  
           </ul>
		</div>
		
		
			
		
 <!-- CARD - BUSCAR AN??NCIOS- GUIA AN??NCIOS(CRIADO UM CARD COM OS DADOS DE BUSCA) --> 
  

  <div id="cardmeuspedidos" class="card-panel z-depth-5 col s12 m12 light-blue">
	
		<h4 class="white-text text-blue center-align" >Meus Pedidos</h4>	 
		
		
		<div class="collection">
        <a href="#!" class="collection-item active">Necessito de reparo na parede</a>
        <a href="#!" class="collection-item">M??quina de lavar quebrou</a>
        <a href="#!" class="collection-item">Procuro mec??nico de confian??a</a>
        <a href="#!" class="collection-item">Procuro pessoa que conserta tela de Smartphone</a>
		<a href="#!" class="collection-item">Or??amento de m??veis planejados</a>
        <a href="#!" class="collection-item">Or??amento de constru????o de piscina</a>
		<a href="#!" class="collection-item">Or??amento de m??veis planejados</a>
        <a href="#!" class="collection-item">Or??amento de constru????o de piscina</a>
		<a href="#!" class="collection-item">Or??amento de m??veis planejados</a>
        <a href="#!" class="collection-item">Or??amento de constru????o de telhado</a>
		<a href="#!" class="collection-item">Or??amento de grafiato</a>
        <a href="#!" class="collection-item">Or??amento de constru????o de por??o</a>
		
       
		
      </div>
		
		
		
      
	  
	  
 
				</div><!--card-->
				</div><!--col-->
				
				
	<!-- Os cards de Meus Pedidos -->
				
					<!-- <div class="col s9 13">
									<div id="cardexibir" class="card-panel z-depth-5"> -->
						
						
			<!--<div id="card-widgets"> -->
             
				<!-- Arrumar COL para responsividade futura, t?? dando pal em modo responsivo -->
				
                 <div class="col s5">
				  <ul id="task-card" class="collection with-header">
                    
					<li class="collection-header light-blue">
								
								
								<div id="profile-card" class="card">
                                    
									<div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/paredequebrad.jpg" alt="user background">
                                    </div>
                                    
									
									<div class="card-content">
                                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                         <i class="mdi-action-account-circle"></i>
                                        </a>

                                        <span class="card-title activator grey-text text-darken-4">Necessito de reparo na Parede!</span>
										
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Vinicius</p>
										
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i>vinicius@hotmail.com</p>

                                    </div>
                                    
									<div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Vinicius Eduardo<i class="mdi-navigation-close right"></i></span>
										
										 <img src="img/avatar.jpg" alt="" class="circle responsive-img activator card-profile-image">
                                        <p>Tive um problema de infiltra????o na parede, necessito de restaura????o e pintura.</p>
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Vinicius Eduardo</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> vinicius@hotmail.com</p>
                                        <p><i class="mdi-image-navigate-next cyan-text text-darken-2"></i>Categoria: Reformas e Servi??os Gerais</p>
                                        <p><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: Santos - SP</p>
										<p><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Gonzaga</p>
										
										<button class="btn blue" type="submit" name="action">Editar
										</button>
		
										<button class="btn blue" type="submit" name="action">Excluir
										</button>
                                    </div>
                                </div>
					  </li>
                      
                 </div>
               	
				
				<!-- Segundo CARD de Teste --> 
				
				 <div class="col s12 m6 l4">
				  <ul id="task-card" class="collection with-header">
				
                    <li class="collection-header light-blue">
					
                                <div id="profile-card" class="card">
								<h4 class="blue-text text-blue center-align" >Notifica????es</h4>	 
                                   
					<ul class="collapsible">
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Jos?? demonstrou interesse
					<span class="badge">1</span></div>
					
					<div class="collapsible-body">	
						
						<!--
					<ul><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Jos?? Carlos</ul>
					
                    <ul><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</ul>
                    <ul><i class="mdi-communication-email cyan-text text-darken-2"></i> vinicius@hotmail.com</ul>
                    <ul><i class="mdi-image-navigate-next cyan-text text-darken-2"></i>Categoria: Reformas e Servi??os Gerais</ul>
                    <ul><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: Santos - SP</ul>
					<ul><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Gonzaga</ul> 
					-->
					 <ul>
					 
					 <!-- Estrutura das estrelas de avalia????o --> 
					 
					 <a href="javascript:void(0)" onclick="Avaliar(1)">
					<img src="img/star0.png" id="s1"></a>

					<a href="javascript:void(0)" onclick="Avaliar(2)">
					<img src="img/star0.png" id="s2"></a>

					<a href="javascript:void(0)" onclick="Avaliar(3)">
					<img src="img/star0.png" id="s3"></a>

					<a href="javascript:void(0)" onclick="Avaliar(4)">
					<img src="img/star0.png" id="s4"></a>

					<a href="javascript:void(0)" onclick="Avaliar(5)">

					<img src="img/star0.png" id="s5"></a>
					
					 <li><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Jos?? Carlos
					
					
                    <li><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</li>
                    <li><i class="mdi-communication-email cyan-text text-darken-2"></i> josepedreiro@hotmail.com</li>
                    <li><i class="mdi-image-navigate-next cyan-text text-darken-2"></i>Categoria: Reformas e Servi??os Gerais</li>
					 <li><i class="mdi-action-wallet-travel prefix cyan-text text-darken-2"></i>Forma????o: Pedreiro Geral</li>
                    <li><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: Santos - SP</li>
					<li><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Gonzaga</li> 
					</ul>
					</div>
					</li>
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Marcio Farias demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Marcio deseja consertar a parede.</p></div>
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Carlos demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Carlos deseja consertar a parede.</p>
					 
					</div>
				
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Francisca demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Francisca deseja consertar a parede.</p></div>
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Joe demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Joe deseja consertar a parede.</p></div>
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Marcela demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Marcela deseja consertar a parede.</p></div>
					</li>
					</ul>
									
                                    </div>
                                </div>
                            </div>

                             <!-- Estrutura Modal - EXIBE O CADASTRO DE PEDIDO  -->
 <!-- Criando Modais  -->
 
<form class="col s12" name=criaAnuncio action="" method="post"> 
    <div id="modalcriaranuncio" class="modal modal-fixed-footer"> <!-- Rodap?? Fixo -->
      <div class="modal-content">
        <div class="container">
         
           
          <div class="row">
            <form class="col s12">
              <div class="row">
		 
                <div class="input-field col s12 l6">
					
                  <input id="title"  name ="Ped_title" type="text" required>
				  
                  <label for="title">Titulo do an??ncio</label>
                </div>
                
				
				
             
             
              <div class="row">
                <div class="input-field col s12 l6">
				
                </div>
				
				
				<div class="row" onload=""?>
                <div class="input-field col s12 l6"> 
  
				 	  <select name="Ped_estado" id ="estado_an" class = "browser-default"> 

				 	<?php
				  	
				  		include_once("../ibico/php/conexao_class.php");


  						$My = new MySQLiConnection();
				  		$sql_code ="SELECT Id, Nome, UF FROM Estado order by Nome ASC";
				  		$result = $My->query($sql_code) or die(mysql_error());
				  		foreach ($result as $estado) 
				  		{
				  	    $estadoUTF = utf8_encode($estado['Nome']);
				  		echo'<option value ="'.$estadoUTF.'">'.$estadoUTF.'</option>';

				  		}
				  	?>   
               </select>
                </div>
			  </div>
			   
			   
			  <!-- <label for="estado">Estado</label> -->
			   
				
				<div class="input-field col s12 l6">
					<div class="row">
				 <select name="Ped_municipio" id="municipios_an" class = "browser-default">

				 <script>
				 	
						$("#estado_an").on("change", function(){


						var idEstado = $("#estado_an").val();
						$.ajax({
							url:'../ibico/php/carregaMunicipios.php',	
							type: 'POST',
							data: {Nome : idEstado},
							beforeSend: function(){
								
								$("#municipios_an").html("Carregando..");
							},
							success: function(retorno)
							{
								
								

								$("#municipios_an").html(retorno);
							},
							error: function(retornoErro)
							{
								
								 
								$("#municipios_an").html("Houve um erro ao carregar !");
							}
						});

						});
				</script>
			  
			  
				
					  <!-- <select name="Ped_municipio" class = "browser-default" required> -->
	                <!--   <option value = "" selected>Selecione a cidade</option>	-->	 
	               </select>
	                </div>			  
                </div>
				
				
				  <div class="input-field col s12 l6">
					
					  <input id="title"  name ="Ped_bairro" type="text" required>
				  
                  <label for="title">Bairro</label>	 
	               </select>
				  
				 </div>
			  
			
                <div class="input-field col s12">
               <select  name="Ped_categoria" class = "browser-default" required>
                    <option value = ""  selected>Selecione uma categoria</option>
                  <option value = "1">Inform??tica</option>
                  <option value = "2">Aparelhos Eletr??nicos e Eletrodom??sticos</option>            
				  <option value = "3">Aulas</option>
				  <option value = "4">Autos</option>
				  <option value = "5">Consultoria</option>
				  <option value = "6">Eventos</option>
				  <option value = "7">Moda e Beleza</option>
				  <option value = "8">Reformas e Servi??os Gerais</option>
				  <option value = "9">Sa??de</option>
				  <option value = "10">Servi??os Dom??sticos</option>
				  <option value = "11">Com??rcio</option>
				  <option value = "12">Esportes e Lazer</option>
               </select>
			   
		
			</div> 
			
			  <div class="input-field col s12 16">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Descreva seu an??ncio</label>
            <h7><b>Exemplo:</b> forma????o acad??mica, certifica????es, tempo de experi??ncia.</h7>

          </div>

        	  
			 
			
				<div class="input-field col s12 l6">
            <div class="file-field input-field">
                <div class="btn blue">
                    <span>Adicionar Imagem</span>
                    <input type="file" name="image">
                </div> 
            </div>
        </div>

				<!-- Caminho da Imagem <div class="file-path-wrapper">
                    <input type="text" class="file-path" placeholder="Escolha uma Imagem">
                </div> -->
	</div>
	    
			 
			 <!--<div class="input-image-flash-on col s12 l6">
				<button class="btn waves-effect waves-light center blue" type="submit" name="action">Adicionar Imagem
				</button>
				</div> -->
			  	  
		</div>	
    </form>
    <!--Criando pedidos--!>


          </div>
        </div>
      </div>
      
      
	  <div class="modal-footer">
	  <!-- btn waves-effect waves-light center -->
	  
	  <button class="btn blue" type="submit" name="action">Criar An??ncio
		<!-- logotipo de sair <i class="fa fa-sign-in right"></i> -->
		</button>
        <!-- Outro tipo de efeito no bot??o de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
      </div>
    </div>
	 </div>

	 <form  name="criaPedido" class="criaPedidoAjax"> 
    <div id="modalcriarpedido" class="modal modal-fixed-footer"> <!-- Rodap?? Fixo -->
      <div class="modal-content">
        <div class="container">
         
           
          <div class="row">
            <form class="col s12">
              <div class="row">
		 
                <div class="input-field col s12">
					
                  <input id="title"  name ="Ped_title" type="text" required>
				  
                  <label for="title">Titulo do pedido</label>
                </div>
                
             
              <div class="row">
                <div class="input-field col s12 16">
				 <select name="Ped_estado" id ="estado" class = "browser-default"> 

				  <?php
				  	
				  		include_once("../ibico/php/conexao_class.php");


  						$My = new MySQLiConnection();
				  		$sql_code ="SELECT Id, Nome, UF FROM Estado order by Nome ASC";
				  		$result = $My->query($sql_code) or die(mysql_error());
				  		foreach ($result as $estado) 
				  		{
				  	    $estadoUTF = utf8_encode($estado['Nome']);
				  		echo'<option value ="'.$estadoUTF.'">'.$estadoUTF.'</option>';

				  		}
				  	?>   
               </select>
                </div>
				
				
				<div class="row" onload="">
                <div class="input-field col s12 16"> 
  
				 
                </div>
			  </div>
			   
			   
			  <!-- <label for="estado">Estado</label> -->
			   
				
				<div class="input-field col s12 l6">
					<div class="row">
				 <select name="Ped_municipio" id="municipios" class = "browser-default">
                  <option>Munic??pio</option>
              
				 <script>
				 	
						$("#estado").on("change", function(){


						var idEstado = $("#estado").val();
						$.ajax({
							url:'../ibico/php/carregaMunicipios.php',	
							type: 'POST',
							data: {Nome : idEstado},
							beforeSend: function(){
								
								$("#municipios").html("Carregando..");
							},
							success: function(retorno)
							{
								
								

								$("#municipios").html(retorno);
							},
							error: function(retornoErro)
							{
								
								 
								$("#municipios").html("Houve um erro ao carregar !");
							}
						});

						});
				</script>
				
					  <!-- <select name="Ped_municipio" class = "browser-default" required> -->
	                <!--   <option value = "" selected>Selecione a cidade</option>	-->	 
	               </select>
	                </div>			  
                </div>
				
				
				  <div class="input-field col s12 l6">
					
					  <input id="title"  name ="Ped_bairro" type="text" required>
				  
                  <label for="title">Bairro</label>	 
	               </select>
				  
				 </div>
				 
				 <select name="Ped_categoria" class="browser-default" required="">
                    <option value="" selected="">Selecione uma categoria</option>
                  <option value="Inform??tica">Inform??tica</option>
                  <option value="Aparelhos Eletr??nicos e Eletrodom??sticos">Aparelhos Eletr??nicos e Eletrodom??sticos</option>            
				  <option value="Aulas">Aulas</option>
				  <option value="Autos">Autos</option>
				  <option value="Consultoria">Consultoria</option>
				  <option value="Eventos">Eventos</option>
				  <option value="Moda e Beleza">Moda e Beleza</option>
				  <option value="Reformas e Servi??os Gerais">Reformas e Servi??os Gerais</option>
				  <option value="Sa??de">Sa??de</option>
				  <option value="1Servi??os Dom??sticos">Servi??os Dom??sticos</option>
				  <option value="Com??rcio">Com??rcio</option>
				  <option value="Esportes e Lazer">Esportes e Lazer</option>
               </select>
			  
			
               
			
			  <div class="input-field col s12 16">
            <textarea id="textarea2" class="materialize-textarea" name="Ped_descrava" data-length="120"></textarea>
            <label for="textarea2">Descreva seu pedido</label>
          </div>
        	  
			  <center><img src="../ibico/img/ajax-loader.gif" alt="carregando" class="loadPedido"/></center>
         <font color="red"<p><center><h7 class="erroPedido"></h7></center></p></font>
			
				<div class="input-field col s12 l6">
            <div class="file-field input-field">
                <div class="btn blue">
                    <span>Adicionar Imagem</span>
                    <input type="file" name="image">
                </div> 
            </div>
        </div>
        

				<!-- Caminho da Imagem <div class="file-path-wrapper">
                    <input type="text" class="file-path" placeholder="Escolha uma Imagem">
                </div> -->
	</div>
	    
			 
			 <!--<div class="input-image-flash-on col s12 l6">
				<button class="btn waves-effect waves-light center blue" type="submit" name="action">Adicionar Imagem
				</button>
				</div> -->
			  	  
		</div>	
    
          </div>
        </div>
      </div>


      
      
	  <div class="modal-footer">
	  <!-- btn waves-effect waves-light center -->
	  
	  <button class="btn blue" type="submit" name="action">Criar Pedido
		<!-- logotipo de sair <i class="fa fa-sign-in right"></i> -->
		</button>
		</form>
        <!-- Outro tipo de efeito no bot??o de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
      </div>
    </div>
	 </div>
   

	 
<!-- Fim das modais -->
	
	 
<!-- Fim do cadastro de pedido -->
	

							
								


<!--Rodap?? -->

<footer id="contatorodape" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contatorodape.php" method="post">
				 <h5 class="white-text">Envie-nos uma mensagem</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Mensagem</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Enviar
                               <!-- <i class="mdi-content-send right white-text"></i> -->
                            </button>
                        </div>
                    </div>
                </form>
            </div>
           


		   <div class="col l3 s12">

				<h5 class="white-text">IBico Solutions</h5>
                <ul>
                    <li><a class="white-text" href="index.html">Home</a></li>
                   <!-- <li><a class="white-text" href="http://www.X">Blog</a></li> -->
                </ul>
			</div>
			
			
			
            <div class="col l3 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/donluconi">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	
	
	
    <div class="footer-copyright default_color">
        <div class="container">
            Todos os direitos reservados <a class="white-text" href="http://ibico.com.br">IBico Solutions</a>.  <a class="white-text" href="http://cbt.ifsp.edu.br">IFSP Campus Cubat??o</a>
        </div>
    </div>
</footer>




    <!--  Scripts -->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	<script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
	<script src="js/ion.rangeSlider.js"></script>
	
	

    </body>
</html>
