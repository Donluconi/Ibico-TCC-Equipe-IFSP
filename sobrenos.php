<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- verificando se o juery está incluso -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">

    <!-- jquey para validação do login--> 
    <script>
    	
    	$(function(){
    	var url = '../ibico/php/valida.php';
    	function carregando()
    	{
    		$('.load').fadeIn('slow');
    	}
    		$('.formularioLogin').submit(function(){   			
                var dados = $(this).serialize();
                $.ajax({
                  url:url,
                  type: 'POST',
                  data: dados,
                  beforeSend: carregando,
                  success: function(retorno){

                  	if(retorno==1)
                  	{
                     
                  	$('.erroSenha').html("email ou senha inválidos !");
                  	$('.load').fadeOut('slow');

                  	}else{

                 alert(retorno);

               
               window.location.href ="anuncios.php";
               }
                 }
    	});
      return false;
     });
});
    </script>



    <!-- jquey para registro do usuario do login--> 
    <script>
    	
    	$(function(){
    	var url = '../ibico/php/insere.php';
    	function carregando()
    	{
    		$('.loadCadastro').fadeIn('slow');
    	}
    		$('.cadastroUsuario').submit(function(){   			
                var dados = $(this).serialize();
                $.ajax({
                  url:url,
                  type: 'POST',
                  data: dados,
                  beforeSend: carregando,
                  success: function(retorno){

                  	if(retorno>1)
                  	{
                     if(retorno>2)
                     {

                     	if(retorno>3)
                     	{

                     	$('.emailCadastrado').html("");
                     	
                     	alert("Cadastro realizado com sucesso !");
					           window.location.href ="index.html";

                     	}

                     	else{
	                    $('.emailCadastrado').html("Preencha apenas números nos campos telefone e celular");
	                  	$('.loadCadastro').fadeOut('slow');

                     	}

                     }

                     else{

                  	$('.emailCadastrado').html("É preciso aceitar os termos para continuar !");
                  	$('.loadCadastro').fadeOut('slow');
                     }                 	

                  	}else{

                  	$('.emailCadastrado').html("Email já cadastrado !");
                  	$('.loadCadastro').fadeOut('slow');
                  }

                // alert(retorno);

               
              // window.location.href ="index.html#modalentrar";
               
                 }
    	});
      return false;
     });
});
    </script>
    
	
	<!-- Titulo que fica na guia superior --> 
	<title>IBico Solutions</title>

	
	 <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Folha de Estilo - Stylesheet -->
    <link href="css/gallery-materialize.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- Materiais de Icone - Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
			<!-- CSS  -->
			<link href="min/plugin-min.css" type="text/css" rel="stylesheet">
			<link href="min/custom-min.css" type="text/css" rel="stylesheet" >
		</head>


	<body id="top" class="scrollspy">

		<!-- Pré - Carregamento - Pre Loader -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		 
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		 
		</div>

