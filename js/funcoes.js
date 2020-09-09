//GERAR NUMERO DO CNPJ
function gerarNumeroCNPJ() {
  var n1 = Math.floor(Math.random() * 10);
  var n2 = Math.floor(Math.random() * 10);
  var n3 = Math.floor(Math.random() * 10);
  var n4 = Math.floor(Math.random() * 10);
  var n5 = Math.floor(Math.random() * 10);
  var n6 = Math.floor(Math.random() * 10);
  var n7 = Math.floor(Math.random() * 10);
  var n8 = Math.floor(Math.random() * 10);
  var n9 = 0;
  var n10 = 0;
  var n11 = 0;
  var n12 = Math.floor(Math.random() * 10);

  var D_V1 = ((n1 * 5) + (n2 * 4) + (n3 * 3) + (n4 * 2) + (n5 * 9) + (n6 * 8) + (n7 * 7) + (n8 * 6) + (n9 * 5) + (n10 * 4) + (n11 * 3) + (n12 * 2));
  D_V1 = 11 - (D_V1%11);
  if (D_V1 >= 10) {
    D_V1 = 0;
  }
  dig1 = D_V1;

  var D_V2 = ((n1 * 6) + (n2 * 5) + (n3 * 4) + (n4 * 3) + (n5 * 2) + (n6 * 9) + (n7 * 8) + (n8 * 7) + (n9 * 6) + (n10 * 5) + (n11 * 4) + (n12 * 3) + (dig1 * 2));
  D_V2 = 11 - (D_V2%11);
  if (D_V2 >= 10) {
    D_V2 = 0;
  }
  dig2 = D_V2;

  var retorno = '';
  retorno = n1+''+n2+'.'+n3+""+n4+''+n5+'.'+n6+""+''+n7+''+n8+'/'+n9+""+n10+''+n11+''+n12+'-'+dig1+''+dig2;
  return retorno;
}

//GERAR NUMERO DO PIS/PASEP
function gerarNumeroPIS_PASEP() {
  var n1 = Math.floor(Math.random() * 10);
  var n2 = Math.floor(Math.random() * 10);
  var n3 = Math.floor(Math.random() * 10);
  var n4 = Math.floor(Math.random() * 10);
  var n5 = Math.floor(Math.random() * 10);
  var n6 = Math.floor(Math.random() * 10);
  var n7 = Math.floor(Math.random() * 10);
  var n8 = Math.floor(Math.random() * 10);
  var n9 = Math.floor(Math.random() * 10);
  var n10 = Math.floor(Math.random() * 10);

  var D_V = (n1 * 3) + (n2 * 2) + (n3 * 9) + (n4 * 8) + (n5 * 7) + (n6 * 6) + (n7 * 5) + (n8 * 4) + (n9 * 3) + (n10 * 2);
  D_V = 11 - (D_V%11);
  if (D_V >= 10) {
    D_V = 0;
  }

  var retorno = '';
  retorno = n1+''+n2+''+n3+"."+n4+''+n5+''+n6+""+''+n7+''+n8+'.'+n9+""+n10+'-'+D_V;
  return retorno;
}

//GERAR NUMERO DO TITULO DE ELEITOR
function gerarNumeroTituloEleitor () {
  var nn_1 = Math.floor(Math.random() * 10);
  var nn_2 = Math.floor(Math.random() * 10);
  var nn_3 = Math.floor(Math.random() * 10);
  var nn_4 = Math.floor(Math.random() * 10);
  var nn_5 = Math.floor(Math.random() * 10);
  var nn_6 = Math.floor(Math.random() * 10);
  var nn_7 = Math.floor(Math.random() * 10);
  var nn_8 = Math.floor(Math.random() * 10);
  var nn_9 = 0;
  var nn_10 = 2;

  var DV_1 = (parseInt(nn_1) * 2)+(parseInt(nn_2) * 3)+(parseInt(nn_3) * 4)+(parseInt(nn_4) * 5)+ (parseInt(nn_5) * 6)+(parseInt(nn_6) * 7)+ (parseInt(nn_7) * 8)+ (parseInt(nn_8) * 9);

  var resto = (DV_1%11);
  if (resto >= 10) {
      DV_1 = 0;
  }
  else{
    DV_1 = (DV_1%11);
  }

  var DV_2 =  (parseInt(nn_9) * 7)+(parseInt(nn_10) * 8)+(parseInt(DV_1) * 9);
  var resto = (DV_2%11);
  if (resto >= 10) {
    DV_2 = 0;
  }
  else{
    DV_2 = (DV_2%11);
  }

  return nn_1+''+ nn_2+''+ nn_3+''+ nn_4+' '+ nn_5+''+ nn_6+''+ nn_7+''+nn_8+' '+nn_9+''+nn_10+''+DV_1+''+DV_2;
}

//GERAR NUMERO DO RG
function gerarNumeroRG () {
  var nn_0 = Math.floor(Math.random() * 10);
  var nn_1 = Math.floor(Math.random() * 10);
  var nn_2 = Math.floor(Math.random() * 10);
  var nn_3 = Math.floor(Math.random() * 10);
  var nn_4 = Math.floor(Math.random() * 10);
  var nn_5 = Math.floor(Math.random() * 10);
  var nn_6 = Math.floor(Math.random() * 10);
  var nn_7 = Math.floor(Math.random() * 10);

  var DV = (parseInt(nn_0) * 2)+(parseInt(nn_1) * 3)+(parseInt(nn_2) * 4)+(parseInt(nn_3) * 5)+ (parseInt(nn_4) * 6)+(parseInt(nn_5) * 7)+ (parseInt(nn_6) * 8)+ (parseInt(nn_7) * 9);

  DV = 11 - (DV%11);
  if (DV >= 10) {
      DV = 0;
  }

  return nn_0+''+ nn_1+'.'+ nn_2+''+ nn_3+''+ nn_4+'.'+ nn_5+''+ nn_6+''+ nn_7+'-'+ DV;
}

//GERAR NUMERO DO CPF
function gerarNumeroCPF() {
  var n1 = Math.floor(Math.random() * 10);
  var n2 = Math.floor(Math.random() * 10);
  var n3 = Math.floor(Math.random() * 10);
  var n4 = Math.floor(Math.random() * 10);
  var n5 = Math.floor(Math.random() * 10);
  var n6 = Math.floor(Math.random() * 10);
  var n7 = Math.floor(Math.random() * 10);
  var n8 = Math.floor(Math.random() * 10);
  var n9 = Math.floor(Math.random() * 10);

  var d1 = n9 * 2 + n8 * 3 + n7 * 4 + n6 * 5 + n5 * 6 + n4 * 7 + n3 * 8 + n2 * 9 + n1 * 10;
  d1 = 11 - (d1%11);
  if (d1 >= 10) {
    d1 = 0;
  }
  var d2 = d1 * 2 + n9 * 3 + n8 * 4 + n7 * 5 + n6 * 6 + n5 * 7 + n4 * 8 + n3 * 9 + n2 * 10 + n1 * 11;
  d2 = 11 - (d2%11);
  if (d2 >= 10) {
      d2 = 0;
  }
  var retorno = '';
  retorno = ''+n1+''+n2+''+n3+"."+n4+''+n5+''+n6+"."+''+n7+''+n8+''+n9+"-"+d1+''+d2;
  return retorno;
}

//CRIA ENDERECO
function criaEndereco() {
  buscaTipoMoradia();
  buscaLogradouro();
  criaNumLogradouro();
  buscaBairro();
  criaCepLogradouro();
}

//BUSCAR TIPO MORADIA
function buscaTipoMoradia() {
  var i = Math.floor(Math.random() * 7);
  $.ajax({         
    url: "./tipomoradia.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#tipo_moradia").val(json[i]['tipomoradia'])
    }
  })
}

//BUSCAR LOGRADOURO
function buscaLogradouro() {
  var i = Math.floor(Math.random() * 322);
  $.ajax({         
    url: "./logradouro.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#logradouro").val(json[i]['logradouro'])
    }
  })
}

//CRIA NUMERO LOGRADOURO
function criaNumLogradouro() {
  var n = Math.floor(Math.random() * 999);

  if (parseInt(n) == 0) {
    n = 'S/N';
  }

  $("#num_logradouro").val(n)
}

//CRIA NUMERO CEP
function criaCepLogradouro() {
  var n = Math.floor(Math.random() * 99999999);

  if (parseInt(n) == 0) {
    n = 'S/N';
  }

  $("#cep_logradouro").val(n)
}

//BUSCAR BAIRRO
function buscaBairro() {
  var i = Math.floor(Math.random() * 488);
  $.ajax({         
    url: "./bairro.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#bairro").val(json[i]['bairro'])
    }
  })
}

//BUSCAR NOME MARCULINO
function buscaNomeMasculino() {
  var i = Math.floor(Math.random() * 10000);
  $.ajax({         
    url: "./nome_masculino.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#nome_pessoa").val(json[i]['nome'])
    }
  })
}

//BUSCAR NOME FEMININO
function buscaNomeFeminino() {
  var i = Math.floor(Math.random() * 10000);
  $.ajax({         
    url: "./nome_feminino.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#nome_pessoa").val(json[i]['nome'])
    }
  })
}

//BUSCAR SOBRENOME
function buscaSobrenome() {
  var i = Math.floor(Math.random() * 254);
  $.ajax({         
    url: "./sobrenome.json",
    type: "GET",
    dataType : "json",
    async:false
  }).done(function( json ) {
    if (json) {
      $("#sobrenome").val(json[i]['sobrenome'])
    }
  })
}

