<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.system.php";
$sys = new system();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app" ng-csp>
<head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gerador Aleatório, gera pessoas, nome, RG, CPF, CEP, Endereço, Certidão de Casamento, Certidão de Obito, Título de Eleitor, Carteira de Trabalho, Passaporte, Atestado Médico." />
    <meta name="author" content="Miqueias Matias Caetano">
    <link rel="icon" href="image/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/onsen/css/onsenui.css" />
    <link rel="stylesheet" href="lib/onsen/css/onsen-css-components.css" />
    <link rel="stylesheet" href="css/toastr.min.css"/>
    <link rel="stylesheet" href="css/index.css" />

    <!-- JS dependencies (order matters!) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/jquery.maskMoney.min.js"></script>
    <script src="lib/onsen/js/onsenui.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/index.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7091486462236476"
     crossorigin="anonymous"></script>

    <title>Gerador Aleatório</title>
</head>

<body>
<input type="hidden" id="existeProximoCapitulo" value="0">
<input type="hidden" id="atual" value="0">
<ons-navigator id="appNavigator" swipeable swipe-target-width="80px">
  <ons-page>
    <ons-splitter id="appSplitter">
      <ons-splitter-side id="sidemenu" page="sidemenu.html" swipeable side="left" collapse="" width="260px"></ons-splitter-side>
      <ons-splitter-content page="tabbar.html"></ons-splitter-content>
    </ons-splitter>
  </ons-page>
</ons-navigator>

<template id="tabbar.html">
  <ons-page id="tabbar-page">
    <ons-toolbar id="tabbar_">
        <div class="center"><center>Gerador Aleatório</center></div>
      <div class="left">
        <ons-toolbar-button onclick="fn.toggleMenu()">
          <ons-icon style="color: #333" icon="ion-navicon, material:md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>
    <ons-tabbar swipeable id="appTabbar" position="bottom">
        <ons-tab label="Versão 1.0.1" page="home.html" active></ons-tab>
    </ons-tabbar>

    <script>
      ons.getScriptPage().addEventListener('prechange', function(event) {
        if (event.target.matches('#appTabbar')) {
              event.currentTarget.querySelector('#tabbar_ .center center').innerHTML = 'Gerador Aleatório';
        }
      });
    </script>
  </ons-page>
</template>

<template id="sidemenu.html">
  <ons-page>
    <div class="profile-pic">
      <img src="image/logo.png">
    </div>

    <ons-list> 

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_nomes.html', 'title': 'Gerador de Nomes'})">
        <div class="left">
          <i class="fas fa-angle-right"></i>
        </div>
          Gerador de Nomes
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_cnh.html', 'title': 'Gerador de CNH'})">
        <div class="left">
          <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de CNH
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>


      <ons-list-item onclick="fn.pushPage({'id': 'gerar_rg.html', 'title': 'Gerador de RG'})">
        <div class="left">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de RG
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_tituloeleitor.html', 'title': 'Gerador de Título de Eleitor'})">
        <div class="left">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de Título de Eleitor
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>  

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_cpf.html', 'title': 'Gerador de CPF'})">
        <div class="left">
          <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de CPF
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_pispasep.html', 'title': 'Gerador de PIS/PASEP'})">
        <div class="left">
          <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de PIS/PASEP
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.pushPage({'id': 'gerar_cnpj.html', 'title': 'Gerador de CNPJ'})">
        <div class="left">
          <i class="fas fa-angle-right"></i>
        </div>
        <div class="center">
          Gerador de CNPJ
        </div>
        <div class="right">
          <ons-icon icon="fa-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.loadLink('https://www.instagram.com/innovatesoft/')">
        <div class="left">
            <i class="fab fa-instagram"></i>
        </div>
        <div class="center">
          Instagram
        </div>
        <div class="right">
          <ons-icon icon="fa-external-link"></ons-icon>
        </div>
      </ons-list-item>

      <ons-list-item onclick="fn.loadLink('https://bit.ly/3l9zjYi')">
        <div class="left">
          <i class="fab fa-google-play"></i>
        </div>
        <div class="center">
          Outros app's
        </div>
        <div class="right">
          <ons-icon icon="fa-external-link"></ons-icon>
        </div>
      </ons-list-item>
    </ons-list>

    <script>
      ons.getScriptPage().onInit = function() {
        // Set ons-splitter-side animation
        this.parentElement.setAttribute('animation', ons.platform.isAndroid() ? 'overlay' : 'reveal');
      };
    </script>

    <style>
      .profile-pic {
        width: 100%;
        background-color: #333;
        margin: 0 auto;
      }

        .profile-pic > img {
            width: 80px;
            height: 80px;
            display: block;
            max-width: 100%;
            margin: 0 auto;
        }

      ons-list-item {
        color: #444;
      }
    </style>
  </ons-page>
</template>

<!-- MODAL DE AGUARDE -->
<ons-modal id="modal-aguarde">
    <p style="text-align: center">
        <ons-icon icon="fa-spinner" spin></ons-icon>
        <br><br>
    </p>
</ons-modal>

