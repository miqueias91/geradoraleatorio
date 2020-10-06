<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Gerador Online de Documentos de Pessoas, gera nome, RG, CNPJ, CEP, Endereço, Certidão de Casamento, Certidão de Obito, CNPJ, Carteira de Trabalho, Passaporte, Atestado Médico." />
  <meta name="author" content="Miqueias Matias Caetano">
  <link rel="icon" href="image/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <?php
  include_once "./stylesheet.php";
  ?>
  <title>Innovate Soft - Gerador Online de CNPJ</title>

</head>

<body>

  <main role="main" class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php
    include_once "./sidebar.php";
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <section id="page-content-wrapper">

      <?php
      include_once "./menu.php";
      ?>

      <div class="container-fluid">
        <h1 class="mt-4">Gerador Online de CNPJ</h1>
        <p>Este site foi desenvolvido com o propósito de auxiliar programadores, analistas de sistemas e estudantes a testarem seus softwares. A má utilização desse conteúdo é de total responsabilidade do visitante. Sem vínculos com a Receita Federal.</p>

        <p>Todos os documentos são gerados de maneira aleatória não tendo necessariamente relação com pessoas ou empresas existentes.
        Sem vínculos com a Receita Federal.</p>
      </div>

      <div id='divaguarde' style="display:none;color: #808080;justify-items: center;align-items: center;justify-content: center;height: -webkit-fill-available;" class="dialogo" title='Aviso' align='center'>
        <center>Carregando...</center>
      </div>  

      <div id='divdocumento' style="display:none;width:800px;color: #808080" class="dialogo" title='Impressão de Documento' align='center'>
      </div>  

      <div  class="container">   
        <div class="starter-template" id="dados" style="padding: 0 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Resultado</legend>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cnpj_">Número do CNPJ</label>
                  <input type="text" class="form-control cnpj" id="cnpj_">
                </div>
              </div>
            </fieldset>

            <div class="text-center">
              <a class="btn btn-primary clipboard"  style="text-align: center;" href="#" role="button" data-clipboard-target="#cnpj_">COPIAR</a>
              <a class="btn btn-primary criar_cnpj"  style="text-align: center;" href="#" role="button">GERAR CNPJ</a>
            </div>
          </form>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /#page-content-wrapper -->
  </main>
  <!-- /#wrapper -->
  <?php
  include_once "./footer.php";
  include_once "./script.php";
  ?>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script type="text/javascript">
    $( document ).ready(function() { 
      $("#cnpj_").val(gerarNumeroCNPJ());
      //ACAO DO BOTAO CRIAR PERSONAGEM
      $('.criar_cnpj').click(function(){
        $("#cnpj_").val(gerarNumeroCNPJ());
      }); 
    });
  </script>

</body>

</html>