//CRIANDO HTML DOS DADOS DO FILHO
function criaOpcaoFilhos(maxfilho){
  var htmlfilho = "";
  for (var i = 1; i <= parseInt(maxfilho); i++) {
    htmlfilho += 
      '<div class="row nivel_3">'+
      '  <div class="form-group col-md-12">'+
      '    <label>4.1.'+i+'. Dados do filho</label>'+
      '  </div>'+
      '</div>'+
      '<div class="row nivel_4">'+
      '  <div class="form-group col-md-12">'+
      '    <label><i>4.1.'+i+'.1. Qual o Sexo?</i></label>'+
      '  </div>'+
      '</div>'+
      '<div class="row sub_nivel_4">'+
      '  <div class="form-check col-md-12">'+
      '    <input class="form-check-input" type="radio" name="sexofilho_opc'+i+'" id="masculino'+i+'" value="M" checked>'+
      '    <label class="form-check-label" for="masculino'+i+'">Masculino</label>'+
      '  </div>'+
      '</div>'+
      '<div class="row sub_nivel_4">'+
      '  <div class="form-check col-md-12">'+
      '    <input class="form-check-input form-check_ultimo" type="radio" name="sexofilho_opc'+i+'" id="feminino'+i+'" value="F">'+
      '    <label class="form-check-label" for="feminino'+i+'">Feminino</label>'+
      '  </div>'+
      '</div>'+

      '<div class="row nivel_4">'+
      '  <div class="form-group col-md-12">'+
      '    <label><i>4.1.'+i+'.2. Qual a idade?</i></label>'+
      '  </div>'+
      '</div>'+
      '<div class="row sub_nivel_4">'+
      '  <div class="form-group col-md-12">'+
      '    <input type="number" class="form-control" id="idadefilho_opc'+i+'" min="1" value="1">'+
      '  </div>'+
      '</div>'+

      '<div class="row nivel_4">'+
      '  <div class="form-group col-md-12">'+
      '    <label><i>4.1.'+i+'.3. Qual o local de nascimento?</i></label>'+
      '  </div>'+
      '</div>'+
      '<div class="form-row sub_nivel_4">'+
      '  <div class="form-group col-md-8">'+
      '    <input type="text" class="form-control cidadefilho_opc" id="cidadefilho_opc'+i+'" placeholder="Cidade">'+
      '  </div>'+
      '  <div class="form-group col-md-4">'+
      '    <select id="estadofilho_opc'+i+'" class="form-control estadofilho_opc">'+
      '      <option value="">Estado</option>'+
      '      <option value="AC">Acre</option>'+
      '      <option value="AL">Alagoas</option>'+
      '      <option value="AP">Amapá</option>'+
      '      <option value="AM">Amazonas</option>'+
      '      <option value="BA">Bahia</option>'+
      '      <option value="CE">Ceará</option>'+
      '      <option value="DF">Distrito Federal</option>'+
      '      <option value="ES">Espírito Santo</option>'+
      '      <option value="GO">Goiás</option>'+
      '      <option value="MA">Maranhão</option>'+
      '      <option value="MT">Mato Grosso</option>'+
      '      <option value="MS">Mato Grosso do Sul</option>'+
      '      <option value="MG">Minas Gerais</option>'+
      '      <option value="PA">Pará</option>'+
      '      <option value="PB">Paraíba</option>'+
      '      <option value="PR">Paraná</option>'+
      '      <option value="PE">Pernambuco</option>'+
      '      <option value="PI">Piauí</option>'+
      '      <option value="RJ">Rio de Janeiro</option>'+
      '      <option value="RN">Rio Grande do Norte</option>'+
      '      <option value="RS">Rio Grande do Sul</option>'+
      '      <option value="RO">Rondônia</option>'+
      '      <option value="RR">Roraima</option>'+
      '      <option value="SC">Santa Catarina</option>'+
      '      <option value="SP">São Paulo</option>'+
      '      <option value="SE">Sergipe</option>'+
      '      <option value="TO">Tocantins</option>'+
      '    </select>'+
      '  </div>'+
      '</div>'
      ;
  }
  $("#filhos").html(htmlfilho);
}

