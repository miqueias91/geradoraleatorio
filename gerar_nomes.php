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
  <title>Innovate Soft - Gerador Online de Nomes</title>
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
        <h1 class="mt-4">Gerador Online de Nomes</h1>
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
        <div class="starter-template" id="preencher" style="padding: 0 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend class="nivel_1">1. Qual o gênero?</legend>
              <div class="row sub_nivel_1">
                <div class="form-check col-md-12">
                  <input class="form-check-input sexo_titular" type="radio" name="sexo_opc" id="masculino" value="M" checked>
                  <label class="form-check-label" for="masculino">Masculino</label>
                </div>
              </div>
              <div class="row sub_nivel_1">
                <div class="form-check form-check_ultimo col-md-12">
                  <input class="form-check-input sexo_titular" type="radio" name="sexo_opc" id="feminino" value="F">
                  <label class="form-check-label" for="feminino">Feminino</label>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="nivel_1">2. O que deseja gerar?</legend>
              <div class="form-row sub_nivel_1">
                <div class="form-group col-md-12">
                  <select id="tiponome_titular" class="form-control">
                    <option value="ps">Primeiro nome e Sobrenome</option>
                    <option value="p">Primeiro nome</option>
                    <option value="s">Sobrenome</option>
                  </select>
                </div>
              </div>
            </fieldset>
          </form>
        </div>

        <div class="starter-template" id="dados" style="padding: 0 1.5rem 3rem 1.5rem;">
          <input type="hidden" id="nome_pessoa">
          <input type="hidden" id="sobrenome">
          <form>

            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="nome_titular">Nome</label>
                  <input type="text" class="form-control titular nome" id="nome_titular">
                </div>
              </div>
            </fieldset>

            <div class="text-center">
              <a class="btn btn-primary criar_personagem"  style="text-align: center;" href="#" role="button">GERAR NOMES</a>
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
      var sobrenome1 = '';
      var sobrenome2 = '';
      var sobrenome = '';
      var nome_pessoa = '';
      $("#nome_pessoa").val('');
      $("#sobrenome").val('');

      var tiponome_titular = $("#tiponome_titular").val();
      if (tiponome_titular == 'p') {
        //NOME
        if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
          buscaNomeMasculino();
        }
        else{
          buscaNomeFeminino();
        }
      }
      else if(tiponome_titular == 's'){
        //primeiro sobrenome
        buscaSobrenome();
        sobrenome1 = $("#sobrenome").val();
        //segundo sobrenome
        buscaSobrenome();
        sobrenome2 = $("#sobrenome").val();
      }
      else{
        //NOME
        if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
          buscaNomeMasculino();
        }
        else{
          buscaNomeFeminino();
        }
        //primeiro sobrenome
        buscaSobrenome();
        sobrenome1 = $("#sobrenome").val();
        //segundo sobrenome
        buscaSobrenome();
        sobrenome2 = $("#sobrenome").val();
      }

      sobrenome = sobrenome1+' '+sobrenome2
      nome_pessoa = $("#nome_pessoa").val();
      $("#nome_titular").val(nome_pessoa+' '+sobrenome);

      //ACAO DO BOTAO CRIAR PERSONAGEM
      $('.criar_personagem').click(function(){
        sobrenome1 = '';
        sobrenome2 = '';
        sobrenome = '';
        nome_pessoa = '';
        $("#nome_pessoa").val('');
        $("#sobrenome").val('');

        var tiponome_titular = $("#tiponome_titular").val();
        if (tiponome_titular == 'p') {
          //NOME
          if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
            buscaNomeMasculino();
          }
          else{
            buscaNomeFeminino();
          }
        }
        else if(tiponome_titular == 's'){
          //primeiro sobrenome
          buscaSobrenome();
          sobrenome1 = $("#sobrenome").val();
          //segundo sobrenome
          buscaSobrenome();
          sobrenome2 = $("#sobrenome").val();
        }
        else{
          //NOME
          if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
            buscaNomeMasculino();
          }
          else{
            buscaNomeFeminino();
          }
          //primeiro sobrenome
          buscaSobrenome();
          sobrenome1 = $("#sobrenome").val();
          //segundo sobrenome
          buscaSobrenome();
          sobrenome2 = $("#sobrenome").val();
        }

        sobrenome = sobrenome1+' '+sobrenome2
        nome_pessoa = $("#nome_pessoa").val();
        $("#nome_titular").val(nome_pessoa+' '+sobrenome);
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
