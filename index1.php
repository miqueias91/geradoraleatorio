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
  <title>Innovate Soft - Gerador Online de Documentos</title>


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
        <h1 class="mt-4">Gerador Online de Documentos</h1>
        <p>Este site foi desenvolvido com o propósito de auxiliar programadores, analistas de sistemas e estudantes a testarem seus softwares. A má utilização desse conteúdo é de total responsabilidade do visitante. Sem vínculos com a Receita Federal.</p>

        <p>Todos os documentos são gerados de maneira aleatória não tendo necessariamente relação com pessoas ou empresas existentes.
        Sem vínculos com a Receita Federal.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