//PREENCHEDO OS DADOS DO FILHO
function criaDadosFilhos(maxfilho, sobrenomeprincipal, sobrenomeconjuge, nome_mae_filho, avo0_materna_filho, avo1_materno_filho){
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
  var htmlfilho = "";
  for (var i = 1; i <= parseInt(maxfilho); i++) {
    if ($('input[name^="sexofilho_opc'+i+'"]:checked').val() == 'M') {
      buscaNomeMasculino();
    }
    else{
      buscaNomeFeminino();
    }
    var nome_pessoa = $("#nome_pessoa").val();
    var nome_filho = nome_pessoa+' '+sobrenomeconjuge+' '+sobrenomeprincipal;

    htmlfilho += 
      '<div class="cada_filho" num="'+i+'">'+

        '<div class="form-row">'+
          '<div class="form-group col-md-12">'+
            '<label for="nome_filho'+i+'">Nome</label>'+
            '<input type="text" class="form-control filho nome" id="nome_filho'+i+'" value="'+nome_filho+'">'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-12">'+
            '<label for="anotacoes_passaporte_filho'+i+'">Anotações do Passaporte</label>'+
            '<input type="text" class="form-control filho anotacoes_passaporte" id="anotacoes_passaporte_filho'+i+'" value="">'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-6">'+
            '<label for="nasc_filho'+i+'">Data Nasc.</label>'+
            '<input type="text" class="form-control filho nasc date" id="nasc_filho'+i+'">'+
          '</div>'+
          '<div class="form-group col-md-6">'+
            '<label for="sexo_filho'+i+'">Sexo</label>'+
            '<select id="sexo_filho'+i+'" class="form-control filho sexo">'+
              '<option value="F">Feminino</option>'+
              '<option value="M">Masculino</option>'+
            '</select>'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-3">'+
            '<label for="rg_filho'+i+'">RG</label>'+
            '<input type="text" class="form-control filho rg" id="rg_filho'+i+'" value="'+gerarNumeroRG()+'">'+
          '</div>'+
          '<div class="form-group col-md-3">'+
            '<label for="cpf_filho'+i+'">CPF</label>'+
            '<input type="text" class="form-control filho cpf" id="cpf_filho'+i+'" value="'+gerarNumeroCPF()+'">'+
          '</div>'+
          '<div class="form-group col-md-3">'+
            '<label for="te_filho'+i+'">Titulo de Eleitor</label>'+
            '<input type="text" class="form-control filho te" id="te_filho'+i+'" value="">'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-12">'+
            '<label for="nome_mae_filho'+i+'">Mãe</label>'+
            '<input type="text" class="form-control filho nome_mae_filho" id="nome_mae_filho'+i+'" value="'+nome_mae_filho+'">'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-6">'+
            '<label for="avo0_materna_filho'+i+'">Avó Materna</label>'+
            '<input type="text" class="form-control filho avo0_materna_filho" id="avo0_materna_filho'+i+'" value="'+avo0_materna_filho+'">'+
          '</div>'+

          '<div class="form-group col-md-6">'+
            '<label for="avo1_materno_filho'+i+'">Avô Materno</label>'+
            '<input type="text" class="form-control filho avo1_materno_filho" id="avo1_materno_filho'+i+'" value="'+avo1_materno_filho+'">'+
          '</div>'+
        '</div>'+

        '<div class="form-row">'+
          '<div class="form-group col-md-6">'+
            '<label for="cidade_filho'+i+'">Cidade Nasc.</label>'+
            '<input type="text" class="form-control filho cidade" id="cidade_filho'+i+'">'+
          '</div>'+
          '<div class="form-group col-md-6">'+
            '<label for="estado_filho'+i+'">Estado Nasc.</label>'+
            '<select id="estado_filho'+i+'" class="form-control filho estado">'+
              '<option value="">Selecione</option>'+
              '<option value="AC">Acre</option>'+
              '<option value="AL">Alagoas</option>'+
              '<option value="AP">Amapá</option>'+
              '<option value="AM">Amazonas</option>'+
              '<option value="BA">Bahia</option>'+
              '<option value="CE">Ceará</option>'+
              '<option value="DF">Distrito Federal</option>'+
              '<option value="ES">Espírito Santo</option>'+
              '<option value="GO">Goiás</option>'+
              '<option value="MA">Maranhão</option>'+
              '<option value="MT">Mato Grosso</option>'+
              '<option value="MS">Mato Grosso do Sul</option>'+
              '<option value="MG">Minas Gerais</option>'+
              '<option value="PA">Pará</option>'+
              '<option value="PB">Paraíba</option>'+
              '<option value="PR">Paraná</option>'+
              '<option value="PE">Pernambuco</option>'+
              '<option value="PI">Piauí</option>'+
              '<option value="RJ">Rio de Janeiro</option>'+
              '<option value="RN">Rio Grande do Norte</option>'+
              '<option value="RS">Rio Grande do Sul</option>'+
              '<option value="RO">Rondônia</option>'+
              '<option value="RR">Roraima</option>'+
              '<option value="SC">Santa Catarina</option>'+
              '<option value="SP">São Paulo</option>'+
              '<option value="SE">Sergipe</option>'+
              '<option value="TO">Tocantins</option>'+
            '</select>'+
          '</div>'+
        '</div>'+
      '</div>'+

      '<div class="form-row">'+
        '<div class="form-group col-md-3">'+
          '<label for="obito_filho'+i+'">Falecido</label>'+
          '<select id="obito_filho'+i+'" class="form-control filho obito_filho" num="'+i+'">'+
            '<option value="n">Não</option>'+
            '<option value="s">Sim</option>'+
          '</select>'+
        '</div>'+

        '<div class="form-group col-md-6 falecido_filho'+i+'" style="display: none;">'+
          '<label for="cidade_obito_filho'+i+'">&nbsp;</label>'+
          '<input type="text" class="form-control filho cidade_obito_filho" id="cidade_obito_filho'+i+'" placeholder="Cidade do Falecimento">'+
        '</div>'+

        '<div class="form-group col-md-3 falecido_filho'+i+'" style="display: none;">'+
          '<label for="estado_obito_filho'+i+'">&nbsp;</label>'+
          '<select id="estado_obito_filho'+i+'" class="form-control filho estado_obito_filho">'+
            '<option value="">Estado do Falecimento</option>'+
            '<option value="AC">Acre</option>'+
            '<option value="AL">Alagoas</option>'+
            '<option value="AP">Amapá</option>'+
            '<option value="AM">Amazonas</option>'+
            '<option value="BA">Bahia</option>'+
            '<option value="CE">Ceará</option>'+
            '<option value="DF">Distrito Federal</option>'+
            '<option value="ES">Espírito Santo</option>'+
            '<option value="GO">Goiás</option>'+
            '<option value="MA">Maranhão</option>'+
            '<option value="MT">Mato Grosso</option>'+
            '<option value="MS">Mato Grosso do Sul</option>'+
            '<option value="MG">Minas Gerais</option>'+
            '<option value="PA">Pará</option>'+
            '<option value="PB">Paraíba</option>'+
            '<option value="PR">Paraná</option>'+
            '<option value="PE">Pernambuco</option>'+
            '<option value="PI">Piauí</option>'+
            '<option value="RJ">Rio de Janeiro</option>'+
            '<option value="RN">Rio Grande do Norte</option>'+
            '<option value="RS">Rio Grande do Sul</option>'+
            '<option value="RO">Rondônia</option>'+
            '<option value="RR">Roraima</option>'+
            '<option value="SC">Santa Catarina</option>'+
            '<option value="SP">São Paulo</option>'+
            '<option value="SE">Sergipe</option>'+
            '<option value="TO">Tocantins</option>'+
          '</select>'+
        '</div>'+
      '</div>'+

      '<div class="form-row">'+

        '<div class="form-group col-md-3 falecido_filho'+i+'" style="display: none;">'+
          '<label for="data_obito_filho'+i+'">Data do Falecimento</label>'+
          '<input type="text" class="form-control filho date data_obito_filho" id="data_obito_filho'+i+'" placeholder="Data do Falecimento">'+
        '</div>'+

        '<div class="form-group col-md-9 falecido_filho'+i+'" style="display: none;">'+
          '<label for="motivo_obito_filho'+i+'">Motivo do Falecimento</label>'+
          '<input type="text" class="form-control filho motivo_obito_filho" id="motivo_obito_filho'+i+'" placeholder="Motivo do Falecimento...">'+
        '</div>'+
      '</div>'+

      '<div class="form-row">'+
        '<div class="form-group col-md-3">'+
          '<label>Empregado</label>'+
          '<select class="form-control filho empregado_filho" num="'+i+'">'+
            '<option value="n">Não</option>'+
            '<option value="s">Sim</option>'+
          '</select>'+
        '</div>'+
        '<div class="form-group col-md-3 empregado_filho'+i+'" style="display: none;">'+
          '<label for="pis_pasep_filho'+i+'">PIS/PASEP</label>'+
          '<input type="text" class="form-control filho pis_pasep_filho'+i+'" id="pis_pasep_filho'+i+'" placeholder="">'+
        '</div>'+
        '<div class="form-group col-md-3 empregado_filho'+i+'" style="display: none;">'+
          '<label for="admissao_filho'+i+'">Data Admissão</label>'+
          '<input type="text" class="form-control filho date admissao_filho admissao_filho'+i+'" id="admissao_filho'+i+'" placeholder="">'+
        '</div>'+
        '<div class="form-group col-md-3 empregado_filho'+i+'" style="display: none;">'+
          '<label for="demissao_filho'+i+'">Data Demissão</label>'+
          '<input type="text" class="form-control filho date demissao_filho demissao_filho'+i+'" id="demissao_filho'+i+'" placeholder="">'+
        '</div>'+
      '</div>'+

      '<div class="form-row empregado_filho'+i+'" style="display: none;">'+
        '<div class="form-group col-md-2 empregado_filho'+i+'" style="display: none;">'+
          '<label for="remuneracao_filho'+i+'">Remuneração</label>'+
          '<input type="text" class="form-control filho remuneracao_filho'+i+' valor" id="remuneracao_filho'+i+'" placeholder="0,00" value="0,00">'+
        '</div>'+
        '<div class="form-group col-md-4">'+
          '<label for="empregador_filho'+i+'">Nome do Empregador</label>'+
          '<input type="text" class="form-control filho empregador_filho'+i+'" id="empregador_filho'+i+'" placeholder="">'+
        '</div>'+
        '<div class="form-group col-md-3">'+
          '<label for="cnpj_empregador_filho'+i+'">CNPJ do Empregador</label>'+
          '<input type="text" class="form-control filho cnpj_empregador_filho'+i+'" id="cnpj_empregador_filho'+i+'" placeholder="">'+
        '</div>'+
        '<div class="form-group col-md-3">'+
          '<label for="cargo_filho'+i+'">Cargo</label>'+
          '<input type="text" class="form-control filho cargo_filho'+i+'" id="cargo_filho'+i+'" placeholder="">'+
        '</div>'+
      '</div>'+

      '<div class="form-row empregado_filho'+i+'" style="display: none;">'+
        '<div class="form-group col-md-3">'+
          '<label for="cep_logradouro_empregador_filho'+i+'">CEP&nbsp;do&nbsp;Empre.</label>'+
          '<input type="text" class="form-control filho cep_logradouro_empregador_filho'+i+'" id="cep_logradouro_empregador_filho'+i+'">'+
        '</div>'+

        '<div class="form-group col-md-4">'+
          '<label for="endereco_empregador_filho'+i+'">Endereço&nbsp;do&nbsp;Empre.</label>'+
          '<input type="text" class="form-control filho endereco_empregador_filho'+i+'" id="endereco_empregador_filho'+i+'">'+
        '</div>'+

        '<div class="form-group col-md-2">'+
          '<label for="num_logradouro_empregador_filho'+i+'">N°&nbsp;do&nbsp;Empre.</label>'+
          '<input type="text" class="form-control filho num_logradouro_empregador_filho'+i+'" id="num_logradouro_empregador_filho'+i+'">'+
        '</div>'+

        '<div class="form-group col-md-3">'+
          '<label for="bairro_empregador_filho'+i+'">Bairro&nbsp;do&nbsp;Empre.</label>'+
          '<input type="text" class="form-control filho bairro_empregador_filho'+i+'" id="bairro_empregador_filho'+i+'">'+
        '</div>'+
      '</div>'+

      '<div class="form-row empregado_filho'+i+'" style="display: none;">'+
        '<div class="form-group col-md-8">'+
          '<label for="cidade_empregador_filho'+i+'">&nbsp;</label>'+
          '<input type="text" class="form-control filho cidade_empregador_filho'+i+'" id="cidade_empregador_filho'+i+'" placeholder="Cidade do Empregador">'+
        '</div>'+

        '<div class="form-group col-md-4">'+
          '<label for="estado_empregador_filho'+i+'">&nbsp;</label>'+
          '<select id="estado_empregador_filho'+i+'" class="form-control filho estado_empregador_filho'+i+'">'+
            '<option value="">Estado do Empregador</option>'+
            '<option value="AC">Acre</option>'+
            '<option value="AL">Alagoas</option>'+
            '<option value="AP">Amapá</option>'+
            '<option value="AM">Amazonas</option>'+
            '<option value="BA">Bahia</option>'+
            '<option value="CE">Ceará</option>'+
            '<option value="DF">Distrito Federal</option>'+
            '<option value="ES">Espírito Santo</option>'+
            '<option value="GO">Goiás</option>'+
            '<option value="MA">Maranhão</option>'+
            '<option value="MT">Mato Grosso</option>'+
            '<option value="MS">Mato Grosso do Sul</option>'+
            '<option value="MG">Minas Gerais</option>'+
            '<option value="PA">Pará</option>'+
            '<option value="PB">Paraíba</option>'+
            '<option value="PR">Paraná</option>'+
            '<option value="PE">Pernambuco</option>'+
            '<option value="PI">Piauí</option>'+
            '<option value="RJ">Rio de Janeiro</option>'+
            '<option value="RN">Rio Grande do Norte</option>'+
            '<option value="RS">Rio Grande do Sul</option>'+
            '<option value="RO">Rondônia</option>'+
            '<option value="RR">Roraima</option>'+
            '<option value="SC">Santa Catarina</option>'+
            '<option value="SP">São Paulo</option>'+
            '<option value="SE">Sergipe</option>'+
            '<option value="TO">Tocantins</option>'+
          '</select>'+
        '</div>'+
      '</div>'+
      '<div class="form-row empregado_filho'+i+'" style="display: none;">'+
        '<div class="form-group col-md-12">'+
          '<label for="anotacoes_empregador_filho'+i+'">Anotações</label>'+
          '<input type="text" class="form-control filho anotacoes_empregador_filho'+i+'" id="anotacoes_empregador_filho'+i+'" placeholder="">'+
        '</div>'+
      '</div>'
  }
  $("#grupofilhos").html(htmlfilho);
  $('.date').mask('99/99/9999');
  $('.valor').maskMoney({
    allowNegative: false, 
    thousands:'', 
    decimal:',', 
    affixesStay: false
  });

  for (var i = 1; i <= parseInt(maxfilho); i++) {
    if ($('input[name^="sexofilho_opc'+i+'"]:checked').val() == 'M') {
      var sexofilho = 'M';
    }
    else{
      var sexofilho = 'F';
    }
    $('#sexo_filho'+i).val(sexofilho);
    $('#cidade_filho'+i).val($('#cidadefilho_opc'+i).val().toUpperCase());
    $('#estado_filho'+i).val($('#estadofilho_opc'+i).val().toUpperCase());

    if (parseInt($("#idadefilho_opc"+i).val()) >= 16) {
      $('#te_filho'+i).val(gerarNumeroTituloEleitor());
    }

    var ano_nasc_filho = anoatual - parseInt($("#idadefilho_opc"+i).val());
    var mes_nasc_filho = mesatual;
    var dia_nasc_filho = diaatual;

    var data_nasc_filho = dia_nasc_filho+'/'+mes_nasc_filho+'/'+ano_nasc_filho;
    $("#nasc_filho"+i).val(data_nasc_filho);
  }

    //CARREGO A DATA ATUAL PARA O OBITO
    var ano_obito = anoatual;
    var mes_obito = mesatual;
    var dia_obito = diaatual;
    $(".data_obito_filho").val(dia_obito+'/'+mes_obito+'/'+ano_obito);

  //MOSTRA/ESCONDE DADOS DO FALECIMENTO FILHO
  $('.obito_filho').change(function(){
    var num = $(this).attr('num');
    if ($(this).val() == 's') {
      $(".falecido_filho"+num).css("display","");
      $("#cidade_obito_filho"+num).val($('#cidade_filho'+num).val().toUpperCase());
      $("#estado_obito_filho"+num).val($('#estado_filho'+num).val().toUpperCase());
    }
    else{
      $(".falecido_filho"+num).css("display","none");
      $("#cidade_obito_filho"+num).val("");
      $("#estado_obito_filho"+num).val("");
      $("#motivo_obito_filho"+num).val("");
    }
  });

  //MOSTRA/ESCONDE DADOS DO EMPREGADOR DO FILHO
  $('.empregado_filho').change(function(){
    var num = $(this).attr('num');
    var possui_pis_pasep_filho = $(this).val();
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
      $(".empregado_filho"+num).css("display","none");
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

  //CARREGO A DATA ATUAL PARA A ADMISSAO
  $(".admissao_filho").val(diaatual+'/'+mesatual+'/'+anoatual);
}

function verificaDadosFalecidoFilho() {
  var retorno = false;
  $('.obito_filho').each(function(){
    if ($(this).val() == 's') {
      var num = $(this).attr('num');
      if ($("#cidade_obito_filho"+num).val() == '' || $("#estado_obito_filho"+num).val() == '' || $("#data_obito_filho"+num).val() == '' || $("#motivo_obito_filho"+num).val() == '') {
        retorno = true;
      }
    }
  });
  return retorno;
}

function verificaDadosEmpregadorFilho() {
  var retorno = false;
  $('.empregado_filho').each(function(){
    if ($(this).val() == 's') {
      var num = $(this).attr('num');
      if ($("#pis_pasep_filho"+num).val() == '' || $("#admissao_filho"+num).val() == '' || $("#empregador_filho"+num).val() == '' || $("#cnpj_empregador_filho"+num).val() == '' || $("#cargo_filho"+num).val() == '' || $("#endereco_empregador_filho"+num).val() == '' || $("#bairro_empregador_filho"+num).val() == '' || $("#cidade_empregador_filho"+num).val() == '' || $("#estado_empregador_filho"+num).val() == '') {
        retorno = true;
      }
    }
  });
  return retorno;
}

function criaDocumentos(pessoas) {
  //GERAR CONTA DE LUZ
  criarContaLuz(pessoas[0]);
  
  //GERAR CERTIDAO DE NASCIMENTO DO TITULAR
  criarDocumentoCertidaoNascimento(pessoas[0]);

  if(pessoas[0]['conjuge']['nome']){
    //GERAR CERTIDAO DE NASCIMENTO DO CONJUGE
    criarDocumentoCertidaoNascimento(pessoas[0]['conjuge'], true);
    //GERAR CERTIDAO DE CASAMENTO
    criarDocumentoCasamento(pessoas[0], true);
  }

  if(pessoas[0]['possuifilhos'] == 'sim'){
    for (var i in pessoas[0]['filhos']) {
      //GERAR CERTIDAO DE NASCIMENTO DO FILHO
      criarDocumentoCertidaoNascimento(pessoas[0]['filhos'][i]);
    }
  }
  
}

//CRIANDO DOCUMENTO DE RG
function criarDocumentoRG(pessoa, conjuge) {
  var img_doc = new Image();
  var img_foto = new Image();

  var sexo = pessoa['sexo'];
  var rg = pessoa['rg'];
  var expedicao = pessoa['expedicao'];
  var nome = pessoa['nome'];
  var nome_pai = pessoa['nome_pai'];
  var nome_mae = pessoa['nome_mae'];
  var cidade = pessoa['cidade'];
  var estado = pessoa['estado'];
  var nasc = pessoa['nasc'];
  var doc_origem = pessoa['doc_origem'];
  var cidade_origem = pessoa['cidade_origem'];
  var estado_origem = pessoa['estado_origem'];
  var cpf = pessoa['cpf'];


  img_doc.src = 'documentos/rg.jpg';

  if (sexo == 'F') {
    img_foto.src = 'documentos/avatar_feminino.png';
  }
  else{
    img_foto.src = 'documentos/avatar_masculino.png';
  }

  //PEGANDO NOME SE SOLTEIRO
  var nome_solteiro = nome;
  if (conjuge) {
    var tmp_nome_solteiro = nome.split(" ");
    nome_solteiro = '';
    for (var i = 0; i < tmp_nome_solteiro.length; i++) {
      nome_solteiro += tmp_nome_solteiro[i]+' ';
    } 
  }

  var html_documento_rg = '';
  html_documento_rg += '<figure class="documento_rg break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_rg += '<img src="'+img_foto.src+'" width="209" height="141" style="position: absolute;margin-top: 101px;margin-left: 271px;">';
  html_documento_rg += '<img src="'+img_doc.src+'" width="550" height="700" style="">';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -85px;margin-left: 410px;color:#808080!important;font-size:15px!important;font-family:Arial;">2. VIA</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -85px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+cpf+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -132px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+doc_origem.toUpperCase()+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -173px;margin-left: 376px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+nasc+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -173px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+cidade.toUpperCase().substr(0, 27)+'-'+estado.toUpperCase()+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -215px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+nome_mae.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -234px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+nome_pai.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -278px;margin-left: 45px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+nome_solteiro.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -316px;margin-left: 365px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+expedicao+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -316px;margin-left: 100px;color:#808080!important;font-size:15px!important;font-family:Arial;">'+rg.toUpperCase()+'</figcaption>';
  html_documento_rg += '<figcaption style="position: absolute;margin-top: -422px;margin-left: 226px;color: #000000!important;font-size:15px!important;font-family: Arial;font-weight: bold;">juristta.com</figcaption>';
  html_documento_rg += '</figure><br>';
  $('#divdocumento').append(html_documento_rg);
}

//CRIANDO CERTIDAO DE NASCIMENTO
function criarDocumentoCertidaoNascimento(pessoa, conjuge) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/certidaonascimento.png';

  var sexo = pessoa['sexo'];
  var rg = pessoa['rg'];
  var expedicao = pessoa['expedicao'];
  var nome = pessoa['nome'];
  var nome_pai = pessoa['nome_pai'];
  var nome_mae = pessoa['nome_mae'];
  var cidade = pessoa['cidade'];
  var estado = pessoa['estado'];
  var nasc = pessoa['nasc'];
  var doc_origem = pessoa['doc_origem'];
  var cidade_origem = pessoa['cidade_origem'];
  var estado_origem = pessoa['estado_origem'];
  var cpf = pessoa['cpf'];
  var avo0_materna = pessoa['avo0_materna'];
  var avo1_materno = pessoa['avo1_materno'];
  var avo0_paterna = pessoa['avo0_paterna'];
  var avo1_paterno = pessoa['avo1_paterno'];

  //DESCRICAO DO SEXO
  var descricaosexo = '';
  if (sexo == 'F') {
    descricaosexo = 'Feminino';
  }
  else{
    descricaosexo = 'Masculino';
  }

  //GERANDO MATRICULA
  var matricula = '';
  var m1 = Math.floor(Math.random() * 999999 + 11);
  var m2 = Math.floor(Math.random() * 99 + 11);
  var m3 = Math.floor(Math.random() * 99 + 11);
  var m4 = Math.floor(Math.random() * 9999 + 11);
  var m5 = Math.floor(Math.random() * 9 + 1);
  var m6 = Math.floor(Math.random() * 99999 + 11);
  var m7 = Math.floor(Math.random() * 999 + 11);
  var m8 = Math.floor(Math.random() * 9999999 + 11);
  var m9 = Math.floor(Math.random() * 99 + 11);
  matricula = m1+'.'+m2+'.'+m3+'.'+m4+'.'+m5+'.'+m6+'.'+m7+'.'+m8+'-'+m9;

  //DATA DE NASCIMENTO
  var data = nasc.split("/");
  var dia = data[0];
  var mes = data[1];
  var ano = data[2];

  //HORA DO NASCIMENTO
  var hora = Math.floor(Math.random() * 24);
  if (parseInt(hora) < 10) {
    hora = '0'+hora;
  }

  //MINUTO DO NASCIMENTO
  var minutos = Math.floor(Math.random() * 60);
  if (parseInt(minutos) < 10) {
    minutos = '0'+minutos;
  }

  //VERIFICANDO AVÓS PARTERNOS
  var avos_paternos = '';
  if (avo1_paterno && avo0_paterna) {
    avos_paternos = avo1_paterno+' e '+avo0_paterna;
  }
  else if (avo1_paterno && !avo0_paterna) {
    avos_paternos = avo1_paterno;
  }
  else if (!avo1_paterno && avo0_paterna) {
    avos_paternos = avo0_paterna;
  }

  //VERIFICANDO AVÓS MATERNOS
  var avos_maternos = '';
  if (avo1_materno && avo0_materna) {
    avos_maternos = avo1_materno+' e '+avo0_materna;
  }
  else if (avo1_materno && !avo0_materna) {
    avos_maternos = avo1_materno;
  }
  else if (!avo1_materno && avo0_materna) {
    avos_maternos = avo0_materna;
  }

  //GERANDO DNV
  var dnv = '';
  var d1 = Math.floor(Math.random() * 99 + 11);
  var d2 = Math.floor(Math.random() * 99999999 + 11);
  var d3 = Math.floor(Math.random() * 9);
  dnv = d1+'-'+d2+'-'+d3;

  //PEGANDO NOME SE SOLTEIRO
  var nome_solteiro = nome;
  if (conjuge) {
    var tmp_nome_solteiro = nome.split(" ");
    nome_solteiro = '';
    for (var i = 0; i < tmp_nome_solteiro.length; i++) {
      nome_solteiro += tmp_nome_solteiro[i]+' ';
    } 
  }

  var html_documento_cn = '';
  html_documento_cn += '<figure class="documento_cn break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_cn += '<img src="'+img_doc.src+'" width="550" height="700">';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -532px;margin-left: 170px;color: #000000!important;font-size: 12px!important;font-family: Arial;font-weight: bold;">'+nome_solteiro.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -510px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+cpf+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -481px;margin-left: 170px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+matricula+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -458px;margin-left: 415px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+dia+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -458px;margin-left: 443px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+mes+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -458px;margin-left: 473px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+ano+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -434px;margin-left: 58px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+hora+':'+minutos+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -434px;margin-left: 147px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+cidade_origem+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -410px;margin-left: 58px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+(cidade).substr(0, 27)+' - '+estado+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -410px;margin-left: 238px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+('Hospital Municipal - '+cidade).substr(0, 35)+' - '+estado+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -410px;margin-left: 450px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight: bold;">'+descricaosexo+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -385px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+nome_pai+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -370px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+nome_mae+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -344px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+avos_paternos+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -333px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+avos_maternos+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -309px;margin-left: 58px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">Não</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -277px;margin-left: 283px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+dnv+'</figcaption>';
  html_documento_cn += '<figcaption style="position: absolute;margin-top: -169px;margin-left: 352px;color: #000000!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">juristta.com</figcaption>';
  html_documento_cn += '</figure><br>';
  $('#divdocumento').append(html_documento_cn);
  //CRIANDO O RG
  criarDocumentoRG(pessoa, conjuge);

  //GERAR CERTIDAO DE OBITO
  criarDocumentoCertidaoObito(pessoa);

  //GERAR TITULO DE ELEITOR
  criarDocumentoTituloEleitor(pessoa);

  //GERAR CARTEIRA DE TRABALHO
  criarDocumentoCarteiraTrabalho(pessoa);

  //GERAR PASSAPORTE
  criarDocumentoPassaporte(pessoa);
}

function criarDocumentoCarteiraTrabalho(pessoa){
  if (pessoa['possui_pis_pasep'] == 's') {
    //GERAR CARTEIRA DE TRABALHO FOLHA 1
    criarDocumentoCarteiraTrabalhoFolha1(pessoa);

    //GERAR CARTEIRA DE TRABALHO FOLHA 2
    criarDocumentoCarteiraTrabalhoFolha2(pessoa);

    //GERAR CARTEIRA DE TRABALHO FOLHA 3
    criarDocumentoCarteiraTrabalhoFolha3(pessoa);

    //GERAR CARTEIRA DE TRABALHO FOLHA 4
    criarDocumentoCarteiraTrabalhoFolha4(pessoa);
  }
}

//CRIANDO CERTIDAO DE CASAMENTO
function criarDocumentoCasamento(pessoas) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/certidaocasamento.jpg';

  //TITULAR
  var sexo_titular = pessoas['sexo'];
  var rg_titular = pessoas['rg'];
  var expedicao_titular = pessoas['expedicao'];
  var nome_titular = pessoas['nome'];
  var nome_pai_titular = pessoas['nome_pai'];
  var nome_mae_titular = pessoas['nome_mae'];
  var cidade_titular = pessoas['cidade'];
  var estado_titular = pessoas['estado'];
  var nasc_titular = pessoas['nasc'];
  var doc_origem_titular = pessoas['doc_origem'];
  var cidade_origem_titular = pessoas['cidade_origem'];
  var estado_origem_titular = pessoas['estado_origem'];
  var cpf_titular = pessoas['cpf'];

  //CONJUGE
  var sexo_conjuge = pessoas['conjuge']['sexo'];
  var rg_conjuge = pessoas['conjuge']['rg'];
  var expedicao_conjuge = pessoas['conjuge']['expedicao'];
  var nome_conjuge = pessoas['conjuge']['nome'];
  var nome_pai_conjuge = pessoas['conjuge']['nome_pai'];
  var nome_mae_conjuge = pessoas['conjuge']['nome_mae'];
  var cidade_conjuge = pessoas['conjuge']['cidade'];
  var estado_conjuge = pessoas['conjuge']['estado'];
  var nasc_conjuge = pessoas['conjuge']['nasc'];
  var doc_origem_conjuge = pessoas['conjuge']['doc_origem'];
  var cidade_origem_conjuge = pessoas['conjuge']['cidade_origem'];
  var estado_origem_conjuge = pessoas['conjuge']['estado_origem'];
  var cpf_conjuge = pessoas['conjuge']['cpf'];


  //DESCRICAO DO SEXO
  var descricaosexo_titular = '';
  if (sexo_titular == 'F') {
    descricaosexo_titular = 'Feminino';
  }
  else{
    descricaosexo_titular = 'Masculino';
  }

  //GERANDO MATRICULA
  var matricula = '';
  var m1 = Math.floor(Math.random() * 9999999999 + 11);
  var m2 = Math.floor(Math.random() * 9999 + 11);
  var m3 = Math.floor(Math.random() * 9 + 1);
  var m4 = Math.floor(Math.random() * 9999 + 11);
  var m5 = Math.floor(Math.random() * 999 + 11);
  var m6 = Math.floor(Math.random() * 9999999 + 11);
  var m7 = Math.floor(Math.random() * 99 + 11);
  matricula = m1+' '+m2+' '+m3+' '+m4+' '+m5+' '+m6+' '+m7;

  //DATA DE NASCIMENTO TITULAR
  var data_titular = nasc_titular.split("/");
  var dia_titular = data_titular[0];
  var mes_titular = data_titular[1];
  var ano_titular = data_titular[2];

  //DATA DE NASCIMENTO CONJUGE
  var data_conjuge = nasc_conjuge.split("/");
  var dia_conjuge = data_conjuge[0];
  var mes_conjuge = data_conjuge[1];
  var ano_conjuge = data_conjuge[2];

  var date = new Date();
  var anoatual = date.getFullYear();
  var ano_casamento = parseInt(((parseInt(((parseInt(ano_titular)+18) + (parseInt(ano_conjuge)+18))/2))+anoatual)/2);
  
  var dia_casamento = Math.floor(Math.random() * 28 + 1);
  if (dia_casamento == 0) {
    dia_casamento = 1;
  }
  if (dia_casamento < 10) {
    dia_casamento = '0'+dia_casamento;
  }

  var mes_casamento = Math.floor(Math.random() * 12 + 1);
  if (mes_casamento == 0) {
    mes_casamento = 1;
  }
  if (mes_casamento < 10) {
    mes_casamento = '0'+mes_casamento;
  }

  //PEGANDO NOME SE SOLTEIRO
  var tmp_nome_conjuge_solteiro = nome_conjuge.split(" ");
  var nome_conjuge_solteiro = '';
  for (var i = 0; i < tmp_nome_conjuge_solteiro.length - 1; i++) {
    nome_conjuge_solteiro += tmp_nome_conjuge_solteiro[i]+' ';
  }

  var html_documento_cc = '';
  html_documento_cc += '<figure class="documento_cc break" style="width:472px;display:inline-block;position:relative;">';  
  html_documento_cc += '<img src="'+img_doc.src+'" width="550" height="700">';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-540px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+nome_titular.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-540px;margin-left:364px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+cpf_titular+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-522px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+nome_conjuge_solteiro.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-522px;margin-left:364px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+cpf_conjuge+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-498px;margin-left:143px;color:#000000!important;font-size:11px!important;font-family:Arial;font-weight:bold;">'+matricula+'</figcaption>';

  //VERIFICANDO SE TEM O PAI
  var nomepais_titular = '';
  if (nome_pai_titular) {
    nomepais_titular = nome_pai_titular.toUpperCase().substr(0, 20)+' e '+nome_mae_titular.toUpperCase().substr(0, 20);
  }
  else{
    nomepais_titular = nome_mae_titular.toUpperCase().substr(0, 20);
  }
  var nomepais_conjuge = '';
  if (nome_pai_conjuge) {
    nomepais_conjuge = nome_pai_conjuge.toUpperCase().substr(0, 20)+' e '+nome_mae_conjuge.toUpperCase().substr(0, 20);
  }
  else{
    nomepais_conjuge = nome_mae_conjuge.toUpperCase().substr(0, 20);
  }

  //CALCULANDO DATA DA CELEBRACAO
  var datacelebracaocasamento = removeDiasData(ano_casamento, mes_casamento, dia_casamento, 15);

  var averbacao = 'Casamento celebrado em: '+datacelebracaocasamento;

  //SE O TITULAR FALECER
  if (pessoas['obito'] === 's') {
    averbacao+= '<br>Falecimento de '+pessoas['nome']+' no dia '+pessoas['data_obito']+' em '+pessoas['cidade_obito']+'-'+pessoas['estado_obito'];
  }

  //SE O CONJUGE FALECER
  if (pessoas['conjuge']['obito'] === 's') {
    averbacao+= '<br>Falecimento de '+pessoas['conjuge']['nome']+' no dia '+pessoas['conjuge']['data_obito']+' em '+pessoas['conjuge']['cidade_obito']+'-'+pessoas['conjuge']['estado_obito'];
  }


  var texto_titular = '<span style="font-weight:bold;">'+nome_titular.toUpperCase().substr(0, 35)+'</span>, nascido aos '+nasc_titular+', natural de '+(cidade_titular).substr(0, 15)+' - '+estado_titular+',<br> de nascionalidade brasileira, filho de '+nomepais_titular+'.';
  var texto_conjuge = '<span style="font-weight:bold;">'+nome_conjuge.toUpperCase().substr(0, 35)+'</span>, nascido aos '+nasc_conjuge+', natural de '+(cidade_conjuge).substr(0, 15)+' - '+estado_conjuge+',<br> de nascionalidade brasileira, filho de '+nomepais_conjuge+'.';
  
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-476px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;text-align:left;">'+texto_titular+'<br>'+texto_conjuge+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-410px;margin-left:367px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+dia_casamento+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-410px;margin-left:404px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+mes_casamento+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-410px;margin-left:449px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+ano_casamento+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-390px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;">Comunhão Parcial de Bens</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-359px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+nome_titular.toUpperCase().substr(0, 35)+' e '+nome_conjuge.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-329px;margin-left:70px;color:#000000!important;font-size:7px!important;font-family:Arial;text-align: left;">'+averbacao+'</figcaption>';
  
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-267px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">'+rg_titular+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-267px;margin-left:262px;color:#000000!important;font-size:7px!important;font-family:Arial">'+expedicao_titular+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-267px;margin-left:344px;color:#000000!important;font-size:7px!important;font-family:Arial">SSP/'+estado_origem_titular+'</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-267px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';

  html_documento_cc += '<figcaption style="position:absolute;margin-top:-255px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-255px;margin-left:262px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-255px;margin-left:344px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-255px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';

  html_documento_cc += '<figcaption style="position:absolute;margin-top:-243px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-243px;margin-left:262px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-243px;margin-left:344px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-243px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';

  html_documento_cc += '<figcaption style="position:absolute;margin-top:-232px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-232px;margin-left:262px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-232px;margin-left:344px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-232px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';

  html_documento_cc += '<figcaption style="position:absolute;margin-top:-200px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-200px;margin-left:262px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-200px;margin-left:344px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-200px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-181px;margin-left:184px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';
  html_documento_cc += '<figcaption style="position:absolute;margin-top:-181px;margin-left:425px;color:#000000!important;font-size:7px!important;font-family:Arial">XXX</figcaption>';

  html_documento_cc += '<figcaption style="position:absolute;margin-top:-88px;margin-left:362px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">juristta.com</figcaption>';
  html_documento_cc += '</figure><br>';
  $('#divdocumento').append(html_documento_cc);
}

