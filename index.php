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
  <title>Innovate Soft - Gerador Online de Pessoas</title>
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
        <h1 class="mt-4">Gerador Online de Pessoas</h1>
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
            <div class="text-center">
              <a class="btn btn-primary criar_personagem"  style="text-align: center;" href="#" role="button">GERAR PESSOA</a>
            </div>
          </form>
        </div>

        <div class="starter-template" id="dados" style="display: none;padding: 0 1.5rem 3rem 1.5rem;">
          <input type="hidden" id="tipo_moradia">
          <input type="hidden" id="logradouro">
          <input type="hidden" id="num_logradouro">
          <input type="hidden" id="cep_logradouro">
          <input type="hidden" id="bairro">
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
              <a class="btn btn-primary" href="./gerar_pessoa.php" role="button" style="margin-bottom: 10px;">GERAR NOVA PESSOA</a>
              <!-- <button type="button" class="btn btn-primary gerar_doc" style="margin-bottom: 10px;">GERAR DOCUMENTOS</button> -->
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
          $("#pis_pasep_titular").val(gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_titular").val(gerarNumeroCNPJ());
          $("#cidade_empregador_titular").val($("#cidade_opc").val().toUpperCase());
          $("#estado_empregador_titular").val($("#estado_opc").val());

          criaEndereco();
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
          $("#pis_pasep_conjuge").val(gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_conjuge").val(gerarNumeroCNPJ());
          $("#cidade_empregador_conjuge").val($("#cidade_conjuge").val().toUpperCase());
          $("#estado_empregador_conjuge").val($("#estado_conjuge").val());

          criaEndereco();
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
          $("#pis_pasep_filho"+num).val(gerarNumeroPIS_PASEP());
          $("#cnpj_empregador_filho"+num).val(gerarNumeroCNPJ());
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
        criaOpcaoFilhos(maxfilho);
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
      $('.criar_personagem').click(function(){
        aguarde('open');
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
          aguarde('close');
          alert("Informe uma idade superior a 0.");
          $("#dados").css("display","none");
        }
        //VALIDANDO A CIDADE DO TITULAR
        else if ($("#cidade_opc").val() == '') {
          aguarde('close');
          alert("Informe uma cidade de nascimento.");
          $("#dados").css("display","none");
        }
        //VALIDANDO O ESTADO DO TITULAR
        else if ($("#estado_opc").val() == '') {
          aguarde('close');
          alert("Informe uma estado de nascimento.");
          $("#dados").css("display","none");
        }
        //VALIDANDO OS DADOS DO FILHO
        else if (possuifilhos_opc == 'sim' && $('#nomepaifilho_opc').val() == '') {
          aguarde('close');
          alert("Informe se o filho possui o nome do pai na certidão de nascimento.");
          $("#dados").css("display","none");
        } 
        else if(possuifilhos_opc == 'sim' && !cidadefilho_opc){
          aguarde('close');
          alert("Informe a cidade de nascimento do filho.");
          $("#dados").css("display","none");
        }
        else if(possuifilhos_opc == 'sim' && !estadofilho_opc){
          aguarde('close');
          alert("Informe o estado de nascimento do filho.");
          $("#dados").css("display","none");
        }
        //VALIDANDO O ESTADO CIVIL DO TITULAR
        else if ($("#estadocivil_opc").val() == '') {
          aguarde('close');
          alert("Informe um estado civil.");
          $("#dados").css("display","none");
        }    

        //VALIDANDO A IDADE DO CONJUGE 
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && ($("#idadeconjuge_opc").val() == '' || parseInt($("#idadeconjuge_opc").val()) == 0)) {
          aguarde('close');
          alert("Informe uma idade superior a 0 para o cônjuge.");
          $("#dados").css("display","none");
        }
        //VALIDANDO A CIDADE DO CONJUGE
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && $("#cidadeconjuge_opc").val() == '') {
          aguarde('close');
          alert("Informe uma cidade de nascimento para o cônjuge.");
          $("#dados").css("display","none");
        }
        //VALIDADO O ESTADO DO COJUGE
        else if ($("#estadocivil_opc").val() != 's' && $("#estadocivil_opc").val() != '' && $("#estadoconjuge_opc").val() == '') {
          aguarde('close');
          alert("Informe uma estado de nascimento para o cônjuge.");
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

          criaEndereco();
          $("#endereco_titular").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
          $("#num_logradouro_titular").val($("#num_logradouro").val());
          $("#cep_logradouro_titular").val($("#cep_logradouro").val());
          $("#bairro_titular").val($("#bairro").val());
                      
          $("#cidade").val($("#cidade_opc").val().toUpperCase());

          $("#estado").val($("#estado_opc").val().toUpperCase());

          $("#sexo").val($('input[name^="sexo_opc"]:checked').val());

          $("#rg").val(gerarNumeroRG());

          $("#cpf").val(gerarNumeroCPF());

          $("#te").val(gerarNumeroTituloEleitor());

          if ($('input[name^="sexo_opc"]:checked').val() == 'M') {
            buscaNomeMasculino();
          }
          else{
            buscaNomeFeminino();
          }
          //primeiro sobrenome
          buscaSobrenome();
          var sobrenome1 = $("#sobrenome").val();
          //segundo sobrenome
          buscaSobrenome();
          var sobrenome2 = $("#sobrenome").val();

          var sobrenome = sobrenome1+' '+sobrenome2


          var nome_pessoa = $("#nome_pessoa").val();
          $("#nome_titular").val(nome_pessoa+' '+sobrenome);

          //nome da mãe
          buscaNomeFeminino();
          var nome_pessoa = $("#nome_pessoa").val();
          $("#nome_mae").val(nome_pessoa+' '+sobrenome);

          //nome do pai
          buscaNomeMasculino();
          var nome_pessoa = $("#nome_pessoa").val();
          $("#nome_pai").val(nome_pessoa+' '+sobrenome2);

          //Avó Materna
          buscaNomeFeminino();
          var nome_pessoa = $("#nome_pessoa").val();
          buscaSobrenome();
          var sobrenome = $("#sobrenome").val();
          sobrenome = sobrenome+' '+sobrenome1;
          $("#avo0_materna_titular").val(nome_pessoa+' '+sobrenome);

          //Avô Materno
          buscaNomeMasculino();
          var nome_pessoa = $("#nome_pessoa").val();
          $("#avo1_materno_titular").val(nome_pessoa+' '+sobrenome1);
         
          //Avó Paterna
          buscaNomeFeminino();
          var nome_pessoa = $("#nome_pessoa").val();
          buscaSobrenome();
          var sobrenome = $("#sobrenome").val();
          sobrenome = sobrenome+' '+sobrenome2;
          $("#avo0_paterna_titular").val(nome_pessoa+' '+sobrenome);

          //Avô Paterno
          buscaNomeMasculino();
          var nome_pessoa = $("#nome_pessoa").val();
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
              criaEndereco();
              $("#endereco_conjuge").val($("#tipo_moradia").val()+' '+$("#logradouro").val());
              $("#num_logradouro_conjuge").val($("#num_logradouro").val());
              $("#cep_logradouro_conjuge").val($("#cep_logradouro").val());
              $("#bairro_conjuge").val($("#bairro").val());
            }

            $("#sexo_conjuge").val($('input[name^="sexoconjuge_opc"]:checked').val());

            $("#rg_conjuge").val(gerarNumeroRG());

            $("#cpf_conjuge").val(gerarNumeroCPF());

            $("#te_conjuge").val(gerarNumeroTituloEleitor());

            if ($('input[name^="sexoconjuge_opc"]:checked').val() == 'M') {
              buscaNomeMasculino();
            }
            else{
              buscaNomeFeminino();
            }
            //primeiro sobrenome
            buscaSobrenome();
            sobrenomeconjuge1 = $("#sobrenome").val();
            //segundo sobrenome
            buscaSobrenome();
            var sobrenomeconjuge2 = $("#sobrenome").val();

            var sobrenomeconjuge = sobrenomeconjuge1+' '+sobrenome2


            var nome_pessoa = $("#nome_pessoa").val();
            $("#nome_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //nome da mãe
            buscaNomeFeminino();
            var nome_pessoa = $("#nome_pessoa").val();
            $("#nome_mae_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //nome do pai
            buscaNomeMasculino();
            var nome_pessoa = $("#nome_pessoa").val();
            $("#nome_pai_conjuge").val(nome_pessoa+' '+sobrenomeconjuge2);

            //Avó Materna
            buscaNomeFeminino();
            var nome_pessoa = $("#nome_pessoa").val();
            buscaSobrenome();
            var sobrenomeconjuge = $("#sobrenome").val();
            sobrenomeconjuge = sobrenomeconjuge+' '+sobrenomeconjuge1;
            $("#avo0_materna_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //Avô Materno
            buscaNomeMasculino();
            var nome_pessoa = $("#nome_pessoa").val();
            $("#avo1_materno_conjuge").val(nome_pessoa+' '+sobrenomeconjuge1);
           
            //Avó Paterna
            buscaNomeFeminino();
            var nome_pessoa = $("#nome_pessoa").val();
            buscaSobrenome();
            var sobrenomeconjuge = $("#sobrenome").val();
            sobrenomeconjuge = sobrenomeconjuge+' '+sobrenomeconjuge2;
            $("#avo0_paterna_conjuge").val(nome_pessoa+' '+sobrenomeconjuge);

            //Avô Paterno
            buscaNomeMasculino();
            var nome_pessoa = $("#nome_pessoa").val();
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
              buscaNomeFeminino();
              //primeiro sobrenome
              buscaSobrenome();
              sobrenomeconjuge1 = $("#sobrenome").val();
              
              //segundo sobrenome
              buscaSobrenome();
              var sobrenome1 = $("#sobrenome").val();

              var nome_pessoa = $("#nome_pessoa").val();

              nome_mae_filho = $("#nome_pessoa").val()+' '+sobrenomeconjuge1+' '+sobrenome1;

              buscaNomeFeminino();
              avo0_materna_filho = $("#nome_pessoa").val()+' '+sobrenomeconjuge1+' '+sobrenome1;
              buscaNomeMasculino();
              avo1_materno_filho = $("#nome_pessoa").val()+' '+sobrenome1;
            }
            else{
              nome_mae_filho = $("#nome_conjuge").val();
              avo0_materna_filho = $("#nome_mae_conjuge").val();
              avo1_materno_filho = $("#nome_pai_conjuge").val();
            }

            criaDadosFilhos(maxfilho, sobrenome2, sobrenomeconjuge1, nome_mae_filho, avo0_materna_filho, avo1_materno_filho);
          }
          
          $("#dados").css("display","");
          aguarde('close');
        }
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

      $('.date').mask('99/99/9999');
      $('.cpf').mask('999.999.999-99');
      $('.rg').mask('99.999.999-9');
      $('.pis_pasep').mask('999.99999.99-9');
      $('.cnpj').mask('99.999.999/9999-99');
      $('.te').mask('9999 9999 9999 9999');
      $('.cep').mask('99.999-999');
      $('.valor').maskMoney({
        allowNegative: false, 
        thousands:'', 
        decimal:',', 
        affixesStay: false
      });



      //ACAO DO BOTAO GERAR DOCUMENTOS
      $('.gerar_doc').click(function(){          
        //VALIDANDO OS DADOS DO FALECIMENTO DO TITULAR
        if ($("#obito").val() == 's' && ($("#cidade_obito").val() == '' || $("#estado_obito").val() == '' || $("#data_obito").val() == '' || $("#motivo_obito").val() == '')) {
          alert("Informe os dados do falecimento do titular.");
        }
        //VALIDANDO OS DADOS DO FALECIMENTO DO TITULAR
        // else if ($("#empregado_titular").val() == 's' && ($("#pis_pasep_titular").val() == '' || $("#admissao_titular").val() == '' || $("#empregador_titular").val() == '' || $("#cnpj_empregador_titular").val() == '' || $("#cargo_titular").val() == '' || $("#endereco_empregador_titular").val() == '' || $("#bairro_empregador_titular").val() == '' || $("#cidade_empregador_titular").val() == '' || $("#estado_empregador_titular").val() == '')) {
        //   alert("Informe os dados do empregador do titular.");
        // }
        //VALIDANDO OS DADOS DO FALECIMENTO DO CONJUGE
        else if($("#obito_conjuge").val() == 's' && ($("#cidade_obito_conjuge").val() == '' || $("#estado_obito_conjuge").val() == '' || $("#data_obito_conjuge").val() == '' || $("#motivo_obito_conjuge").val() == '')){
          alert("Informe os dados do falecimento do cônjuge.");
        }
        //VALIDANDO OS DADOS DO FALECIMENTO DO CONJUGE
        // else if ($("#empregadoconjuge").val() == 's' && ($("#pis_pasep_conjuge").val() == '' || $("#admissao_conjuge").val() == '' || $("#empregador_conjuge").val() == '' || $("#cnpj_empregador_conjuge").val() == '' || $("#cargo_conjuge").val() == '' || $("#endereco_empregador_conjuge").val() == '' || $("#bairro_empregador_conjuge").val() == '' || $("#cidade_empregador_conjuge").val() == '' || $("#estado_empregador_conjuge").val() == '')) {
        //   alert("Informe os dados do empregador do cônjuge.");
        // }
        //VALIDANDO OS DADOS DO FALECIMENTO DO FILHO
        else if(verificaDadosFalecidoFilho()){
          alert("Informe os dados do falecimento do(s) filho(s).");
        }
        //VALIDANDO OS DADOS DO EMPREGADOR DO FILHO
        // else if(verificaDadosEmpregadorFilho()){
        //   alert("Informe os dados do empregador do(s) filho(s).");
        // }
        else{
          aguarde('open');
          var cor_pele = corPele();

          $('#divdocumento').empty();
          var expedicao = '01/01/2010';
          var doc_origem = 'NASC. LV-138 FL129';

          //DADOS PARA GERAR DOCUMENTO DO PERSONAGEM PRINCIPAL
          var possuifilhos = $('input[name^="possuifilhos_opc"]:checked').val();
          var cpf_titular = $("#cpf").val();
          var rg_titular = $("#rg").val();
          var cidade_origem_titular = $("#cidade").val();
          var estado_origem_titular = $("#estado").val();
          var nome_titular = $("#nome_titular").val();
          var nasc_titular = $("#nasc").val();
          var sexo_titular = $("#sexo").val();
          var nome_mae_titular = $("#nome_mae").val();
          var nome_pai_titular = $("#nome_pai").val();
          var cidade_titular = $("#cidade").val();
          var estado_titular = $("#estado").val();
          var eleitor_titular = 'n';
          if ($("#te").val() != '') {
            eleitor_titular = 's';
          }
                    
          //DADOS PARA GERAR DOCUMENTO DO CONJUGE
          var cpf_conjuge = $("#cpf_conjuge").val();
          var rg_conjuge = $("#rg_conjuge").val();
          var cidade_origem_conjuge = $("#cidade_conjuge").val();
          var estado_origem_conjuge = $("#estado_conjuge").val();
          var nome_conjuge = $("#nome_conjuge").val();
          var nasc_conjuge = $("#nasc_conjuge").val();
          var sexo_conjuge = $("#sexo_conjuge").val();
          var nome_mae_conjuge = $("#nome_mae_conjuge").val();
          var nome_pai_conjuge = $("#nome_pai_conjuge").val();
          var cidade_conjuge = $("#cidade_conjuge").val();
          var estado_conjuge = $("#estado_conjuge").val();
          var eleitor_conjuge = 'n';
          if ($("#te_conjuge").val() != '') {
            eleitor_conjuge = 's';
          }
          var pessoas = new Array();
          var filhos = new Array();

          var avo0_paterna_filho = '';
          var avo1_paterno_filho = '';
          var nome_pai_filho = '';
          if (sexo_titular == 'F') {
            if ($('#nomepaifilho_opc').val() == 'S') {
              nome_pai_filho = nome_conjuge;
              avo0_paterna_filho = nome_mae_conjuge;
              avo1_paterno_filho = nome_pai_conjuge; 
            }
          }
          else{            
            if ($('#nomepaifilho_opc').val() == 'S') {
              nome_pai_filho = nome_titular;
              avo0_paterna_filho = nome_mae_titular;
              avo1_paterno_filho = nome_pai_titular;
            }
          }

          $('.cada_filho').each(function(){
            var num = $(this).attr('num');
            var nome_filho = $('#nome_filho'+num).val();
            var nasc_filho = $('#nasc_filho'+num).val();
            var cpf_filho = $('#cpf_filho'+num).val();

            var eleitor_filho = 'n';
            if ($('#te_filho'+num).val() != '') {
              eleitor_filho = 's';
            }

            var possui_pis_pasep_filho = 'n';
            if ($("#pis_pasep_filho"+num).val() != '') {
              possui_pis_pasep_filho = 's';
            }
            
            filhos.push({
              'sexo':$('#sexo_filho'+num).val(), 
              'rg':$('#rg_filho'+num).val(), 
              'expedicao':expedicao, 
              'nome':$('#nome_filho'+num).val(), 
              'nome_pai':nome_pai_filho, 
              'nome_mae':$('#nome_mae_filho'+num).val(),
              'cidade':$('#cidade_filho'+num).val(), 
              'estado':$('#estado_filho'+num).val(),
              'nasc':$('#nasc_filho'+num).val(), 
              'doc_origem':doc_origem, 
              'cidade_origem':$('#cidade_filho'+num).val(), 
              'estado_origem':$('#estado_filho'+num).val(), 
              'cpf':$('#cpf_filho'+num).val(), 
              'avo0_materna':$('#avo0_materna_filho'+num).val(), 
              'avo1_materno':$('#avo1_materno_filho'+num).val(),
              'avo0_paterna':avo0_paterna_filho, 
              'avo1_paterno':avo1_paterno_filho,
              'cep':$('#cep_logradouro_titular').val(), 
              'endereco':$('#endereco_titular').val(), 
              'numero':$('#num_logradouro_titular').val(), 
              'bairro':$('#bairro_titular').val(),
              'obito':$('#obito_filho'+num).val(),
              'cidade_obito':$('#cidade_obito_filho'+num).val(),
              'estado_obito':$('#estado_obito_filho'+num).val(),
              'data_obito':$('#data_obito_filho'+num).val(),
              'motivo_obito':$('#motivo_obito_filho'+num).val(),
              'cor_pele':cor_pele,
              'eleitor':eleitor_filho,
              'titulo_eleitor':$('#te_filho'+num).val(),
              'estado_civil':'s',
              'possui_pis_pasep':possui_pis_pasep_filho,
              'pis_pasep':$("#pis_pasep_filho"+num).val(),
              'empregador':$("#empregador_filho"+num).val(),
              'cnpj_empregador':$("#cnpj_empregador_filho"+num).val(),
              'cep_empregador':$("#cep_logradouro_empregador_filho"+num).val(),
              'endereco_empregador':$("#endereco_empregador_filho"+num).val(),
              'numero_empregador':$("#num_logradouro_empregador_filho"+num).val(),
              'bairro_empregador':$("#bairro_empregador_filho"+num).val(),
              'cidade_empregador':$("#cidade_empregador_filho"+num).val(),
              'estado_empregador':$("#estado_empregador_filho"+num).val(),
              'cargo':$("#cargo_filho"+num).val(),
              'data_admissao':$("#admissao_filho"+num).val(),
              'data_demissao':$("#demissao_filho"+num).val(),
              'anotacoes':$("#anotacoes_empregador_filho"+num).val(),
              'anotacoes_passaporte':$("#anotacoes_passaporte_filho"+num).val(),
              'remuneracao':$("#remuneracao_filho"+num).val(),
              'atestado':$("#atestadofilho"+num).val(),
              'data_atestado':$("#data_atestado_filho"+num).val(),
              'anotacoes_atestado':$("#descricao_atestado_filho"+num).val(),
            });
          });

          pessoas.push({
            'possuifilhos':possuifilhos, 
            'sexo':sexo_titular, 
            'rg':rg_titular, 
            'expedicao':expedicao, 
            'nome':nome_titular, 
            'nome_pai':nome_pai_titular, 
            'nome_mae':nome_mae_titular, 
            'cidade':cidade_titular, 
            'estado':estado_titular, 
            'nasc':nasc_titular, 
            'doc_origem':doc_origem, 
            'cidade_origem':cidade_origem_titular, 
            'estado_origem':estado_origem_titular, 
            'cpf':cpf_titular, 
            'avo0_materna':$('#avo0_materna_titular').val(), 
            'avo1_materno':$('#avo1_materno_titular').val(), 
            'avo0_paterna':$('#avo0_paterna_titular').val(), 
            'avo1_paterno':$('#avo1_paterno_titular').val(), 
            'cep':$('#cep_logradouro_titular').val(), 
            'endereco':$('#endereco_titular').val(), 
            'numero':$('#num_logradouro_titular').val(), 
            'bairro':$('#bairro_titular').val(),
            'obito':$('#obito').val(),
            'cidade_obito':$('#cidade_obito').val(),
            'estado_obito':$('#estado_obito').val(),
            'data_obito':$('#data_obito').val(),
            'motivo_obito':$('#motivo_obito').val(),
            'cor_pele':cor_pele,
            'eleitor':eleitor_titular,
            'titulo_eleitor':$('#te').val(),
            'estado_civil':$('#estadocivil_opc').val(),
            'possui_pis_pasep':possui_pis_pasep_titular,
            'pis_pasep':$("#pis_pasep_titular").val(),
            'empregador':$("#empregador_titular").val(),
            'cnpj_empregador':$("#cnpj_empregador_titular").val(),
            'cep_empregador':$("#cep_logradouro_empregador_titular").val(),
            'endereco_empregador':$("#endereco_empregador_titular").val(),
            'numero_empregador':$("#num_logradouro_empregador_titular").val(),
            'bairro_empregador':$("#bairro_empregador_titular").val(),
            'cidade_empregador':$("#cidade_empregador_titular").val(),
            'estado_empregador':$("#estado_empregador_titular").val(),
            'cargo':$("#cargo_titular").val(),
            'data_admissao':$("#admissao_titular").val(),
            'data_demissao':$("#demissao_titular").val(),
            'anotacoes':$("#anotacoes_empregador_titular").val(),
            'anotacoes_passaporte':$("#anotacoes_passaporte_titular").val(),
            'remuneracao':$("#remuneracao_titular").val(),
            'atestado':$("#atestado_titular").val(),
            'data_atestado':$("#data_atestado_titular").val(),
            'anotacoes_atestado':$("#descricao_atestado_titular").val(),
            'conjuge':{
              'sexo':sexo_conjuge, 
              'rg':rg_conjuge, 
              'expedicao':expedicao, 
              'nome':nome_conjuge, 
              'nome_pai':nome_pai_conjuge, 
              'nome_mae':nome_mae_conjuge, 
              'cidade':cidade_conjuge, 
              'estado':estado_conjuge, 
              'nasc':nasc_conjuge, 
              'doc_origem':doc_origem, 
              'cidade_origem':cidade_origem_conjuge, 
              'estado_origem':estado_origem_conjuge, 
              'cpf':cpf_conjuge, 
              'avo0_materna':$('#avo0_materna_conjuge').val(), 
              'avo1_materno':$('#avo1_materno_conjuge').val(), 
              'avo0_paterna':$('#avo0_paterna_conjuge').val(), 
              'avo1_paterno':$('#avo1_paterno_conjuge').val(),
              'cep':$('#cep_logradouro_conjuge').val(), 
              'endereco':$('#endereco_conjuge').val(), 
              'numero':$('#num_logradouro_conjuge').val(), 
              'bairro':$('#bairro_conjuge').val(),
              'obito':$('#obito_conjuge').val(),
              'cidade_obito':$('#cidade_obito_conjuge').val(),
              'estado_obito':$('#estado_obito_conjuge').val(),
              'data_obito':$('#data_obito_conjuge').val(),
              'motivo_obito':$('#motivo_obito_conjuge').val(),
              'cor_pele':cor_pele,
              'eleitor':eleitor_conjuge,
              'titulo_eleitor':$('#te_conjuge').val(),
              'estado_civil':$('#estadocivil_opc').val(),
              'possui_pis_pasep':possui_pis_pasep_conjuge,
              'pis_pasep':$("#pis_pasep_conjuge").val(),
              'empregador':$("#empregador_conjuge").val(),
              'cnpj_empregador':$("#cnpj_empregador_conjuge").val(),
              'cep_empregador':$("#cep_logradouro_empregador_conjuge").val(),
              'endereco_empregador':$("#endereco_empregador_conjuge").val(),
              'numero_empregador':$("#num_logradouro_empregador_conjuge").val(),
              'bairro_empregador':$("#bairro_empregador_conjuge").val(),
              'cidade_empregador':$("#cidade_empregador_conjuge").val(),
              'estado_empregador':$("#estado_empregador_conjuge").val(),
              'cargo':$("#cargo_conjuge").val(),
              'data_admissao':$("#admissao_conjuge").val(),
              'data_demissao':$("#demissao_conjuge").val(),
              'anotacoes':$("#anotacoes_empregador_conjuge").val(),
              'anotacoes_passaporte':$("#anotacoes_passaporte_conjuge").val(),
              'remuneracao':$("#remuneracao_conjuge").val(),
              'atestado':$("#atestado_conjuge").val(),
              'data_atestado':$("#data_atestado_conjuge").val(),
              'anotacoes_atestado':$("#descricao_atestado_conjuge").val(),
            },
            filhos
          });

          criaDocumentos(pessoas);
          setTimeout(function(){ 
            aguarde('close');
            $('#divdocumento').dialog('open');
          }, 3000);
        }
      });
    });
  </script>

</body>

</html>