<template id="home.html">
  <ons-page>
    <br>
    <p class="intro">Somos um app gratuito que reúne diversas ferramentas online com o propósito de auxiliar programadores, analistas de sistemas e estudantes a testarem seus softwares de forma rápida e facil. Nossos números de documentos são todos validados.</p>
    <p class="intro">Também temos um aplicativo disponível na Google Play. <a href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.geradordedocumentos">Clique aqui para conhecer!</a></p>




      <main role="main" class="container">  
        <div class="starter-template" id="preencher" style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend class="nivel_1">1. Qual o sexo?</legend>
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
              <legend class="nivel_1">2. Qual idade da pessoa?</legend>
              <div class="row sub_nivel_1">
                <div class="form-group col-md-12">
                  <input type="number" class="form-control" id="idade_opc" min="18" value="18">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="nivel_1">3. Qual o local de nascimento?</legend>
              <div class="form-row sub_nivel_1">
                <div class="form-group col-md-8">
                  <input type="text" class="form-control" id="cidade_opc" placeholder="Cidade">
                </div>
                <div class="form-group col-md-4">
                  <select id="estado_opc" class="form-control">
                    <option value="">Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="nivel_1">4. Estado civil?</legend>
              <div class="form-row sub_nivel_1">
                <div class="form-group col-md-12">
                  <select id="estadocivil_opc" class="form-control">
                    <option value="">Selecione</option>
                    <option value="s">Solteiro (a)</option>
                    <option value="v">Viúvo (a)</option>
                    <option value="c">Casado (a)</option>
                  </select>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="nivel_1">5. Possui Filhos?</legend>
              <div class="row sub_nivel_1">
                <div class="form-check col-md-12">
                  <input class="form-check-input possuifilhos_opc" type="radio" name="possuifilhos_opc" id="sim_possuifilho_opc" value="sim">
                  <label class="form-check-label" for="sim">Sim</label>
                </div>
              </div>
              <div class="row sub_nivel_1">
                <div class="form-check form-check_ultimo col-md-12">
                  <input class="form-check-input form-check_ultimo possuifilhos_opc" type="radio" name="possuifilhos_opc" id="nao_possuifilho_opc" value="nao" checked>
                  <label class="form-check-label" for="nao">Não</label>
                </div>
              </div>

              <div class="qtdfilhos_opc" style="display: none;">
                <div class="row nivel_2">
                  <div class="form-group col-md-12">
                    <label for="qtdfilhos_opc">5.1. Quantos filhos possui?</label>
                    <input type="number" class="form-control" id="qtdfilhos_opc" min="1" max="10" value="1">
                  </div>
                </div>

                <div class="row nivel_2">
                  <div class="form-group col-md-12">
                    <label><i>5.2. Possui o nome do pai na certidão?</i></label>
                  </div>
                </div>
                <div class="form-row nivel_2">
                  <div class="form-group col-md-12">
                    <select id="nomepaifilho_opc" class="form-control">
                      <option value="">Selecione</option>
                      <option value="S">Sim</option>
                      <option value="N">Não</option>
                    </select>
                  </div>
                </div>

                <div id="filhos">
                  <div class="row nivel_3">
                    <div class="form-group col-md-12">
                      <label>5.1.1. Dados do filho</label>
                    </div>
                  </div>
                  <div class="row nivel_4">
                    <div class="form-group col-md-12">
                      <label><i>5.1.1.1. Qual o Sexo?</i></label>
                    </div>
                  </div>
                  <div class="row sub_nivel_4">
                    <div class="form-check col-md-12">
                      <input class="form-check-input" type="radio" name="sexofilho_opc1" id="masculino1" value="M" checked>
                      <label class="form-check-label" for="masculino1">Masculino</label>
                    </div>
                  </div>
                  <div class="row sub_nivel_4">
                    <div class="form-check col-md-12">
                      <input class="form-check-input form-check_ultimo" type="radio" name="sexofilho_opc1" id="feminino1" value="F">
                      <label class="form-check-label" for="feminino1">Feminino</label>
                    </div>
                  </div>

                  <div class="row nivel_4">
                    <div class="form-group col-md-12">
                      <label><i>5.1.1.2. Qual a idade?</i></label>
                    </div>
                  </div>
                  <div class="row sub_nivel_4">
                    <div class="form-group col-md-12">
                      <input type="number" class="form-control" id="idadefilho_opc1" min="1" value="1">
                    </div>
                  </div>

                  <div class="row nivel_4">
                    <div class="form-group col-md-12">
                      <label><i>5.1.1.3. Qual o local de nascimento?</i></label>
                    </div>
                  </div>
                  <div class="form-row sub_nivel_4">
                    <div class="form-group col-md-8">
                      <input type="text" class="form-control cidadefilho_opc" id="cidadefilho_opc1" placeholder="Cidade">
                    </div>
                    <div class="form-group col-md-4">
                      <select id="estadofilho_opc1" class="form-control estadofilho_opc">
                        <option value="">Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="temconjuge" style="display: none;">
              <legend class="nivel_1">6. Dados do cônjuge</legend>
              <div>
                <div class="row nivel_3">
                  <div class="form-group col-md-12">
                    <label>6.1. Qual o Sexo?</label>
                  </div>
                </div>
                <div class="row sub_nivel_3">
                  <div class="form-check col-md-12">
                    <input class="form-check-input" type="radio" name="sexoconjuge_opc" id="masculinoconjuge_opc" value="M" disabled>
                    <label class="form-check-label" for="masculinoconjuge_opc">Masculino</label>
                  </div>
                </div>
                <div class="row sub_nivel_3">
                  <div class="form-check col-md-12">
                    <input class="form-check-input form-check_ultimo" type="radio" name="sexoconjuge_opc" id="femininoconjuge_opc" value="F" checked disabled>
                    <label class="form-check-label" for="femininoconjuge_opc">Feminino</label>
                  </div>
                </div>

                <div class="row nivel_3">
                  <div class="form-group col-md-12">
                    <label>6.2. Qual a idade?</label>
                  </div>
                </div>
                <div class="row sub_nivel_3">
                  <div class="form-group col-md-12">
                    <input type="number" class="form-control" id="idadeconjuge_opc" min="18" value="18">
                  </div>
                </div>

                <div class="row nivel_3">
                  <div class="form-group col-md-12">
                    <label>6.3. Qual o local de nascimento?</label>
                  </div>
                </div>
                <div class="form-row sub_nivel_3">
                  <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="cidadeconjuge_opc" placeholder="Cidade">
                  </div>
                  <div class="form-group col-md-4">
                    <select id="estadoconjuge_opc" class="form-control">
                      <option value="">Estado</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_pessoa">GERAR PESSOA</ons-button>
            </div>
            
          </form>
        </div>

        <div id="dados" style="display: none;padding: 20px 1.5rem 3rem 1.5rem;">
          <input type="hidden" id="tipo_moradia">
          <input type="hidden" id="logradouro">
          <input type="hidden" id="num_logradouro">
          <input type="hidden" id="cep_logradouro">
          <input type="hidden" id="bairro">
          <input type="hidden" class="nome_pessoa">
          <input type="hidden" class="sobrenome">
          <form>

            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="nome_titular">Nome</label>
                  <input type="text" class="form-control titular nome" id="nome_titular">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="anotacoes_passaporte_titular">Anotações do Passaporte</label>
                  <input type="text" class="form-control titular anotacoes_passaporte" id="anotacoes_passaporte_titular">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nasc">Data Nasc.</label>
                  <input type="text" class="form-control titular nasc date" id="nasc">
                </div>
                <div class="form-group col-md-6">
                  <label for="sexo">Sexo</label>
                  <select id="sexo" class="form-control titular sexo">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="rg">RG</label>
                  <input type="text" class="form-control titular rg" id="rg">
                </div>
                <div class="form-group col-md-3">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control titular cpf" id="cpf">
                </div>
                <div class="form-group col-md-3">
                  <label for="te">Titulo de Eleitor</label>
                  <input type="text" class="form-control titular te" id="te">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nome_mae">Mãe</label>
                  <input type="text" class="form-control titular nome_mae" id="nome_mae">
                </div>
                <div class="form-group col-md-6">
                  <label for="nome_pai">Pai</label>
                  <input type="text" class="form-control titular nome_pai" id="nome_pai">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="avo0_materna_titular">Avó Materna</label>
                  <input type="text" class="form-control titular avo0_materna_titular" id="avo0_materna_titular">
                </div>
                <div class="form-group col-md-6">
                  <label for="avo1_materno_titular">Avô Materno</label>
                  <input type="text" class="form-control titular avo1_materno_titular" id="avo1_materno_titular">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="avo0_paterna_titular">Avó Paterna</label>
                  <input type="text" class="form-control titular avo0_paterna_titular" id="avo0_paterna_titular">
                </div>
                <div class="form-group col-md-6">
                  <label for="avo1_paterno_titular">Avô Paterno</label>
                  <input type="text" class="form-control titular avo1_paterno_titular" id="avo1_paterno_titular">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="cep_logradouro_titular">CEP</label>
                  <input type="text" class="form-control titular cep cep_logradouro_" id="cep_logradouro_titular">
                </div>

                <div class="form-group col-md-4">
                  <label for="endereco_titular">Endereço</label>
                  <input type="text" class="form-control titular endereco_" id="endereco_titular">
                </div>

                <div class="form-group col-md-2">
                  <label for="num_logradouro_titular">N°</label>
                  <input type="text" class="form-control titular num_logradouro_" id="num_logradouro_titular">
                </div>

                <div class="form-group col-md-3">
                  <label for="bairro_titular">Bairro</label>
                  <input type="text" class="form-control titular bairro_" id="bairro_titular">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control titular cidade" id="cidade" placeholder="Cidade Nasc.">
                </div>
                <div class="form-group col-md-6">
                  <select id="estado" class="form-control titular estado">
                    <option value="">Estado Nasc.</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="obito">Falecido</label>
                  <select id="obito" class="form-control titular obito">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>

                <div class="form-group col-md-6 falecido" style="display: none;">
                  <label for="cidade_obito">&nbsp;</label>
                  <input type="text" class="form-control titular cidade_obito" id="cidade_obito" placeholder="Cidade do Falecimento">
                </div>

                <div class="form-group col-md-3 falecido" style="display: none;">
                  <label for="estado_obito">&nbsp;</label>
                  <select id="estado_obito" class="form-control titular estado_obito">
                    <option value="">Estado do Falecimento</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>

              <div class="form-row">     

                <div class="form-group col-md-3 falecido" style="display: none;">
                  <label for="data_obito">Data do Falecimento</label>
                  <input type="text" class="form-control titular date data_obito" id="data_obito" placeholder="Data do Falecimento">
                </div>

                <div class="form-group col-md-9 falecido" style="display: none;">
                  <label for="motivo_obito">Motivo do Falecimento</label>
                  <input type="text" class="form-control titular motivo_obito" id="motivo_obito" placeholder="Motivo do Falecimento...">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="empregado_titular">Empregado</label>
                  <select id="empregado_titular" class="form-control titular empregado_titular">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>
                <div class="form-group col-md-3 empregado" style="display: none;">
                  <label for="pis_pasep_titular">PIS/PASEP</label>
                  <input type="text" class="form-control titular pis_pasep pis_pasep_titular" id="pis_pasep_titular" placeholder="">
                </div>
                <div class="form-group col-md-3 empregado" style="display: none;">
                  <label for="admissao_titular">Data Admissão</label>
                  <input type="text" class="form-control titular date admissao_titular" id="admissao_titular" placeholder="">
                </div>
                <div class="form-group col-md-3 empregado" style="display: none;">
                  <label for="demissao_titular">Data Demissão</label>
                  <input type="text" class="form-control titular date demissao_titular" id="demissao_titular" placeholder="">
                </div>
              </div>

              <div class="form-row empregado" style="display: none;">
                <div class="form-group col-md-2 empregado" style="display: none;">
                  <label for="remuneracao_titular">Remuneração</label>
                  <input type="text" class="form-control titular remuneracao_titular valor" id="remuneracao_titular" placeholder="0,00" value="0,00">
                </div>
                <div class="form-group col-md-4">
                  <label for="empregador_titular">Nome do Empregador</label>
                  <input type="text" class="form-control titular empregador_titular" id="empregador_titular" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="cnpj_empregador_titular">CNPJ do Empregador</label>
                  <input type="text" class="form-control titular cnpj cnpj_empregador_titular" id="cnpj_empregador_titular" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="cargo_titular">Cargo</label>
                  <input type="text" class="form-control titular cargo_titular" id="cargo_titular" placeholder="">
                </div>
              </div>

              <div class="form-row empregado" style="display: none;">
                <div class="form-group col-md-3">
                  <label for="cep_logradouro_empregador_titular">CEP&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control titular cep cep_logradouro_empregador_titular" id="cep_logradouro_empregador_titular">
                </div>

                <div class="form-group col-md-4">
                  <label for="endereco_empregador_titular">Endereço&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control titular endereco_empregador_titular" id="endereco_empregador_titular">
                </div>

                <div class="form-group col-md-2">
                  <label for="num_logradouro_empregador_titular">N°&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control titular num_logradouro_empregador_titular" id="num_logradouro_empregador_titular">
                </div>

                <div class="form-group col-md-3">
                  <label for="bairro_empregador_titular">Bairro&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control titular bairro_empregador_titular" id="bairro_empregador_titular">
                </div>
              </div>

              <div class="form-row empregado" style="display: none;">
                <div class="form-group col-md-8">
                  <label for="cidade_empregador_titular">&nbsp;</label>
                  <input type="text" class="form-control titular cidade_empregador_titular" id="cidade_empregador_titular" placeholder="Cidade do Empregador">
                </div>

                <div class="form-group col-md-4">
                  <label for="estado_empregador_titular">&nbsp;</label>
                  <select id="estado_empregador_titular" class="form-control titular estado_empregador_titular">
                    <option value="">Estado do Empregador</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>
              <div class="form-row empregado" style="display: none;">
                <div class="form-group col-md-12">
                  <label for="anotacoes_empregador_titular">Anotações</label>
                  <input type="text" class="form-control titular anotacoes_empregador_titular" id="anotacoes_empregador_titular" placeholder="">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="atestado_titular">Atestado Médico</label>
                  <select id="atestado_titular" class="form-control titular">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>

                <div class="form-group col-md-7 atestado_titular" style="display: none;">
                  <label for="descricao_atestado_titular">Descrição do Atestado</label>
                  <input type="text" class="form-control titular descricao_atestado_titular" id="descricao_atestado_titular" placeholder="">
                </div>

                <div class="form-group col-md-2 atestado_titular" style="display: none;">
                  <label for="data_atestado_titular">Data do Atestado</label>
                  <input type="text" class="form-control titular data_atestado_titular date" id="data_atestado_titular">  
                </div>
              </div>
            </fieldset>

            <fieldset id="conjuge" style="display: none;">
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Cônjuge</legend>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="nome_conjuge">Nome</label>
                  <input type="text" class="form-control conjuge nome" id="nome_conjuge">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="anotacoes_passaporte_conjuge">Anotações do Passaporte</label>
                  <input type="text" class="form-control conjuge anotacoes_passaporte" id="anotacoes_passaporte_conjuge">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nasc_conjuge">Data Nasc.</label>
                  <input type="text" class="form-control conjuge nasc date" id="nasc_conjuge">
                </div>
                <div class="form-group col-md-6">
                  <label for="sexo_conjuge">Sexo</label>
                  <select id="sexo_conjuge" class="form-control conjuge sexo">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="rg_conjuge">RG</label>
                  <input type="text" class="form-control conjuge rg" id="rg_conjuge">
                </div>
                <div class="form-group col-md-3">
                  <label for="cpf_conjuge">CPF</label>
                  <input type="text" class="form-control conjuge cpf" id="cpf_conjuge">
                </div>
                <div class="form-group col-md-3">
                  <label for="te_conjuge">Titulo de Eleitor</label>
                  <input type="text" class="form-control conjuge te" id="te_conjuge">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nome_mae_conjuge">Mãe</label>
                  <input type="text" class="form-control conjuge nome_mae" id="nome_mae_conjuge">
                </div>
                <div class="form-group col-md-6">
                  <label for="nome_pai_conjuge">Pai</label>
                  <input type="text" class="form-control conjuge nome_pai" id="nome_pai_conjuge">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="avo0_materna_conjuge">Avó Materna</label>
                  <input type="text" class="form-control conjuge avo0_materna" id="avo0_materna_conjuge">
                </div>
                <div class="form-group col-md-6">
                  <label for="avo1_materno_conjuge">Avô Materno</label>
                  <input type="text" class="form-control conjuge avo1_materno" id="avo1_materno_conjuge">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="avo0_paterna_conjuge">Avó Paterna</label>
                  <input type="text" class="form-control conjuge avo0_paterna" id="avo0_paterna_conjuge">
                </div>
                <div class="form-group col-md-6">
                  <label for="avo1_paterno_conjuge">Avô Paterno</label>
                  <input type="text" class="form-control conjuge avo1_paterno" id="avo1_paterno_conjuge">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="cep_logradouro_conjuge">CEP</label>
                  <input type="text" class="form-control conjuge cep cep_logradouro_" id="cep_logradouro_conjuge">
                </div>

                <div class="form-group col-md-4">
                  <label for="endereco_conjuge">Endereço</label>
                  <input type="text" class="form-control conjuge endereco_" id="endereco_conjuge">
                </div>

                <div class="form-group col-md-2">
                  <label for="num_logradouro_conjuge">N°</label>
                  <input type="text" class="form-control conjuge num_logradouro_" id="num_logradouro_conjuge">
                </div>

                <div class="form-group col-md-3">
                  <label for="bairro_conjuge">Bairro</label>
                  <input type="text" class="form-control conjuge bairro_" id="bairro_conjuge">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control conjuge cidade" id="cidade_conjuge" placeholder="Cidade Nasc.">
                </div>
                <div class="form-group col-md-6">
                  <select id="estado_conjuge" class="form-control conjuge estado">
                    <option value="">Estado Nasc.</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="obito_conjuge">Falecido</label>
                  <select id="obito_conjuge" class="form-control conjuge obito_conjuge">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>

                <div class="form-group col-md-6 falecido_conjuge" style="display: none;">
                  <label for="cidade_obito_conjuge">&nbsp;</label>
                  <input type="text" class="form-control conjuge cidade_obito_conjuge" id="cidade_obito_conjuge" placeholder="Cidade do Falecimento">
                </div>

                <div class="form-group col-md-3 falecido_conjuge" style="display: none;">
                  <label for="estado_obito_conjuge">&nbsp;</label>
                  <select id="estado_obito_conjuge" class="form-control conjuge estado_obito_conjuge">
                    <option value="">Estado do Falecimento</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>

              <div class="form-row">     

                <div class="form-group col-md-3 falecido_conjuge" style="display: none;">
                  <label for="data_obito_conjuge">Data do Falecimento</label>
                  <input type="text" class="form-control conjuge date data_obito_conjuge" id="data_obito_conjuge" placeholder="Data do Falecimento">
                </div>

                <div class="form-group col-md-9 falecido_conjuge" style="display: none;">
                  <label for="motivo_obito_conjuge">Motivo do Falecimento</label>
                  <input type="text" class="form-control conjuge motivo_obito_conjuge" id="motivo_obito_conjuge" placeholder="Motivo do Falecimento...">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="empregadoconjuge">Empregado</label>
                  <select id="empregadoconjuge" class="form-control conjuge empregadoconjuge">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>
                <div class="form-group col-md-3 empregado_conjuge" style="display: none;">
                  <label for="pis_pasep_conjuge">PIS/PASEP</label>
                  <input type="text" class="form-control conjuge pis_pasep pis_pasep_conjuge" id="pis_pasep_conjuge" placeholder="">
                </div>
                <div class="form-group col-md-3 empregado_conjuge" style="display: none;">
                  <label for="admissao_conjuge">Data Admissão</label>
                  <input type="text" class="form-control conjuge date admissao_conjuge" id="admissao_conjuge" placeholder="">
                </div>
                <div class="form-group col-md-3 empregado_conjuge" style="display: none;">
                  <label for="demissao_conjuge">Data Demissão</label>
                  <input type="text" class="form-control conjuge date demissao_conjuge" id="demissao_conjuge" placeholder="">
                </div>
              </div>

              <div class="form-row empregado_conjuge" style="display: none;">
                <div class="form-group col-md-2 empregado_conjuge" style="display: none;">
                  <label for="remuneracao_conjuge">Remuneração</label>
                  <input type="text" class="form-control conjuge remuneracao_conjuge valor" id="remuneracao_conjuge" placeholder="0,00" value="0,00">
                </div>
                <div class="form-group col-md-4">
                  <label for="empregador_conjuge">Nome do Empregador</label>
                  <input type="text" class="form-control conjuge empregador_conjuge" id="empregador_conjuge" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="cnpj_empregador_conjuge">CNPJ do Empregador</label>
                  <input type="text" class="form-control conjuge cnpj cnpj_empregador_conjuge" id="cnpj_empregador_conjuge" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="cargo_conjuge">Cargo</label>
                  <input type="text" class="form-control conjuge cargo_conjuge" id="cargo_conjuge" placeholder="">
                </div>
              </div>

              <div class="form-row empregado_conjuge" style="display: none;">
                <div class="form-group col-md-3">
                  <label for="cep_logradouro_empregador_conjuge">CEP&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control conjuge cep cep_logradouro_empregador_conjuge" id="cep_logradouro_empregador_conjuge">
                </div>

                <div class="form-group col-md-4">
                  <label for="endereco_empregador_conjuge">Endereço&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control conjuge endereco_empregador_conjuge" id="endereco_empregador_conjuge">
                </div>

                <div class="form-group col-md-2">
                  <label for="num_logradouro_empregador_conjuge">N°&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control conjuge num_logradouro_empregador_conjuge" id="num_logradouro_empregador_conjuge">
                </div>

                <div class="form-group col-md-3">
                  <label for="bairro_empregador_conjuge">Bairro&nbsp;do&nbsp;Empre.</label>
                  <input type="text" class="form-control conjuge bairro_empregador_conjuge" id="bairro_empregador_conjuge">
                </div>
              </div>

              <div class="form-row empregado_conjuge" style="display: none;">
                <div class="form-group col-md-8">
                  <label for="cidade_empregador_conjuge">&nbsp;</label>
                  <input type="text" class="form-control conjuge cidade_empregador_conjuge" id="cidade_empregador_conjuge" placeholder="Cidade do Empregador">
                </div>

                <div class="form-group col-md-4">
                  <label for="estado_empregador_conjuge">&nbsp;</label>
                  <select id="estado_empregador_conjuge" class="form-control conjuge estado_empregador_conjuge">
                    <option value="">Estado do Empregador</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>
              <div class="form-row empregado_conjuge" style="display: none;">
                <div class="form-group col-md-12">
                  <label for="anotacoes_empregador_conjuge">Anotações</label>
                  <input type="text" class="form-control conjuge anotacoes_empregador_conjuge" id="anotacoes_empregador_conjuge" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="atestado_conjuge">Atestado Médico</label>
                  <select id="atestado_conjuge" class="form-control conjuge">
                    <option value="n">Não</option>
                    <option value="s">Sim</option>
                  </select>
                </div>

                <div class="form-group col-md-7 atestado_conjuge" style="display: none;">
                  <label for="descricao_atestado_conjuge">Descrição do Atestado</label>
                  <input type="text" class="form-control conjuge descricao_atestado_conjuge" id="descricao_atestado_conjuge" placeholder="">
                </div>

                <div class="form-group col-md-2 atestado_conjuge" style="display: none;">
                  <label for="data_atestado_conjuge">Data do Atestado</label>
                  <input type="text" class="form-control conjuge data_atestado_conjuge date" id="data_atestado_conjuge">  
                </div>
              </div>
            </fieldset>

            <fieldset id="filho" style="display: none;">
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Filhos</legend>
              <div id="grupofilhos"></div>
            </fieldset>
            <div class="text-center">
              <a class="btn btn-primary button--material" href="./index.html" role="button" style="margin-bottom: 10px;">GERAR NOVA PESSOA</a>
            </div>


          </form>
        </div>
      </main><!-- /.container -->



    <script>
      $('.date').mask('99/99/9999');
      $('.cpf').mask('999.999.999-99');
      $('.rg').mask('99.999.999-9');
      $('.pis_pasep').mask('999.99999.99-9');
      $('.cnpj').mask('99.999.999/9999-99');
      $('.te').mask('9999 9999 9999');
      $('.cep').mask('99.999-999');
      $('.valor').maskMoney({
        allowNegative: false, 
        thousands:'', 
        decimal:',', 
        affixesStay: false
      });
      var nome_mae_filho = '';
      var avo0_materna_filho = '';
      var avo1_materno_filho = '';
      var possui_pis_pasep_titular = 'n';
      var possui_pis_pasep_conjuge = 'n';
      var possui_pis_pasep_filho = 'n';
      var modelo_texto_atestado = 'Atesto para os devidos fins, que o Sr. [NOME_PACIENTE], inscrito no CPF n.º [NUM_CPF_PACIENTE], foi atendido no dia [DATA_ATESTADO] às [HORA_ATESTADO] apresentando quadro de [PROBLEMA_SAUDE] e necessita de [DIA_REPOUSO] dias de repouso.'

      //PEGANDO A DATA ATUAL
      var date = new Date();
      var anoatual = date.getFullYear();
      var mesatual = date.getMonth();
      var diaatual = date.getDate();
      
      mesatual = mesatual + 1;
      if (mesatual < 10) {
        mesatual = '0'+mesatual;
      }

      if (diaatual < 10) {
        diaatual = '0'+diaatual;
      }


      $('.sexo_titular').change(function(){
        if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
          $('#masculinoconjuge_opc').prop('checked',false);
          $('#femininoconjuge_opc').prop('checked',true);
        }
        else{
          $('#masculinoconjuge_opc').prop('checked',true);
          $('#femininoconjuge_opc').prop('checked',false);
        }
      });

      //MOSTRA/ESCONDE DADOS DOS FILHOS
      $('.possuifilhos_opc').change(function(){
        if ($(this).val() == 'sim') {
          $(".qtdfilhos_opc").css("display","");
        }
        else{
          $(".qtdfilhos_opc").css("display","none");
        }
      });

      //MOSTRA/ESCONDE DADOS DO FALECIMENTO DO TITULAR
      $('#obito').change(function(){
        if ($(this).val() == 's') {
          $(".falecido").css("display","");
          $("#cidade_obito").val($("#cidade_opc").val().toUpperCase());
          $("#estado_obito").val($("#estado_opc").val());
        }
        else{
          $(".falecido").css("display","none");
          $("#cidade_obito").val("");
          $("#estado_obito").val("");
          $("#motivo_obito").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO EMPREGADOR DO TITULAR
      $('#empregado_titular').change(function(){
        possui_pis_pasep_titular = $(this).val();
        if ($(this).val() == 's') {
          $(".empregado").css("display","");
          $("#pis_pasep_titular").val(app.gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_titular").val(app.gerarNumeroCNPJ());
          $("#cidade_empregador_titular").val($("#cidade_opc").val().toUpperCase());
          $("#estado_empregador_titular").val($("#estado_opc").val());

          app.criaEndereco();
          $("#endereco_empregador_titular").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
          $("#num_logradouro_empregador_titular").val($("#num_logradouro").val());
          $("#cep_logradouro_empregador_titular").val($("#cep_logradouro").val());
          $("#bairro_empregador_titular").val($("#bairro").val());
        }
        else{
          $(".empregado").css("display","none");
          $("#pis_pasep_titular").val("");
          $("#cnpj_empregador_titular").val("");
          $("#cidade_empregador_titular").val("");
          $("#estado_empregador_titular").val("");
          $("#endereco_empregador_titular").val("");
          $("#num_logradouro_empregador_titular").val("");
          $("#cep_logradouro_empregador_titular").val("");
          $("#bairro_empregador_titular").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO ATESTADO
      $('#atestado_titular').change(function(){
        if ($(this).val() == 's') {
          $(".atestado_titular").css("display","");
          $("#data_atestado_titular").val(diaatual+'/'+mesatual+'/'+anoatual);

          var aux_modelo_texto_atestado = modelo_texto_atestado;
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NOME_PACIENTE]',$("#nome_titular").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NUM_CPF_PACIENTE]',$("#cpf").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DATA_ATESTADO]',$("#data_atestado_titular").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[HORA_ATESTADO]','12:00');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[PROBLEMA_SAUDE]','febre');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DIA_REPOUSO]','15');

          $("#descricao_atestado_titular").val(aux_modelo_texto_atestado);
        }
        else{
          $(".atestado_titular").css("display","none");
          $("#descricao_atestado_titular").val("");
          $("#data_atestado_titular").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO FALECIMENTO DO CONJUGE
      $('#obito_conjuge').change(function(){
        if ($(this).val() == 's') {
          $(".falecido_conjuge").css("display","");
          $("#cidade_obito_conjuge").val($("#cidade_conjuge").val().toUpperCase());
          $("#estado_obito_conjuge").val($("#estado_conjuge").val());
        }
        else{
          $(".falecido_conjuge").css("display","none");
          $("#cidade_obito_conjuge").val("");
          $("#estado_obito_conjuge").val("");
          $("#motivo_obito_conjuge").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO EMPREGADOR DO CONJUGE
      $('#empregadoconjuge').change(function(){
        possui_pis_pasep_conjuge = $(this).val();
        if ($(this).val() == 's') {
          $(".empregado_conjuge").css("display","");
          $("#pis_pasep_conjuge").val(app.gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_conjuge").val(app.gerarNumeroCNPJ());
          $("#cidade_empregador_conjuge").val($("#cidade_conjuge").val().toUpperCase());
          $("#estado_empregador_conjuge").val($("#estado_conjuge").val());

          app.criaEndereco();
          $("#endereco_empregador_conjuge").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
          $("#num_logradouro_empregador_conjuge").val($("#num_logradouro").val());
          $("#cep_logradouro_empregador_conjuge").val($("#cep_logradouro").val());
          $("#bairro_empregador_conjuge").val($("#bairro").val());
        }
        else{
          $(".empregado_conjuge").css("display","none");
          $("#pis_pasep_conjuge").val("");
          $("#cnpj_empregador_conjuge").val("");
          $("#cidade_empregador_conjuge").val("");
          $("#estado_empregador_conjuge").val("");
          $("#endereco_empregador_conjuge").val("");
          $("#num_logradouro_empregador_conjuge").val("");
          $("#cep_logradouro_empregador_conjuge").val("");
          $("#bairro_empregador_conjuge").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO ATESTADO
      $('#atestado_conjuge').change(function(){
        if ($(this).val() == 's') {
          $(".atestado_conjuge").css("display","");
          $("#data_atestado_conjuge").val(diaatual+'/'+mesatual+'/'+anoatual);

          var aux_modelo_texto_atestado = modelo_texto_atestado;
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NOME_PACIENTE]',$("#nome_conjuge").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NUM_CPF_PACIENTE]',$("#cpf_conjuge").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DATA_ATESTADO]',$("#data_atestado_conjuge").val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[HORA_ATESTADO]','12:00');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[PROBLEMA_SAUDE]','febre');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DIA_REPOUSO]','15');

          $("#descricao_atestado_conjuge").val(aux_modelo_texto_atestado);
        }
        else{
          $(".atestado_conjuge").css("display","none");
          $("#descricao_atestado_conjuge").val("");
          $("#data_atestado_conjuge").val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO FALECIMENTO FILHO
      $('.obito_filho').change(function(){
        var num = $(this).attr('num');
        if ($(this).val() == 's') {
          $(".falecido_filho"+num).css("display","");
        }
        else{
          $(".falecido_filho"+num).css("display","none");
        }
      });

      //MOSTRA/ESCONDE DADOS DO EMPREGADOR DO FILHO
      $('.empregado_filho').change(function(){
        var num = $(this).attr('num');
        if ($(this).val() == 's') {
          $(".empregado_filho"+num).css("display","");
          $("#pis_pasep_filho"+num).val(app.gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_filho"+num).val(app.gerarNumeroCNPJ());
          $("#cidade_empregador_filho"+num).val("");
          $("#estado_empregador_filho"+num).val("");
          $("#endereco_empregador_filho"+num).val("");
          $("#num_logradouro_empregador_filho"+num).val("");
          $("#cep_logradouro_empregador_filho"+num).val("");
          $("#bairro_empregador_filho"+num).val("");
        }
        else{
          $("#empregado_filho"+num).css("display","none");
          $("#pis_pasep_filho"+num).val("");
          $("#cnpj_empregador_filho"+num).val("");
          $("#cidade_empregador_filho"+num).val("");
          $("#estado_empregador_filho"+num).val("");
          $("#endereco_empregador_filho"+num).val("");
          $("#num_logradouro_empregador_filho"+num).val("");
          $("#cep_logradouro_empregador_filho"+num).val("");
          $("#bairro_empregador_filho"+num).val("");
        }
      });

      //MOSTRA/ESCONDE DADOS DO ATESTADO
      $('.atestado_filho').change(function(){
        var num = $(this).attr('num');
        if ($(this).val() == 's') {   

          $(".atestado_filho"+num).css("display","");
          $("#data_atestado_filho"+num).val(diaatual+'/'+mesatual+'/'+anoatual);

          var aux_modelo_texto_atestado = modelo_texto_atestado;
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NOME_PACIENTE]',$("#nome_filho"+num).val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[NUM_CPF_PACIENTE]',$("#cpf_filho"+num).val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DATA_ATESTADO]',$("#data_atestado_filho"+num).val());
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[HORA_ATESTADO]','12:00');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[PROBLEMA_SAUDE]','febre');
          var aux_modelo_texto_atestado = aux_modelo_texto_atestado.replace('[DIA_REPOUSO]','15');

          $("#descricao_atestado_filho"+num).val(aux_modelo_texto_atestado);
        }
        else{
          $(".atestado_filho"+num).css("display","none");
          $("#descricao_atestado_filho"+num).val("");
          $("#data_atestado_filho"+num).val("");
        }
      });

      //CARREGO A DATA ATUAL PARA O OBITO
      $("#data_obito").val(diaatual+'/'+mesatual+'/'+anoatual);
      $("#data_obito_conjuge").val(diaatual+'/'+mesatual+'/'+anoatual);
      $(".data_obito_filho").val(diaatual+'/'+mesatual+'/'+anoatual);

      //CARREGO A DATA ATUAL PARA A ADMISSAO
      $("#admissao_titular").val(diaatual+'/'+mesatual+'/'+anoatual);
      $("#admissao_conjuge").val(diaatual+'/'+mesatual+'/'+anoatual);
      $(".admissao_filho").val(diaatual+'/'+mesatual+'/'+anoatual);

      //CRIANDO O HTML DOS DADOS DO FILHO
      $('#qtdfilhos_opc').change(function(){
        var maxfilho = $(this).val();
        app.criaOpcaoFilhos(maxfilho);
      });

      //MOSTRA/ESCONDE DADOS DO CONJUGE
      $('#estadocivil_opc').change(function(){
        if ($(this).val() != 's') {
          $(".temconjuge").css("display","");
        }
        else{
          $(".temconjuge").css("display","none");
        }
      });

      //ACAO DO BOTAO CRIAR PERSONAGEM
      $('#btn_gerar_pessoa').click(function(){
        if ($('#estadocivil_opc').val() == 'v') {
          $('#obito_conjuge').val('s');
          $(".falecido_conjuge").css("display","");
        }
        //VALIDANDO A CIDADE DO FILHO
        var cidadefilho_opc = true;
        $('.cidadefilho_opc').each(function(){
          if ($(this).val() == '') {
            cidadefilho_opc = false;
          }
        });

        //VALIDANDO O ESTADO DO FILHO
        var estadofilho_opc = true;
        $('.estadofilho_opc').each(function(){
          if ($(this).val() == '') {
            estadofilho_opc = false;
          }
        });

        //RECEBENDO O RESULTADO DO CHECKBOX PARA SABER SE O TITULAR TEM FILHOS
        var possuifilhos_opc = $('input[name^="possuifilhos_opc"]:checked').val();

        //VALIDANDO A IDADE DO TITULAR
        if ($("#idade_opc").val() == '' || parseInt($("#idade_opc").val()) == 0) {
          ons.notification.alert({
            message: 'Informe uma idade superior a 0.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDANDO A CIDADE DO TITULAR
        else if ($("#cidade_opc").val() == '') {
          ons.notification.alert({
            message: 'Informe uma cidade de nascimento.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDANDO O ESTADO DO TITULAR
        else if ($("#estado_opc").val() == '') {
          ons.notification.alert({
            message: 'Informe uma estado de nascimento.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDANDO OS DADOS DO FILHO
        else if (possuifilhos_opc == 'sim' && $('#nomepaifilho_opc').val() == '') {
          ons.notification.alert({
            message: 'Informe se o filho possui o nome do pai na certidão de nascimento.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        } 
        else if(possuifilhos_opc == 'sim' && !cidadefilho_opc){
          ons.notification.alert({
            message: 'Informe a cidade de nascimento do filho.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        else if(possuifilhos_opc == 'sim' && !estadofilho_opc){
          ons.notification.alert({
            message: 'Informe o estado de nascimento do filho.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDANDO O ESTADO CIVIL DO TITULAR
        else if ($("#estadocivil_opc").val() == '') {
          ons.notification.alert({
            message: 'Informe um estado civil.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }    

        //VALIDANDO A IDADE DO CONJUGE 
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && ($("#idadeconjuge_opc").val() == '' || parseInt($("#idadeconjuge_opc").val()) == 0)) {
          ons.notification.alert({
            message: 'Informe uma idade superior a 0 para o cônjuge.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDANDO A CIDADE DO CONJUGE
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && $("#cidadeconjuge_opc").val() == '') {
          ons.notification.alert({
            message: 'Informe uma cidade de nascimento para o cônjuge.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        //VALIDADO O ESTADO DO COJUGE
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && $("#estadoconjuge_opc").val() == '') {
          ons.notification.alert({
            message: 'Informe uma estado de nascimento para o cônjuge.',
            title: 'Mensagem',
          });
          $("#dados").css("display","none");
        }
        else{
          //ESCONDENDO O BOTAO DE CRIAR PERSONAGEM
          $("#preencher").css('display','none');

          /*
          * DADOS PESSOA PRINCIPAL
          */
          var ano_nasc_pessoa = anoatual - parseInt($("#idade_opc").val());
          var mes_nasc_pessoa = mesatual;
          var dia_nasc_pessoa = diaatual;

          var data_nasc_pessoa = dia_nasc_pessoa+'/'+mes_nasc_pessoa+'/'+ano_nasc_pessoa;
          $("#nasc").val(data_nasc_pessoa);

          app.criaEndereco();
          $("#endereco_titular").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
          $("#num_logradouro_titular").val($("#num_logradouro").val());
          $("#cep_logradouro_titular").val($("#cep_logradouro").val());
          $("#bairro_titular").val($("#bairro").val());
                      
          $("#cidade").val($("#cidade_opc").val().toUpperCase());

          $("#estado").val($("#estado_opc").val().toUpperCase());

          $("#sexo").val($('input[name^="sexo_opc"]:checked').val());

          $("#rg").val(app.gerarNumeroRG());

          $("#cpf").val(app.gerarNumeroCPF());

          $("#te").val(app.gerarNumeroTituloEleitor());

          if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
            app.buscaNomeMasculino();
          }
          else{
            app.buscaNomeFeminino();
          }
          //primeiro sobrenome
          app.buscaSobrenome();
          var sobrenome1 = $(".sobrenome").val();
          //segundo sobrenome
          app.buscaSobrenome();
          var sobrenome2 = $(".sobrenome").val();

          var sobrenome = sobrenome1+' '+sobrenome2


          var nome_pessoa = $(".nome_pessoa").val();
          $("#nome_titular").val(nome_pessoa+' '+sobrenome);

          //nome da mãe
          app.buscaNomeFeminino();
          var nome_pessoa = $(".nome_pessoa").val();
          $("#nome_mae").val(nome_pessoa+' '+sobrenome);

          //nome do pai
          app.buscaNomeMasculino();
          var nome_pessoa = $(".nome_pessoa").val();
          $("#nome_pai").val(nome_pessoa+' '+sobrenome2);

          //Avó Materna
          app.buscaNomeFeminino();
          var nome_pessoa = $(".nome_pessoa").val();
          app.buscaSobrenome();
          var sobrenome = $(".sobrenome").val();
          sobrenome = sobrenome+' '+sobrenome1;
          $("#avo0_materna_titular").val(nome_pessoa+' '+sobrenome);

          //Avô Materno
          app.buscaNomeMasculino();
          var nome_pessoa = $(".nome_pessoa").val();
          $("#avo1_materno_titular").val(nome_pessoa+' '+sobrenome1);
         
          //Avó Paterna
          app.buscaNomeFeminino();
          var nome_pessoa = $(".nome_pessoa").val();
          app.buscaSobrenome();
          var sobrenome = $(".sobrenome").val();
          sobrenome = sobrenome+' '+sobrenome2;
          $("#avo0_paterna_titular").val(nome_pessoa+' '+sobrenome);

          //Avô Paterno
          app.buscaNomeMasculino();
          var nome_pessoa = $(".nome_pessoa").val();
          $("#avo1_paterno_titular").val(nome_pessoa+' '+sobrenome2);

          /*
          *DADOS CONJUGE
          */
          var sobrenomeconjuge1 = '';
          if ($("#estadocivil_opc").val() != 's') {
            $("#conjuge").css("display","");

            var ano_nasc_conjuge = anoatual - parseInt($("#idadeconjuge_opc").val());
            var mes_nasc_conjuge = mesatual;
            var dia_nasc_conjuge = diaatual;

            var data_nasc_conjuge = dia_nasc_conjuge+'/'+mes_nasc_conjuge+'/'+ano_nasc_conjuge;
            $("#nasc_conjuge").val(data_nasc_conjuge);



            $("#cidade_conjuge").val($("#cidadeconjuge_opc").val().toUpperCase());

            $("#estado_conjuge").val($("#estadoconjuge_opc").val().toUpperCase());
            
            if ( $("#cidade").val() == $("#cidade_conjuge").val() && $("#estado").val() == $("#estado_conjuge").val() ) {
              $("#endereco_conjuge").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
              $("#num_logradouro_conjuge").val($("#num_logradouro").val());
              $("#cep_logradouro_conjuge").val($("#cep_logradouro").val());
              $("#bairro_conjuge").val($("#bairro").val());
            }
            else{
              app.criaEndereco();
              $("#endereco_conjuge").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
              $("#num_logradouro_conjuge").val($("#num_logradouro").val());
              $("#cep_logradouro_conjuge").val($("#cep_logradouro").val());
              $("#bairro_conjuge").val($("#bairro").val());
            }

            $("#sexo_conjuge").val($('input[name^="sexoconjuge_opc"]:checked').val());

            $("#rg_conjuge").val(app.gerarNumeroRG());

            $("#cpf_conjuge").val(app.gerarNumeroCPF());

            $("#te_conjuge").val(app.gerarNumeroTituloEleitor());

            if ($('input[name^="sexoconjuge_opc"]:checked').val() == 'M') {
              app.buscaNomeMasculino();
            }
            else{
              app.buscaNomeFeminino();
            }
            //primeiro sobrenome
            app.buscaSobrenome();
            sobrenomeconjuge1 = $(".sobrenome").val();
            //segundo sobrenome
            app.buscaSobrenome();
            var sobrenomeconjuge2 = $(".sobrenome").val();

            var sobrenomeconjuge = sobrenomeconjuge1+' '+sobrenome2


            var nome_pessoa = $(".nome_pessoa").val();
            $("#nome_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //nome da mãe
            app.buscaNomeFeminino();
            var nome_pessoa = $(".nome_pessoa").val();
            $("#nome_mae_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //nome do pai
            app.buscaNomeMasculino();
            var nome_pessoa = $(".nome_pessoa").val();
            $("#nome_pai_conjuge").val(nome_pessoa+' '+sobrenomeconjuge2);

            //Avó Materna
            app.buscaNomeFeminino();
            var nome_pessoa = $(".nome_pessoa").val();
            app.buscaSobrenome();
            var sobrenomeconjuge = $(".sobrenome").val();
            sobrenomeconjuge = sobrenomeconjuge+' '+sobrenomeconjuge1;
            $("#avo0_materna_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //Avô Materno
            app.buscaNomeMasculino();
            var nome_pessoa = $(".nome_pessoa").val();
            $("#avo1_materno_conjuge").val(nome_pessoa+' '+sobrenomeconjuge1);
           
            //Avó Paterna
            app.buscaNomeFeminino();
            var nome_pessoa = $(".nome_pessoa").val();
            app.buscaSobrenome();
            var sobrenomeconjuge = $(".sobrenome").val();
            sobrenomeconjuge = sobrenomeconjuge+' '+sobrenomeconjuge2;
            $("#avo0_paterna_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //Avô Paterno
            app.buscaNomeMasculino();
            var nome_pessoa = $(".nome_pessoa").val();
            $("#avo1_paterno_conjuge").val(nome_pessoa+' '+sobrenomeconjuge2);
          }

          /*
          *DADOS FILHOS
          */
          if ($('input[name^="possuifilhos_opc"]:checked').val() == 'sim') {
            $("#filho").css("display","");
            var maxfilho = $('#qtdfilhos_opc').val()

            if ($("#sexo").val() == 'F') {
              nome_mae_filho = $("#nome_titular").val();
              avo0_materna_filho = $("#nome_mae").val();
              avo1_materno_filho = $("#nome_pai").val();
            }
            else if ($("#sexo").val() == 'M' && $("#estadocivil_opc").val() == 's'){
              app.buscaNomeFeminino();
              //primeiro sobrenome
              app.buscaSobrenome();
              sobrenomeconjuge1 = $(".sobrenome").val();
              
              //segundo sobrenome
              app.buscaSobrenome();
              var sobrenome1 = $(".sobrenome").val();

              var nome_pessoa = $(".nome_pessoa").val();

              nome_mae_filho = $(".nome_pessoa").val()+' '+sobrenomeconjuge1+' '+sobrenome1;

              app.buscaNomeFeminino();
              avo0_materna_filho = $(".nome_pessoa").val()+' '+sobrenomeconjuge1+' '+sobrenome1;
              app.buscaNomeMasculino();
              avo1_materno_filho = $(".nome_pessoa").val()+' '+sobrenome1;
            }
            else{
              nome_mae_filho = $("#nome_conjuge").val();
              avo0_materna_filho = $("#nome_mae_conjuge").val();
              avo1_materno_filho = $("#nome_pai_conjuge").val();
            }

            app.criaDadosFilhos(maxfilho, sobrenome2, sobrenomeconjuge1, nome_mae_filho, avo0_materna_filho, avo1_materno_filho);
          }
          
          $("#dados").css("display","");
        }
      });
    </script>



    <style>
      .intro {
        text-align: justify;
        padding: 0 20px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_nomes.html">
  <ons-page>
      <ons-toolbar id="gerar_nomes_">
          <div class="left">
              <ons-back-button>Voltar</ons-back-button>
          </div>
          <div class="center"></div>
      </ons-toolbar>
      <main role="main" class="container"> 
        <ons-fab class="clipboard" data-clipboard-target="#nome_titular_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab> 
        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend class="nivel_1">1. Qual o gênero?</legend>
              <div class="row sub_nivel_1">
                <div class="form-check col-md-12">
                  <input class="form-check-input" type="radio" name="sexo_opc_unico" id="masculino_unico" value="M" checked>
                  <label class="form-check-label" for="masculino_unico">Masculino</label>
                </div>
              </div>
              <div class="row sub_nivel_1">
                <div class="form-check form-check_ultimo col-md-12">
                  <input class="form-check-input" type="radio" name="sexo_opc_unico" id="feminino_unico" value="F">
                  <label class="form-check-label" for="feminino_unico">Feminino</label>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="nivel_1">2. O que deseja gerar?</legend>
              <div class="form-row sub_nivel_1">
                <div class="form-group col-md-12">
                  <select id="tiponome_titular_unico" class="form-control">
                    <option value="ps">Primeiro nome e Sobrenome</option>
                    <option value="p">Primeiro nome</option>
                    <option value="s">Sobrenome</option>
                  </select>
                </div>
              </div>
            </fieldset>
          </form>
        </div>

        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <input type="hidden" class="nome_pessoa">
          <input type="hidden" class="sobrenome">
          <form>

            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="nome_titular_unico">Nome</label>
                  <input type="text" class="form-control nome" id="nome_titular_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_nome">GERAR NOME</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_nomes_ div.center').textContent = 'Gerador de Nomes';        
        var sobrenome_unico1 = '';
        var sobrenome_unico2 = '';
        var sobrenome_unico = '';
        var nome_pessoa_unico = '';
        $(".nome_pessoa").val('');
        $(".sobrenome").val('');

        var tiponome_titular_unico = $("#tiponome_titular_unico").val();
        if (tiponome_titular_unico == 'p') {
          //NOME
          if ($('input[name^="sexo_opc_unico"]:checked').val() == 'M') {
            app.buscaNomeMasculino();
          }
          else{
            app.buscaNomeFeminino();
          }
        }
        else if(tiponome_titular_unico == 's'){
          //primeiro sobrenome_unico
          app.buscaSobrenome();
          sobrenome_unico1 = $(".sobrenome").val();
          //segundo sobrenome_unico
          app.buscaSobrenome();
          app.sobrenome_unico2 = $(".sobrenome").val();
        }
        else{
          //NOME
          if ($('input[name^="sexo_opc_unico"]:checked').val() == 'M') {
            app.buscaNomeMasculino();
          }
          else{
            app.buscaNomeFeminino();
          }
          //primeiro sobrenome_unico
          app.buscaSobrenome();
          sobrenome_unico1 = $(".sobrenome").val();
          //segundo sobrenome_unico
          app.buscaSobrenome();
          sobrenome_unico2 = $(".sobrenome").val();
        }

        sobrenome_unico = sobrenome_unico1+' '+sobrenome_unico2
        nome_pessoa_unico = $(".nome_pessoa").val();
        $("#nome_titular_unico").val(nome_pessoa_unico+' '+sobrenome_unico);

        //ACAO DO BOTAO CRIAR PERSONAGEM
        $('#btn_gerar_nome').click(function(){
          sobrenome_unico1 = '';
          sobrenome_unico2 = '';
          sobrenome_unico = '';
          nome_pessoa_unico = '';
          $(".nome_pessoa").val('');
          $(".sobrenome").val('');

          var tiponome_titular_unico = $("#tiponome_titular_unico").val();
          if (tiponome_titular_unico == 'p') {
            //NOME
            if ($('input[name^="sexo_opc_unico"]:checked').val() == 'M') {
              app.buscaNomeMasculino();
            }
            else{
              app.buscaNomeFeminino();
            }
          }
          else if(tiponome_titular_unico == 's'){
            //primeiro sobrenome_unico
            app.buscaSobrenome();
            sobrenome_unico1 = $(".sobrenome").val();
            //segundo sobrenome_unico
            app.buscaSobrenome();
            sobrenome_unico2 = $(".sobrenome").val();
          }
          else{
            //NOME
            if ($('input[name^="sexo_opc_unico"]:checked').val() == 'M') {
              app.buscaNomeMasculino();
            }
            else{
              app.buscaNomeFeminino();
            }
            //primeiro sobrenome_unico
            app.buscaSobrenome();
            sobrenome_unico1 = $(".sobrenome").val();
            //segundo sobrenome_unico
            app.buscaSobrenome();
            sobrenome_unico2 = $(".sobrenome").val();
          }

          sobrenome_unico = sobrenome_unico1+' '+sobrenome_unico2
          nome_pessoa_unico = $(".nome_pessoa").val();
          $("#nome_titular_unico").val(nome_pessoa_unico+' '+sobrenome_unico);
        });

        var text = "";
        $('.clipboard').click(function(){
          text = $("#nome_titular_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_cnh.html">
  <ons-page>
      <ons-toolbar id="gerar_cnh_">
          <div class="left">
              <ons-back-button>Voltar</ons-back-button>
          </div>
          <div class="center"></div>
      </ons-toolbar>
      <main role="main" class="container">  
      <ons-fab class="clipboard" data-clipboard-target="#cnh_unico" position="bottom right">
        <ons-icon icon="md-copy"></ons-icon>
      </ons-fab>

        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>

            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cnh_unico">Número da CNH</label>
                  <input type="text" class="form-control cnh" id="cnh_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_cnh">GERAR CNH</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_cnh_ div.center').textContent = 'Gerador de CNH'; 
        $("#cnh_unico").val(app.gerarNumeroCNH());
        $('#btn_gerar_cnh').click(function(){
          $("#cnh_unico").val(app.gerarNumeroCNH());
        });

        var text = "";
        $('.clipboard').click(function(){
          text = $("#cnh_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_rg.html">
  <ons-page>
      <ons-toolbar id="gerar_rg_">
          <div class="left">
              <ons-back-button>Voltar</ons-back-button>
          </div>
          <div class="center"></div>
      </ons-toolbar>
      <main role="main" class="container">   
        <ons-fab class="clipboard" data-clipboard-target="#rg_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab>
        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="rg_unico">Número do RG</label><br>
                  <input type="text" class="form-control rg" id="rg_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_rg">GERAR RG</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_rg_ div.center').textContent = 'Gerador de RG';
        $('.rg').mask('99.999.999-9');

        $("#rg_unico").val(app.gerarNumeroRG());
        $('#btn_gerar_rg').click(function(){
          $("#rg_unico").val(app.gerarNumeroRG());
        }); 

        var text = "";
        $('.clipboard').click(function(){
          text = $("#rg_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });   
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_tituloeleitor.html">
  <ons-page>
      <ons-toolbar id="gerar_tituloeleitor_">
          <div class="left">
              <ons-back-button>Voltar</ons-back-button>
          </div>
          <div class="center"></div>
      </ons-toolbar>
      <main role="main" class="container">   
        <ons-fab class="clipboard" data-clipboard-target="#te_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab>
        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="te_unico">Número do Título de Eleitor</label><br>
                  <input type="text" class="form-control te" id="te_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_te">GERAR TÍTULO DE ELEITOR</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_tituloeleitor_ div.center').textContent = 'Gerador de Título de Eleitor';   
        $('.te').mask('9999 9999 9999');

        $("#te_unico").val(app.gerarNumeroTituloEleitor());
        $('#btn_gerar_te').click(function(){
          $("#te_unico").val(app.gerarNumeroTituloEleitor());
        });

        var text = "";
        $('.clipboard').click(function(){
          text = $("#te_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });   
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_cpf.html">
  <ons-page>
      <ons-toolbar id="gerar_cpf_">
          <div class="left">
              <ons-back-button>Voltar</ons-back-button>
          </div>
          <div class="center"></div>
      </ons-toolbar>
      <main role="main" class="container">   
        <ons-fab class="clipboard" data-clipboard-target="#cpf_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab>
        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cpf_unico">Número do CPF</label><br>
                  <input type="text" class="form-control cpf" id="cpf_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_cpf">GERAR CPF</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_cpf_ div.center').textContent = 'Gerador de CPF';  
        $('.cpf').mask('999.999.999-99');

        $("#cpf_unico").val(app.gerarNumeroCPF());
        $('#btn_gerar_cpf').click(function(){
          $("#cpf_unico").val(app.gerarNumeroCPF());
        });  
        var text = "";
        $('.clipboard').click(function(){
          text = $("#cpf_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });     
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_pispasep.html">
  <ons-page>
        <ons-toolbar id="gerar_pispasep_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
         <main role="main" class="container">   
        <ons-fab class="clipboard" data-clipboard-target="#pis_pasep_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab>
        <div style="padding: 20px 1.5rem 3rem 1.5rem;">
          <form>
            <fieldset>
              <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="pis_pasep_unico">Número do Pis/Pasep</label><br>
                  <input type="text" class="form-control pis_pasep" id="pis_pasep_unico">
                </div>
              </div>
            </fieldset>

            <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_pispasep">GERAR PIS/PASEP</ons-button>
            </div>
            
          </form>
        </div>
      </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_pispasep_ div.center').textContent = 'Gerador de PIS/PASEP';   
        $('.pis_pasep').mask('999.99999.99-9');

        $("#pis_pasep_unico").val(app.gerarNumeroPIS_PASEP());
        $('#btn_gerar_pispasep').click(function(){
          $("#pis_pasep_unico").val(app.gerarNumeroPIS_PASEP());
        });

        var text = "";
        $('.clipboard').click(function(){
          text = $("#pis_pasep_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_cnpj.html">
  <ons-page>
        <ons-toolbar id="gerar_cnpj_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <main role="main" class="container">   
        <ons-fab class="clipboard" data-clipboard-target="#cnpj_unico" position="bottom right">
          <ons-icon icon="md-copy"></ons-icon>
        </ons-fab>
          <div class="starter-template" id="dados" style="padding: 20px 1.5rem 3rem 1.5rem;">
            <form>
              <fieldset>
                <legend style="margin-left: -5px;font-weight: bold;margin-top: 25px;">Dados Pessoais</legend>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="cnpj_unico">Número do CNPJ</label><br>
                    <input type="text" class="form-control cnpj" id="cnpj_unico">
                  </div>
                </div>
              </fieldset>

              <div class="text-center" style="margin: 20px auto;display: grid;">
                <ons-button id="btn_gerar_cnpj">GERAR CNPJ</ons-button>
              </div>
              
            </form>
          </div>
        </main><!-- /.container -->

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_cnpj_ div.center').textContent = 'Gerador de CNPJ';
        $('.cnpj').mask('99.999.999/9999-99');

        $("#cnpj_unico").val(app.gerarNumeroCNPJ());
        $('#btn_gerar_cnpj').click(function(){
          $("#cnpj_unico").val(app.gerarNumeroCNPJ());
        });

        var text = "";
        $('.clipboard').click(function(){
          text = $("#cnpj_unico").val();
          if (text != '') {
            var clipboard = new ClipboardJS('.clipboard');
            clipboard.on('success', function(e) {
              e.clearSelection();
              toastr["success"]("Copiado para a área de transferência!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });

            clipboard.on('error', function(e) {
              toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!");
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
            });
          }          
        });
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_carteiratrabalho.html">
  <ons-page>
        <ons-toolbar id="gerar_carteiratrabalho_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_carteiratrabalho_ div.center').textContent = 'Gerador de Carteira de Trabalho';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_certidaonascimento.html">
  <ons-page>
        <ons-toolbar id="gerar_certidaonascimento_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_certidaonascimento_ div.center').textContent = 'Gerador de Certidão de Nascimento';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_certidaocasamento.html">
  <ons-page>
        <ons-toolbar id="gerar_certidaocasamento_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_certidaocasamento_ div.center').textContent = 'Gerador de Certidão de Casamento';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_certidaoobito.html">
  <ons-page>
        <ons-toolbar id="gerar_certidaoobito_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_certidaoobito_ div.center').textContent = 'Gerador de Certidão de Óbito';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_endereco.html">
  <ons-page>
        <ons-toolbar id="gerar_endereco_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_endereco_ div.center').textContent = 'Gerador de Comprovante de Endereço';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_atestadomedico.html">
  <ons-page>
        <ons-toolbar id="gerar_atestadomedico_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_atestadomedico_ div.center').textContent = 'Gerador de Atestado Médico';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

<template id="gerar_passaporte.html">
  <ons-page>
        <ons-toolbar id="gerar_passaporte_">
            <div class="left">
              <ons-back-button>Voltar</ons-back-button>
            </div>
            <div class="center"></div>
        </ons-toolbar>
        <div id="">
            
        </div>

    <script>
      ons.getScriptPage().onInit = function () {
        this.querySelector('#gerar_passaporte_ div.center').textContent = 'Gerador de Passaporte';        
      }
    </script>
    <style>
        .button-margin {
            margin: 6px 0;
        }

      .intro {
        text-align: center;
        padding: 0 20px;
        margin-top: 40px;
      }

      ons-card {
        cursor: pointer;
        color: #333;
      }

      .card__title,
      .card--material__title {
        font-size: 20px;
      }
    </style>
  </ons-page>
</template>

</body>

</html>