//CRIANDO CONTA DE LUZ
function criarContaLuz(pessoas) {
  var img_doc = new Image();
  img_doc.src = 'documentos/contaluz.jpg';

  //TITULAR
  var nome = pessoas['nome'];
  var cpf = pessoas['cpf'];
  var cep = pessoas['cep'];
  var endereco = pessoas['endereco'];
  var numero = pessoas['numero'];
  var bairro = pessoas['bairro'];
  var cidade = pessoas['cidade'];
  var estado = pessoas['estado'];

  //DATA ATUAL
  var date = new Date();
  var anoatual = date.getFullYear();
  var mesatual = date.getMonth();
  mesatual = mesatual+1;
  var diaatual = date.getDate();

  //DATA DO ULTIMOS 30 DIAS
  var ultimadata = removeDiasData(anoatual, mesatual, diaatual, 30);
  var array_data = ultimadata.split("/");

  var da = Math.floor(Math.random() * 999999999999 + 11);

  var nc = Math.floor(Math.random() * 9999999999 + 11);

  var html_documento_cl = '';
  html_documento_cl += '<figure class="documento_cl break" style="width:472px;display:inline-block;position:relative;">';  
  html_documento_cl += '<img src="'+img_doc.src+'" width="550" height="700">';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-604px;margin-left:17px;color:#000000!important;font-size:7px!important;font-family:Arial;font-weight:bold;">'+nome.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-594px;margin-left:17px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+endereco.toUpperCase().substr(0, 35)+', '+numero+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-584px;margin-left:17px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+bairro.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-574px;margin-left:17px;color:#000000!important;font-size:7px!important;font-family:Arial;">'+cep+' '+cidade.toUpperCase().substr(0, 35)+', '+estado.toUpperCase().substr(0, 35)+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-594px;margin-left:274px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight:bold;">'+mesAbreviado(array_data[1]).toUpperCase()+'/'+anoatual+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-574px;margin-left:264px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight:bold;">'+da+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-591px;margin-left:433px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight:bold;">'+nc+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-253px;margin-left:277px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight:bold;">'+ultimadata+'</figcaption>';
  html_documento_cl += '<figcaption style="position:absolute;margin-top:-62px;margin-left:338px;color:#000000!important;font-size:10px!important;font-family:Arial;font-weight:bold;">'+ultimadata+'</figcaption>';
  html_documento_cl += '</figure><br>';
  $('#divdocumento').append(html_documento_cl);
}