<!-- Barra de Navegação -->

 <div class="navbar-fixed">
    <nav id="nav_f" class="blue lighten-1" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
           
		   <a href="index.html" id="logo-container" class="brand-logo">IBico</a> 
		   
		   <!-- <img src="img/logo.png" widht="62px" height="62px"></a> -->
                <ul class="right hide-on-med-and-down">
				    
					<li><a href="index.html">Home</a></li>
					<li><a class='dropdown-button' href='#anuncios' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Anúncios<i class="material-icons right">arrow_drop_down</i></a></li>
					
					<li><a class='dropdown-button' href='#pedidos' data-activates='anuncios-dropdown' data-belowOrigin="true" data-constrainWidth="false">Pedidos<i class="material-icons right">arrow_drop_down</i></a></li>
					
				    <li><a class='dropdown-button' href='#avaliacoes' data-activates='avaliacoes-dropdown' data-belowOrigin="true" data-constrainWidth="false">Avaliações
					
					<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a href="sobrenos.php">Sobre nós</a></li>
 
					<!-- ícone "cabeça de login" lado direito  -->
					
					<ul class="right hide-on-med-and-down">
					<li>
					<a class='right dropdown-button' href='#logar' data-activates='user_dropdown' data-belowOrigin="true" data-constrainWidth="false"><i class='material-icons'>account_circle</i></a>
					</li>
	                </ul>

					<!-- Lista dentro da cabeça de Login -->				
					<ul class="dropdown-content" id="user_dropdown">	
					<li>
					<a class="modal-trigger" type="submit" name="action" href="#modalregistrar">Registrar-se
					</a>	
					<li>
					<a class="modal-trigger" type="submit" name="action" href="#modalentrar">Entrar
					</a>
					
					
				    <!-- class = indigo - text --> 
					<li><a class="" href="#!">Ajustes</a></li>
					</ul>
					
					<!-- <ul class="right hide-on-med-and-down">
					<li>
					<a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
					</li>
					</ul> -->

					<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					</div>

					
				
					<!-- Estrutura Dropdown de Anúncios (o que vem depois que você clica em anúncios/pedidos/avaliações - Dropdown Structure -->
					<ul>
					<ul id='feature-dropdown' class='dropdown-content'>
				    <li><a class="modal-trigger" type="submit" name="action" href="#modalentrar">Meus anúncios</a></li>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalentrar">Encontre anúncios</a></li>				
					</ul>
					
					
					<!-- Estrutura Dropdown de Pedidos - Dropdown Structure -->
					<ul>
					<ul id='anuncios-dropdown' class='dropdown-content'>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalentrar">Meus pedidos</a></li>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalentrar">Encontre pedidos</a></li>
									
					</ul>

				    <!-- Estrutura Dropdown de Avaliações - Dropdown Structure -->
					<ul>
					<ul id='avaliacoes-dropdown' class='dropdown-content'>
					<li><a class="modal-trigger" type="submit" name="action" href="#modalentrar">Minhas avaliações</a></li>
					<li><a href="avaliacoes.php">Avaliações de Profissionais</a></li>
					
					</ul>

					
					<!-- Dropdown Structure - Lista dentro da cabeça de Login -->
					
					<ul class="dropdown-content" id="user_dropdown">	
					<li>
					<a class="modal-trigger" type="submit" name="action" href="#modalregistrar">Registrar-se
					</a>
					
					<li>
					<a class="modal-trigger" type="submit" name="action" href="#modalentrar">Entrar
					</a>
														
				    <!-- class = indigo - text --> 
					<li><a class="" href="#!">Ajustes</a></li>
					</ul>
					
					</ul>
					

				<!-- Construção para Mobile - Responsivo, quando você diminui a página ele aparece 3 traços pra exibir o menu (Em construção) --> 
				
                <ul id="nav-mobile" class="side-nav">
											 
				<li><a href="#home">Home</a></li>
				<li><a href="#anuncios">Anúncios</a></li>	
				<li><a href="#pedidos">Pedidos</a></li>	
				<li><a href="#contato">Sobre nós</a></li>
				<li><a href="#logar">Entrar</a></li>				
					
				</ul>
				
                <!-- Os 3 traços -->
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			   
			
			</div>
        </div>
    </nav>
</div>


  

<!-- Palavra IBico com efeito cadastre-se já. 


<!--Hero-->
<div id="intro" class="section no-pad-bot">
    <div class="container">
        <h4 class="center header text_h2">Nossa equipe de desenvolvedores busca auxiliar a intermediação de serviços que possa atender tanto aqueles que possuem serviços a oferecer quanto aqueles que mostram interesse em adquiri-los. Essa ideia se aproxima de outros sites já existentes como o OLX e o Mercado Livre que encontram sucesso no Brasil por permitirem o benefício das três partes envolvidas: o vendedor, o comprador e o intermediador.
		
		<br>IBico, um novo jeito de contratar serviços.<br> <span class="span_h4">
    </div>
</div>



<!-- Equipe avatares -->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b">Equipe IBico Solutions</h2>
        <div class="row">
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/gabriel.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Gabriel Luconi<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/gluconi">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/barack.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Evandro Ignacio<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Desenvolvedor</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Guilherme Martins <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Desenvolvedor</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
			<div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/paulo.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Paulo Benjamin<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Desenvolvedor</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
			
			
			 <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/lucas.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lucas Freitas<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Analista</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
			
			
			
			
        </div>
		
		
    </div>
	
	
</div>





<!--Introdução e Serviços página Home (antes do usuário estar logado) -->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> Solução para clientes e profissionais<br> <span class="span_h2"> seu melhor negócio.</span> </h2>
            </div>
			
			<h1 class="text_h2 center header cd-headline letters type" color="black">
				<span>IBico</span> 
				<span class="cd-words-wrapper waiting">
                <b class="is-visible">negócios</b>
                <b>já se registrou?!</b>
                <b></b>
				</span>
				</h1>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Acelera a intermediação entre o cliente e o profissional</h5>
                    <p class="light center">Encontre um profissional qualificado para os mais variados serviços ou seja você um profissional qualificado e aumente sua renda.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">Experiência do Usuário</h5>
                    <p class="light center">Através de uma plataforma intuitiva você localizará o profissional mais próximo de sua residência e com as melhores avaliações.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Totalmente acessível</h5>
                    <p class="light center">Acesse através de todos os dispositivos, seja smartphone, tablet ou computador de forma gratuita.</p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal - Tela de Login, quando eu clicar em login ele me exibe o form. -->

 <form name="formLogin" class="formularioLogin">
<div id="modalentrar" class="modal modal-fixed">
      <div class="modal-content">
        <div class="container">
  
  <body class="teal lighten-2">   	
   	
	<h4 class="center">Login</h4>	 
		<div class="row">
	   
		
		
	<div class="row">
            
		<div class="input-field col s12 m12">
        <i class="mdi-communication-email prefix"></i>
       <!-- <input id="icon_email" type="email" requeired name="lg-login" class="validate"/>--> 
        <input id="icon_email" type="email" required name="lg-login"/>
        <label for="icon_email">Exemplo: josemaria@outlook.com</label>
		</div>

		<div class="input-field col s12"> 
		<i class="mdi-action-https prefix"></i> 
		<input id="password" type="password" required name="lg-senha"/>
		<label for="password">Senha</label> </div>

	</div>
	<center><img src="../ibico/img/ajax-loader.gif" alt="carregando" class="load"/></center>
	  <!-- Linha azul de " Esqueceu a Senha? " no form login --> 
	  <font color="red"<p><center><h7 class="erroSenha"></h7></center></p></font>
	<p class="margin center-align medium-small">
        <a class="waves-effect waves-light modal-trigger" href="#modalesqueceusenha">Esqueceu a senha?</a>
          </p>
				

		<!-- LOGOTIPO DE "CADEADO ABERTO"
		<div class="input-field col s12 m12">
        <i class="fa fa-unlock-alt prefix"></i>
		</div> -->
		
		<!--Checkbox para relembrar acesso --> 
		
		<div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="relembre" id="relembre">
                            <label for="relembre">Relembre-me</label>
                        </div>

   
		</div> <!--row = linha -->
	
		<button class="btn waves-effect waves-light" type="submit" name="entrar" value="entrar" id="entar">Entrar
		<i class=""></i>
		</button>
		
		<button class="modal-trigger btn waves-effect waves-light" type="submit" name="action" href="#modalregistrar">Registre-se
		<i class=""></i>
		</button>
		</form>
		
		</div><!--card-->
		</div><!--col = coluna -->
		</div><!--row = linha -->
	 </div><!--conatiner-->

  <!--Import jQuery before materialize.js
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
      <script type="text/javascript" src="js/materialize.min.js"></script>


	  <!-- Estrutura Modal - Formulário de Registre-se da Home -->
    <div id="modalregistrar" class="modal modal-fixed-footer"> <!-- Rodapé Fixo -->
      <div class="modal-content">
        <div class="container">
         
                
          <div class="row">
         <form name="cdUsuario" class="cadastroUsuario">
              <div class="row">
		 
                <div class="input-field col s12 l6">
					<i class="mdi-action-account-circle prefix"></i> 
                  <input id="nome" name="nome" type="text">
				  
                  <label for="nome">Primeiro Nome</label>
                </div>
                <div class="input-field col s12 l6">
                  <input id="sobrenome" required name="sobrenome" type="text">
                  <label for="sobrenome">Sobrenome</label>
                </div>
              </div>
              <div class="row">

                <div class="input-field col s12 l6">
				<i class="mdi-communication-email prefix"></i>
                  <input id="email"  required name="email" type="email" class="validate">
                  <label for="icon_email" data-error="Incorreto" data-success="Válido">E-mail</label>
                </div>
                <div class="input-field col s12 l6">
                  <p>
                    <input required name="sexo" type="radio" id="rd_masculino"/>
                    <label for="rd_masculino">Masculino</label>
                    <input required name="sexo" type="radio" id="rd_feminino" />
                    <label for="rd_feminino">Feminino</label>
                  </p>
                </div>
              </div>
             
              <div class="row">
                <div class="input-field col s12 l6">
				<!-- Máximo de 11 caracteres, o suficiente para um número padrão DDD + número, exemplo: 13991636095 -->
                 <i class="mdi-communication-call prefix"></i> 
				  <input id="telefone"  name="telefone" type="text" maxlength="11"> <!-- minlength="11" -->
				 
                  <label for="telefone">Telefone</label>
                </div>
				
                <div class="input-field col s12 l6">
				  <i class="mdi-hardware-phone-iphone prefix"></i>
                  <input id="celular" required name="celular" type="text" maxlength="11">
                  <label for="senha">Telefone Celular</label>
				
                </div>
				
				
				 <div class="input-field col s12 l6">
				  <i class="mdi-action-https prefix"></i>
                  <input id="password" required name="senha" type="password" class="validate">
                  <label for="senha">Senha de Acesso</label>
				
                </div>


              </div>
            
			   <div class="form-group">
                        <input type="checkbox"  name="terms" id="terms" value="aceito" class="filled-in chk-col-pink">
                        <label for="terms">Eu li e concordo com o <a href="javascript:void(0);">termo de uso</a>.</label>
                    </div>

					<!-- Loader Ajax -->
				  <font color="red"<p><center><h7 class="emailCadastrado"></h7></center></p></font>
              	<font color="green"<p><center><h7 class="sucessoCadastro"></h7></center></p></font>

                <center><img src="../ibico/img/ajax-loader.gif" alt="carregando" class="loadCadastro"/></center>	
          
          </div>
        </div>
      </div>
      
	  <div class="modal-footer">
	  <button class="btn blue" type="submit" name="action" >Registrar
		<!-- logotipo de sair <i class="fa fa-sign-in right"></i> -->
		</button>
		</form>
        <!-- Outro tipo de efeito no botão de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
      </div>
    </div>
	 </div>
	
	
	
	
	
	
	
	  <!-- Estrutura Modal - EXIBE O CADASTRO DE PEDIDO  -->
	  

	 
<!-- Fim do cadastro de pedido -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Modal - Esqueceu a senha? - Quando clicar ele irá exibir um modal solicitando e-mail para o reset. -->
	
	<div id="modalesqueceusenha" class="modal modal-fixed-footer"> <!-- Rodapé Fixo -->
      <div class="modal-content">
        <div class="container">
         <div class="input-field col s12 l6">
		 
			<div class="card-panel z-depth-5">
				<h4 class="center">Recuperação de Senha</h4>
        
                    
					<div class="msg">
                       Digite seu endereço de e-mail que você usou para se registrar. Enviaremos um e-mail com seu nome de usuário e um link para redefinir sua senha.
                    </div>
					
					<div class="input-field col s12 l6">
						<i class="mdi-communication-email prefix"></i>
						<input id="email" type="email" class="validate">
					<label for="icon_email" data-error="Incorreto" data-success="Válido">E-mail</label>
					</div>
                           
					   
                    </div>		
				<button class="btn blue" type="submit" name="action">Resetar Senha
		
				</button>
   
                </form>
				
				
				
            </div>
			
			
        </div>
		
		
    </div>
	
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
<!-- Construção JQUERY para exibir o cadastro de login no momento que eu clicar em "Registre-se" Modal Trigger
		Modal = Caixa de Dialógo -->

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	
    <script>
    if (!window.jQuery) { document.write('<script src="js/jquery-2.1.1.min.js"><\/script>'); }
    $('.modal-trigger').leanModal({
        dismissible: true, // Fechando modal se clicar fora dele - Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacidade do fundo do Modal - Opacity of modal background
        in_duration: 300, // Transição em duração - Transition in duration
        out_duration: 200, // Duração da Transição - Transition out duration
        ready: function() { alert('Ready'); }, // Retorno do Modal quando aberto - Callback for Modal open
        complete: function() { alert('Closed'); } // Chamada de retorno para fechar o Modal - Callback for Modal close
      }
    );
    $('#modal-trigger').leanModal({
      dismissible: true, // Fechando modal se clicar fora dele - Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacidade do fundo do Modal Opacity of modal background
      in_duration: 300, // Transição em duração - Transition in duration
      out_duration: 200, // Duração da Transição Transition out duration
      ready: function() { alert('Ready'); }, //  Retorno do Modal quando aberto - Callback for Modal open
      complete: function() { alert('Closed'); } // Chamada de retorno para fechar o Modal - Callback for Modal close
      alert("aaaa");
    }
  );
  
   </script>
   

	
    
	


<!--Rodapé -->

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
						<!-- btn waves-effect waves-light red darken-1 -->
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
			
			
			<!-- Rodapé Redes sociais -->
			
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
            Todos os direitos reservados <a class="white-text" href="http://ibico.com.br">IBico Solutions</a>.  <a class="white-text" href="http://cbt.ifsp.edu.br">IFSP Campus Cubatão</a>
        </div>
    </div>
</footer>




    <!--  Scripts -->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	<script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
	
	

    </body>
</html>
