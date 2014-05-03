<!DOCTYPE HTML>

<html>

	<head>

		<!-- <div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Página Inicial</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Nome de Exibição</a></li>
            </ul>
          </div><!--/.nav-collapse
        </div>	
      </div> -->

		<meta http-equiv="Content-type" content="text/html; charset=ultf-8" />

		<title>Professional Profile</title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
		<script type="text/javascript" src="bootstrap-3.1.1-dist/js/bootstrap.js"></script>
		<script>
  			$(function() {
    			$("#abas").tabs();
    			$("#login").mouseenter(function(){
    			//	$('#mask').css({'z-index':2});
				//	$("#mask").fadeIn(1000);
				});
  			});
		</script>
		<style type="text/css">

		#mask {

 			width:150px;
 			height:100px;
 			display: none;
 			padding:  20px 20px 20px 0;
  			
		}

		/*#mask input{ margin-bottom: 10px; 	}

		.login-area:hover #mask,
		.login-area:focus #mask{

			display: block;
		}*/
		#wrap {
		   width:1300px;
		   margin:0 auto;
		   margin-bottom: 400px;
		}
		#left_col {
		   float:left;
		   width:600px;
		}
		#right_col {
		   float:right;
		   width:600px;
		}
		#corpo {
			margin: 0px 0px 50px 0px;
		}
		table.tabela-inspiracao td {
		    padding: 11px;
			float: center;
		}
		table.tabela-inspiracao tr {
			text-align: center;
		}

		</style>


	</head>

	<body>

		<!--<div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="navbar-collapse navbar-right collapse">
		      <span class="navbar-brand pull-right">Personal Profile</span>
		    </div>
		    <div class="collapse navbar-collapse">
		      <ul class="nav navbar-nav">
		        <li><a href="teste.html">Home</a></li>
		        <li><a href="sobre.html">Sobre</a></li>
		        <li class="active"><a href="contato.html">Contato</a></li>
		      </ul>
		    </div><!--/.nav-collapse
		  </div>
		</div>-->

		<div class="container">
        		<div class="row">
            			<div class="col-lg-12">
            				<h1 class="page-header">Personal Profile</h1>
            			</div>
        		</div>

        		<div class="row">

            		<div class="col-md-8">
                			<iframe width="750" height="500" src="http://www.youtube.com/embed/7nJ0NQNGL_s"></iframe>
           			</div>

            		<div class="col-md-4">
            			<form name="form1" method="post" action="checklogin.php">
	            			<div class="login-area">
	           					<div id="login"><h3>Login</h3></span></a> <br>
	       							<input name="myusername" type="text" id="myusername" placeholder="Digite seu email"> <br> <br>
	       							<input name="mypassword" id="mypassword" type="password" placeholder="Digite a senha">
	       							<input type="submit" name="Submit" value="Login">
	           				</div>
	          				<br><br>
	           				Ainda n&atildeo &eacute cadastrado?
	           				<br><br>
	           				<a class="btn btn-primary" href="cadastro.php">Cadastre-se</span></a>
           				</form>
           			</div>
       			</div>
		</div>
			<br><br>

			<div>
			<br><br>	
			</div>

		<footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <ul class="list-inline">
	                        <li><a href="teste.html">Home</a></li>
	                        <li class="footer-menu-divider">&sdot;</li>
	                        <li><a href="sobre.html">Sobre</a></li>
	                        <li class="footer-menu-divider">&sdot;</li>
	                        <li><a href="contato.html">Contato</a></li>
	                    </ul>
	                    <p class="copyright text-muted small">Copyright &copy; I'm Human 2014. All Rights Reserved</p>
	                </div>
	            </div>
	        </div>
	    </footer>

	</body>

</html>	