//CRIANDO CERTIDAO DE OBITO
function criarDocumentoCertidaoObito(pessoa) {
  if (pessoa['obito'] == 's') {    
    //BUSCANDO A IMAGEM DO DOCUMENTO
    var img_doc = new Image();
    img_doc.src = 'documentos/certidaoobito.jpg';

    var sexo = pessoa['sexo'];
    var rg = pessoa['rg'];
    var expedicao = pessoa['expedicao'];
    var nome = pessoa['nome'];
    var nome_pai = pessoa['nome_pai'];
    var nome_mae = pessoa['nome_mae'];
    var cidade = pessoa['cidade'];
    var estado = pessoa['estado'];
    var nasc = pessoa['nasc'];
    var doc_origem = pessoa['doc_origem'];
    var cidade_origem = pessoa['cidade_origem'];
    var estado_origem = pessoa['estado_origem'];
    var cpf = pessoa['cpf'];
    var avo0_materna = pessoa['avo0_materna'];
    var avo1_materno = pessoa['avo1_materno'];
    var avo0_paterna = pessoa['avo0_paterna'];
    var avo1_paterno = pessoa['avo1_paterno'];
    var cor_pele = pessoa['cor_pele'];
    var estado_civil = pessoa['estado_civil'];
    var eleitor = pessoa['eleitor'];
    var cep = pessoa['cep'];
    var endereco = pessoa['endereco'];
    var numero = pessoa['numero'];
    var bairro = pessoa['bairro'];
    var cidade_obito = pessoa['cidade_obito'];
    var estado_obito = pessoa['estado_obito'];
    var data_obito = pessoa['data_obito'];
    var motivo_obito = pessoa['motivo_obito'];


    //DESCRICAO DO SEXO
    var descricaosexo = '';
    if (sexo == 'F') {
      descricaosexo = 'Feminino';
    }
    else{
      descricaosexo = 'Masculino';
    }

    //GERANDO MATRICULA
    var matricula = '';
    var m1 = Math.floor(Math.random() * 999999 + 11);
    var m2 = Math.floor(Math.random() * 99 + 11);
    var m3 = Math.floor(Math.random() * 99 + 11);
    var m4 = Math.floor(Math.random() * 9999 + 11);
    var m5 = Math.floor(Math.random() * 9 + 1);
    var m6 = Math.floor(Math.random() * 99999 + 11);
    var m7 = Math.floor(Math.random() * 999 + 11);
    var m8 = Math.floor(Math.random() * 9999999 + 11);
    var m9 = Math.floor(Math.random() * 99 + 11);
    matricula = m1+'.'+m2+'.'+m3+'.'+m4+'.'+m5+'.'+m6+'.'+m7+'.'+m8+'-'+m9;

    //DATA DE NASCIMENTO
    var data = data_obito.split("/");
    var dia = data[0];
    var mes = data[1];
    var ano = data[2];

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

    var idade =  calculaIdade(nasc);

    //HORA DO NASCIMENTO
    var hora = Math.floor(Math.random() * 24);
    if (parseInt(hora) < 10) {
      hora = '0'+hora;
    }

    //MINUTO DO NASCIMENTO
    var minutos = Math.floor(Math.random() * 60);
    if (parseInt(minutos) < 10) {
      minutos = '0'+minutos;
    }

    //PEGANDO NOME
    var nome_falecido = nome;

    //ESTADO CIVIL
    if (estado_civil === 's') {
      descricaoestadocivil = 'Solteiro';
    }
    else if (estado_civil === 'c') {
      descricaoestadocivil = 'Casado';
    }
    else if (estado_civil === 'v') {
      descricaoestadocivil = 'Viúvo';
    }
    else{
      descricaoestadocivil = 'Viúvo';
    }

    //ELEITOR
    if (eleitor == 's') {
      descricaoeleitor = 'Sim';
    }
    else{
      descricaoeleitor = 'Não';
    }

    var filiacao = nome_pai+" e "+nome_mae;

    var residencia = '<br>Residente na '+endereco+', '+numero+', '+bairro+' '+cidade+' - '+estado;

    var html_documento_co = '';
    html_documento_co += '<figure class="documento_co break" style="width:472px;display: inline-block;position: relative;">';  
    html_documento_co += '<img src="'+img_doc.src+'" width="550" height="700">';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -542px;margin-left: 170px;color: #000000!important;font-size: 12px!important;font-family: Arial;font-weight: bold;">'+nome_falecido.toUpperCase().substr(0, 35)+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -525px;margin-left: 52px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">'+cpf+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -499px;margin-left: 170px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">'+matricula+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -477px;margin-left: 52px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">'+descricaosexo+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -477px;margin-left: 100px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">'+cor_pele+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -477px;margin-left: 135px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">'+descricaoestadocivil+' com '+idade+' anos de idade</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -455px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+(cidade_origem).substr(0, 27)+' - '+estado_origem+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -455px;margin-left: 279px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+rg+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -455px;margin-left: 459px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+descricaoeleitor+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -435px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;text-align:left">'+('Filho de: '+filiacao+residencia).substr(0, 150)+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -401px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+data_obito+', às '+hora+':'+minutos+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -379px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">Hospital Municipal de '+cidade_obito.substr(0, 50)+'-'+estado_obito+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -400px;margin-left: 420px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+dia+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -400px;margin-left: 450px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+mes+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -400px;margin-left: 474px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;">'+ano+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -358px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;text-align:left;">'+motivo_obito.substr(0, 90)+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -336px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;text-align:left;">No cemitério desta cidade de '+(cidade_obito).substr(0, 30)+' - '+estado_obito+'</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -336px;margin-left: 350px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;text-align:left;">Marcelo da Silva Penteado</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -313px;margin-left: 52px;color:#000000!important;font-size:8.5px!important;font-family:Arial;font-weight: bold;text-align:left;">Dr. Robson da Silva, CRM:66247</figcaption>';
    html_documento_co += '<figcaption style="position: absolute;margin-top: -159px;margin-left: 352px;color: #000000!important;font-size:8.5px!important;font-family: Arial;font-weight: bold;">juristta.com</figcaption>';
    html_documento_co += '</figure><br>';
    $('#divdocumento').append(html_documento_co);
  }
}

