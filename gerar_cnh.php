<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Gerador Aleatório, gera pessoas, nome, RG, CPF, CEP, Endereço, Certidão de Casamento, Certidão de Obito, Título de Eleitor, Carteira de Trabalho, Passaporte, Atestado Médico." />
  <meta name="author" content="Miqueias Matias Caetano">
  <link rel="icon" href="image/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <title>Innovate Soft - Gerador Online de CNH</title>
  <script data-ad-client="ca-pub-7091486462236476" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


</head>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php
    include_once "./sidebar.php";
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php
        include_once "./menu.php";
        ?>

      <div class="container-fluid">
        <h1 class="mt-4">Gerador Online de CNH</h1>
        <p>Este site foi desenvolvido com o propósito de auxiliar programadores, analistas de sistemas e estudantes a testarem seus softwares. A má utilização desse conteúdo é de total responsabilidade do visitante. Sem vínculos com a Receita Federal.</p>

        <p>Todos os documentos são gerados de maneira aleatória não tendo necessariamente relação com pessoas ou empresas existentes.
        Sem vínculos com a Receita Federal.</p>
      </div>
      <div id='divaguarde' style="display:none;color: #808080;justify-items: center;align-items: center;justify-content: center;height: -webkit-fill-available;" class="dialogo" title='Aviso' align='center'>
        <center>Carregando...</center>
      </div>  

      <div id='divdocumento' style="display:none;width:800px;color: #808080" class="dialogo" title='Impressão de Documento' align='center'>
      </div>  

      <main role="main" class="container">  

        <div class="starter-template" id="dados" style="padding: 0 1.5rem 3rem 1.5rem;">
          <form>

            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cnh_titular">Número da CNH</label>
                  <input type="text" class="form-control titular" id="cnh_titular">
                </div>
              </div>
            </fieldset>

            <div class="text-center">
              <a class="btn btn-primary criar_personagem"  style="text-align: center;" href="#" role="button">GERAR CNH</a>
            </div>
          </form>
        </div>
      </main><!-- /.container -->
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/jquery.mask.min.js"></script>
  <script src="./js/jquery.maskMoney.min.js"></script>
  <script src="./js/jquery-ui.js"></script>
  <script src="./js/funcoes.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script type="text/javascript">
    $( document ).ready(function() { 
      $("#cnh_titular").val(gerarNumeroCNH());

      //ACAO DO BOTAO CRIAR PERSONAGEM
      $('.criar_personagem').click(function(){
        $("#cnh_titular").val(gerarNumeroCNH());
      });
      
      $( "#divdocumento" ).dialog({
        autoOpen: false,
        resizable: false,
        draggable: true,
        height: 500,
        width:'90%',
        modal:true,
        buttons: {
          "Fechar": function(){
            $(this).dialog('close');
          },
          "Imprimir": function(){
            var html="<html>";
            html="<title>documentos</title>";
            html+= document.getElementById("divdocumento").innerHTML;
            html+="</html>";
            var printWin = window.open('','','left=0,top=0,toolbar=0,scrollbars=0,status=0');
            printWin.document.write(html);
            printWin.document.close();
            printWin.focus();
            printWin.print();
            printWin.close();
            $(this).dialog('close');
          }                     
        }
      });    
    });
  </script>

</body>

</html>
