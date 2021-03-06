<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/starter-template/# -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../bootstrap-3.1.1/docs/assets/ico/favicon.ico">

    <title>Professional Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript" type="text/javascript">   
      /*
      Script desenvolvido por: klonder
      Postagem exclusiva em: http://www.forum.imasters.com.br
      Liberado para uso e modificação.
      */

      //Não altere esses valores!
      var iCount = 0;
      var iCampos = 1;
      var hidden1;
      var aux; 


      //Definindo quantos campos poderão ser criados (máximo);
      var iCamposTotal = 5; 



//Função que adiciona os campos;
function addInput() {   
if (iCampos <= iCamposTotal) {
  hidden1 = document.getElementById("hidden1");
  aux = document.getElementById("teste2");
  
  //Criando uma variável que armazenará as informações da linha que será criada.
  //Os campos estão sendo colocados no interior de uma div, pois a linha contém muitos elementos;
  //Basta excluir a div, para excluir todos os elementos da linha;
  if(aux.value == ''){
  var texto = "<div id='linha"+iCount+"'><br><input type='text' name='texto"+iCount+"' id='texto"+iCount+"' value='Meu texto "+iCount+"'><input type='button' class='btn btn-primary btn-sm' value='Apagar campo' onClick='removeInput(\"linha"+iCount+"\")'></div>";
  }
  else {
    var texto = "<div id='linha"+iCount+"'><br><input type='text' name='texto"+iCount+"' id='texto"+iCount+"' value='"+aux.value+"'><input type='button' class='btn btn-primary btn-sm' value='Apagar campo' onClick='removeInput(\"linha"+iCount+"\")'></div>";
  }    
  //Capturando a div principal, na qual os novos divs serão inseridos:
  
  var camposTexto = document.getElementById('camposTexto');   
  camposTexto.innerHTML = camposTexto.innerHTML+texto;
iCount++;
iCampos++;
}   
}

      //Função que remove os campos;
function removeInput(e) {
   var pai = document.getElementById('camposTexto');
   var filho = document.getElementById(e);
   hidden1 = document.getElementById("hidden1");
   var campoValor = document.getElementById("texto"+e.substring(5)).value;
   var lastNumber = hidden1.value.substring(hidden1.value.lastIndexOf(",")+1);

   if(confirm("O campo que contém o valor:\n» "+campoValor+"\nserá excluído permanentemente!\n\nDeseja prosseguir?")){
    var removido = pai.removeChild(filho);
    //Removendo o valor de hidden1:
    if (e.substring(5) == hidden1.value) {
      hidden1.value = hidden1.value.replace(e.substring(5),"");
    }else if(e.substring(5) == lastNumber) {
      hidden1.value = hidden1.value.replace(","+e.substring(5),"");
    }else{
      hidden1.value = hidden1.value.replace(e.substring(5)+",","");   
    }
  iCampos--;
  }
}
    </script> 

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="#">Professional Profile</a>
          </div>
        </div>
    </div>
      <div class="container">
        <ul>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
              <h1>
                  &nbsp&nbsp Education
              </h1>
            </div>
          </div>
          <div class="row">
            <br><br>
            <div class="col-md-4">
              <h4>
                Scholarity
              </h4>
            </div>
            <div class="col-md-8"></div>
          </div>
          <!--
          <div class="row">
            <div class="col-md-7">
              <form  name="my_form" id="my_form" action="" method="post">  
                  <input type="text" id="teste2" class="form-control" placeholder="Text input">
                <button type="submit" class="btn btn-primary btn-sm" onClick="addInput();">Add</button>
              </form>
            </div>
          </div>
            <div id="camposTexto"></div>`
            <input type="text" name="hidden1" id="hidden1" value="">
          -->
          <form  name="my_form" id="my_form" action="" method="post"> 
            <div class="row">
              <div class="col-md-5">
                <input type="text" id="teste2" class="form-control" placeholder="Text input">
              </div>
                <div class="col-md-5">
                <input type="button" class="btn btn-primary btn-sm" value="Add" name="add_input" id="add_input" onClick="addInput();">  
              </div>
            </div>
            <div id="camposTexto"></div>
              <input type="hidden" name="hidden1" id="hidden1" value="">
          </form>  

          </ul>
        </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.2.2.min.js"></script>

  </body>
</html>