//CRIANDO TITULO ELEITOR
function criarDocumentoTituloEleitor(pessoa) {
  if (pessoa['eleitor'] == 's') {    
    //BUSCANDO A IMAGEM DO DOCUMENTO
    var img_doc = new Image();
    img_doc.src = 'documentos/tituloeleitor.png';

    var nome = pessoa['nome'];
    var cidade = pessoa['cidade'];
    var estado = pessoa['estado'];
    var nasc = pessoa['nasc'];
    var estado_civil = pessoa['estado_civil'];
    var titulo_eleitor = pessoa['titulo_eleitor'];

    var emissao = nasc.split('/');
    var data_emissao = adicionaAnosData(emissao[2], emissao[1], emissao[0], 16);


    //PEGANDO NOME
    var nome_eleitor = nome;



    var html_documento_te = '';
    html_documento_te += '<figure class="documento_te break" style="width:472px;display: inline-block;position: relative;">';  
    html_documento_te += '<img src="'+img_doc.src+'" width="550" height="225">';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -146px;margin-left: 15px;color: #808080!important;font-size: 10px!important;font-family: Arial;font-weight: bold;">'+nome_eleitor.toUpperCase().substr(0, 35)+'</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -98px;margin-left: 15px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+nasc+'</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -98px;margin-left: 102px;color: #808080!important;font-size:10px!important;font-family: Arial;font-weight: bold;">'+titulo_eleitor+'</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -98px;margin-left: 200px;color: #808080!important;font-size:10px!important;font-family: Arial;">071</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -98px;margin-left: 232px;color: #808080!important;font-size:10px!important;font-family: Arial;">0356</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -69px;margin-left: 15px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+(cidade).toUpperCase().substr(0, 20)+'/'+estado.toUpperCase()+'</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -68px;margin-left: 200px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+data_emissao+'</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -41px;margin-left: 106px;color: #808080!important;font-size:10px!important;font-family: Arial;font-weight: bold;">juristta.com</figcaption>';
    html_documento_te += '<figcaption style="position: absolute;margin-top: -66px;margin-left: 300px;color: #808080!important;font-size:10px!important;font-family: Arial;text-align: left;font-weight: bold;">'+nome_eleitor.substr(0, 35)+'</figcaption>';
    html_documento_te += '</figure><br>';
    $('#divdocumento').append(html_documento_te);
  }
}

