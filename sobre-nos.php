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
  <title>Innovate Soft - Gerador Online de RG</title>
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

          <div class="form-row">
            <div class="form-group col-md-12">
              <h2 class="mt-4">Sobre o Site</h2>
              <p>Somos um site gratuito que reúne diversas ferramentas online com o propósito de auxiliar programadores, analistas de sistemas e estudantes a testarem seus softwares de forma rápida e facil. Nossos números de documentos são todos validados.</p>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <h2 class="mt-4">Política de Privacidade</h2>

              <p>Este site pode utilizar cookies e/ou web beacons quando um usuário tem acesso às páginas. Os cookies que podem ser utilizados associam-se (se for o caso) unicamente com o navegador de um determinado computador.</p>

              <p>Os cookies que são utilizados neste site podem ser instalados pelo mesmo, os quais são originados dos distintos servidores operados por este, ou a partir dos servidores de terceiros que prestam serviços e instalam cookies e/ou web beacons (por exemplo, os cookies que são empregados para prover serviços de publicidade ou certos conteúdos através dos quais o usuário visualiza a publicidade ou conteúdos em tempo pré-determinados).</p>

              <p>Usamos empresas de publicidade de terceiros para veicular anúncios durante a sua visita ao nosso website. Essas empresas podem usar informações (que não incluem o seu nome, endereço, endereço de e-mail ou número de telefone) sobre suas visitas a este e a outros websites a fim de exibir anúncios relacionados a produtos e serviços de seu interesse.</p>

              <p>O Google, como fornecedor de terceiros, utiliza cookies para exibir anúncios neste site.</p>
              <p>Com o cookie DART, o Google pode exibir anúncios para o usuário com base nas visitas feitas à este ou à outros sites na Internet.</p>
              <p>O usuário pode desativar o cookie DART <a href="https://policies.google.com/technologies/ads" target="_BLANK">visitando a Política de privacidade da rede de conteúdo e dos anúncios do Google</a>.</p>

              <p>O usuário têm a possibilidade de configurar seu navegador para ser avisado, na tela do computador, sobre a recepção dos cookies e para impedir a sua instalação no disco rígido. As informações pertinentes a esta configuração estão disponíveis em instruções e manuais do próprio navegador.</p>
            </div>
          </div>






      </div>  
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
</body>

</html>