//CRIANDO CARTEIRA DE TRABALHO FOLHA 1
function criarDocumentoCarteiraTrabalhoFolha1(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/carteiratrabalho1.png';
  
  var nome = pessoa['nome'];

  var estado = pessoa['estado'];

  var pis_pasep = pessoa['pis_pasep'];

  var sexo = pessoa['sexo'];

  var img_foto = new Image();
  if (sexo == 'F') {
    img_foto.src = 'documentos/avatar_feminino.png';
  }
  else{
    img_foto.src = 'documentos/avatar_masculino.png';
  }
  
  var n1 = Math.floor(Math.random() * 10);
  var n2 = Math.floor(Math.random() * 10);
  var n3 = Math.floor(Math.random() * 10);
  var n4 = Math.floor(Math.random() * 10);
  var n5 = Math.floor(Math.random() * 10);
  var numero = n1+''+n2+''+n3+''+n4+''+n5;

  var n1 = Math.floor(Math.random() * 10);
  var n2 = Math.floor(Math.random() * 10);
  var n3 = Math.floor(Math.random() * 10);
  var n4 = Math.floor(Math.random() * 10);
  var serie = n1+''+n2+''+n3+''+n4;

  var html_documento_ct = '';
  html_documento_ct += '<figure class="documento_ct break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_ct += '<img src="'+img_foto.src+'" width="117" height="96" style="position: absolute;margin-top: 248px;margin-left: 296px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);-ms-transform: rotate(270deg);transform: rotate(270deg);">';
  html_documento_ct += '<img src="'+img_doc.src+'" width="550" height="370">';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -254px;margin-left: 332px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+pis_pasep+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -209px;margin-left: 303px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+numero+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -209px;margin-left: 420px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+serie+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -209px;margin-left: 493px;color: #808080!important;font-size:10px!important;font-family: Arial;">'+estado+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -172px;margin-left: 301px;color: #808080!important;font-size:10px!important;font-family: Arial;text-align: left;">'+nome.substr(0, 33)+'</figcaption>';
  html_documento_ct += '</figure><br>';
  $('#divdocumento').append(html_documento_ct);
}

//CRIANDO CARTEIRA DE TRABALHO FOLHA 2
function criarDocumentoCarteiraTrabalhoFolha2(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/carteiratrabalho2.png';

  var nome = pessoa['nome'];
  var cidade = pessoa['cidade'];
  var estado = pessoa['estado'];
  var nasc = pessoa['nasc'];
  var nome_mae = pessoa['nome_mae'];
  var nome_pai = pessoa['nome_pai'];
  var cpf = pessoa['cpf'];
  var rg = pessoa['rg'];

  var filiacao = '';
  if (nome_mae && nome_pai) {
    filiacao = nome_mae+' e '+nome_pai;
  }
  else if (nome_mae && !nome_pai) {
    filiacao = nome_mae;
  }
   else {
    filiacao = nome_pai;
  }


  var html_documento_ct = '';
  html_documento_ct += '<figure class="documento_ct break" style="width:402;display: inline-block;position: relative;">';  
  html_documento_ct += '<img src="'+img_doc.src+'" width="402" height="550">';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -469px;margin-left: 76px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+nome.substr(0, 35)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -436px;margin-left: 99px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+cidade.substr(0, 20)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -436px;margin-left: 220px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+estado.substr(0, 2)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -436px;margin-left: 285px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+nasc+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -417px;margin-left: 88px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+filiacao.substr(0, 50)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -383px;margin-left: 88px;color: #808080!important;font-size: 10px!important;font-family: Arial;">CPF: '+cpf+' e RG: '+rg+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -324px;margin-left: 166px;color: #808080!important;font-size:10px!important;font-family: Arial;font-weight: bold;">juristta.com</figcaption>';
  html_documento_ct += '</figure><br>';
  $('#divdocumento').append(html_documento_ct);
}

//CRIANDO CARTEIRA DE TRABALHO FOLHA 3
function criarDocumentoCarteiraTrabalhoFolha3(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/carteiratrabalho3.png';

  var empregador = pessoa['empregador'];
  if (!empregador) {
    empregador = '';
  }

  var cnpj_empregador = pessoa['cnpj_empregador'];
  if (!cnpj_empregador) {
    cnpj_empregador = '';
  }

  var logradouro_empregador = '';

  var endereco_empregador = pessoa['endereco_empregador'];
  if (!endereco_empregador) {
    endereco_empregador = '';
  }

  var numero_empregador = pessoa['numero_empregador'];
  if (!numero_empregador) {
    numero_empregador = '';
  }

  var bairro_empregador = pessoa['bairro_empregador'];
  if (!bairro_empregador) {
    bairro_empregador = '';
  }

  var cidade_empregador = pessoa['cidade_empregador'];
  if (!cidade_empregador) {
    cidade_empregador = '';
  }

  var estado_empregador = pessoa['estado_empregador'];
  if (!estado_empregador) {
    estado_empregador = '';
  }

  if (endereco_empregador != '') {
    logradouro_empregador = endereco_empregador.substr(0, 20)+', '+numero_empregador+', '+bairro_empregador;
  }

  var cargo = pessoa['cargo'];
  if (!cargo) {
    cargo = '';
  }

  var r1 = Math.floor(Math.random() * 10);
  var r2 = Math.floor(Math.random() * 10);
  var r3 = Math.floor(Math.random() * 10);
  var r4 = Math.floor(Math.random() * 10);
  var r5 = Math.floor(Math.random() * 10);
  var r6 = Math.floor(Math.random() * 10);
  var registro = '';

  if (cargo != '') {
    registro = r1+''+r2+''+r3+''+r4+''+r5+''+r6;
  }
  
  var remuneracao = '';

  var dia_admissao = '';
  var mes_admissao = '';
  var ano_admissao = '';
  var ass_admissao = '';
  var data_admissao = pessoa['data_admissao'];
  if (data_admissao && cargo != '') {
    data_admissao = data_admissao.split('/');
    dia_admissao = data_admissao[0];
    mes_admissao = mesExtenso(parseInt(data_admissao[1]));
    ano_admissao = data_admissao[2];
    remuneracao = pessoa['remuneracao'];
    cnpj_empregador = '';
    ass_admissao = 'juristta.com';
  }

  var dia_demissao = '';
  var mes_demissao = '';
  var ano_demissao = '';
  var ass_demissao = '';
  var data_demissao = pessoa['data_demissao'];
  if (data_demissao) {
    data_demissao = data_demissao.split('/');
    dia_demissao = data_demissao[0];
    mes_demissao = mesExtenso(parseInt(data_demissao[1]));
    ano_demissao = data_demissao[2];
    ass_demissao = 'juristta.com';
  }

  var html_documento_ct = '';
  html_documento_ct += '<figure class="documento_ct break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_ct += '<img src="'+img_doc.src+'" width="550" height="370">';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -322px;margin-left: 73px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+empregador.substr(0, 35)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -295px;margin-left: 73px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+cnpj_empregador+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -283px;margin-left: 73px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+logradouro_empregador.substr(0, 35)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -257px;margin-left: 73px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+cidade_empregador.substr(0, 20)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -257px;margin-left: 234px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+estado_empregador.substr(0, 2)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -230px;margin-left: 73px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+cargo.substr(0, 35)+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -198px;margin-left: 94px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+dia_admissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -198px;margin-left: 140px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+mes_admissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -198px;margin-left: 228px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+ano_admissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -111px;margin-left: 94px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+dia_demissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -111px;margin-left: 140px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+mes_demissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -111px;margin-left: 228px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+ano_demissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -185px;margin-left: 68px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+registro+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -171px;margin-left: 107px;color: #808080!important;font-size: 10px!important;font-family: Arial;">'+remuneracao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -144px;margin-left: 110px;color: #808080!important;font-size:10px!important;font-family: Arial;font-weight: bold;">'+ass_admissao+'</figcaption>';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -94px;margin-left: 110px;color: #808080!important;font-size:10px!important;font-family: Arial;font-weight: bold;">'+ass_demissao+'</figcaption>';
  html_documento_ct += '</figure><br>';
  $('#divdocumento').append(html_documento_ct);
}

//CRIANDO CARTEIRA DE TRABALHO FOLHA 4
function criarDocumentoCarteiraTrabalhoFolha4(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/carteiratrabalho4.png';

  var anotacoes = pessoa['anotacoes'];
  if (!anotacoes) {
    anotacoes = '';
  }
 
  var html_documento_ct = '';
  html_documento_ct += '<figure class="documento_ct break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_ct += '<img src="'+img_doc.src+'" width="550" height="370">';
  html_documento_ct += '<figcaption style="position: absolute;margin-top: -254px;margin-left: 25px;color: #808080!important;font-size: 10px!important;font-family: Arial;text-align:left;width: 230px;">'+anotacoes.substr(0, 500)+'</figcaption>';
  html_documento_ct += '</figure><br>';
  $('#divdocumento').append(html_documento_ct);
}

function criarDocumentoPassaporte(pessoa){
  criarDocumentoPassaporte1(pessoa);
  criarDocumentoPassaporte2(pessoa);
}

//CRIANDO PASSAPORTE 1
function criarDocumentoPassaporte1(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/passaporte1.jpg';
  var sexo = pessoa['sexo'];
  var nome = pessoa['nome'];
  var nasc = pessoa['nasc'];
  var array_nome = nome.split(" ");
  var primeironome = '';
  var sobrenome = '';
  for (var i = 0; i < array_nome.length; i++) {
    primeironome = array_nome[0];
    if (i > 0) {
      sobrenome += array_nome[i]+' ';
    }
  }

  var img_foto = new Image();
  if (sexo == 'F') {
    img_foto.src = 'documentos/avatar_feminino.png';
  }
  else{
    img_foto.src = 'documentos/avatar_masculino.png';
  }

  var nasc = nasc.split("/");

 
  var html_documento_pp = '';
  html_documento_pp += '<figure class="documento_pp break" style="width:368;display: inline-block;position: relative;">';  
  html_documento_pp += '<img src="'+img_foto.src+'" width="117" height="96" style="position: absolute;margin-top: 332px;margin-left: 239px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);-ms-transform: rotate(270deg);transform: rotate(270deg);">';
  html_documento_pp += '<img src="'+img_doc.src+'" width="368" height="550">';
  html_documento_pp += '<figcaption style="position: absolute;margin-top: -183px;margin-left: 35px;color: #000000!important;font-size: 10px!important;font-family: Arial;text-align:left;font-weight:bold">'+primeironome.substr(0, 10)+'</figcaption>';
  html_documento_pp += '<figcaption style="position: absolute;margin-top: -183px;margin-left: 119px;color: #000000!important;font-size: 10px!important;font-family: Arial;text-align:left;font-weight:bold">'+sobrenome.substr(0, 20)+'</figcaption>';
  html_documento_pp += '<figcaption style="position: absolute;margin-top: -154px;margin-left: 35px;color: #000000!important;font-size: 10px!important;font-family: Arial;text-align:left;font-weight:bold">Brasileiro(a)</figcaption>';
  html_documento_pp += '<figcaption style="position: absolute;margin-top: -120px;margin-left: 35px;color: #000000!important;font-size: 10px!important;font-family: Arial;text-align:left;font-weight:bold">'+nasc[2]+'/'+nasc[1]+'/'+nasc[0]+'</figcaption>';
  html_documento_pp += '</figure><br>';
  $('#divdocumento').append(html_documento_pp);
}

//CRIANDO PASSAPORTE 2
function criarDocumentoPassaporte2(pessoa) {
  //BUSCANDO A IMAGEM DO DOCUMENTO
  var img_doc = new Image();
  img_doc.src = 'documentos/passaporte2.jpg';
  var anotacoes_passaporte = pessoa['anotacoes_passaporte'];

  if (!anotacoes_passaporte) {
    anotacoes_passaporte = '';
  }


 
  var html_documento_pp = '';
  html_documento_pp += '<figure class="documento_pp break" style="width:472px;display: inline-block;position: relative;">';  
  html_documento_pp += '<img src="'+img_doc.src+'" width="550" height="370">';
  html_documento_pp += '<figcaption style="position: absolute;margin-top: -321px;margin-left: 35px;color: #000000!important;font-size: 10px!important;font-family: Arial;text-align:left;width:200px;">'+anotacoes_passaporte.substr(0, 700)+'</figcaption>';
  html_documento_pp += '</figure><br>';
  $('#divdocumento').append(html_documento_pp);
}

function removeDiasData(ano, mes, dia, dias) {
  data = new Date(ano, (mes - 1), dia);
  final = new Date(data);
  final.setDate(final.getDate() - dias);
  var dd = ("0" + final.getDate()).slice(-2);
  var mm = ("0" + (final.getMonth() + 1)).slice(-2);
  var y = final.getFullYear();
  return dd + '/' + mm + '/' + y;
}

function adicionaAnosData(ano, mes, dia, anos) {
  data = new Date(ano, (mes - 1), dia);
  final = new Date(data);
  var dd = ("0" + final.getDate()).slice(-2);
  var mm = ("0" + (final.getMonth() + 1)).slice(-2);
  final.setFullYear(final.getFullYear() + anos);
  var y = final.getFullYear();
  return dd + '/' + mm + '/' + y;
}

function mesAbreviado(mes) {
  var meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
  return meses[(mes-1)];
}

function mesExtenso(mes) {
  var meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
  return meses[(mes-1)];
}

function corPele() {
  var i = Math.floor(Math.random() * 3);
  var cores = ['Branca', 'Parda', 'Negra'];
  return cores[i];
}

function calculaIdade(data) {
  var d = new Date,
  ano_atual = d.getFullYear(),
  mes_atual = d.getMonth() + 1,
  dia_atual = d.getDate(),
  split = data.split('/'),
  novadata = split[1] + "/" +split[0]+"/"+split[2],
  data_americana = new Date(novadata),
  vAno = data_americana.getFullYear(),
  vMes = data_americana.getMonth() + 1,
  vDia = data_americana.getDate(),
  ano_aniversario = +vAno,
  mes_aniversario = +vMes,
  dia_aniversario = +vDia,
  quantos_anos = ano_atual - ano_aniversario;
  if (mes_atual < mes_aniversario || mes_atual == mes_aniversario && dia_atual < dia_aniversario) {
      quantos_anos--;
  }
  return quantos_anos < 0 ? 0 : quantos_anos;
}

function aguarde(acao) {
  $( "#divaguarde" ).dialog({
    autoOpen: false,
    resizable: false,
    draggable: true,
    height: 90,
    width:300,
    modal:true,
  });
  $('#divaguarde').dialog(acao);
}