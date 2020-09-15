var corPele = corPele();

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
    }                     
  }
});
        
var pessoas = new Array();
var filhos = new Array();

filhos.push({
  'sexo':'M', 
  'rg':'MG 11.626-00', 
  'expedicao':'01/09/2020', 
  'nome':'Miqueias Matias Caetano Junior', 
  'nome_pai':'Miqueias Matias Caetano', 
  'nome_mae':'Ivone do Carmo Fernandes Matias',
  'cidade':'Caratinga', 
  'estado':'MG',
  'obito': 'n',
  'cidade_obito': '',
  'estado_obito': '',
  'data_obito': '',
  'motivo_obito': '',
  'nasc':'01/01/2020', 
  'doc_origem':'NASC. LV-138 FL129', 
  'cidade_origem':'Caratinga', 
  'estado_origem':'MG', 
  'cpf':'101.555.754-00', 
  'avo0_materna':'Nelci Matias Caetano', 
  'avo1_materno':'Nilton Caetano',
  'avo0_paterna':'Eni Rosa de Jesus', 
  'avo1_paterno':'',
  'cep': '35302273', 
  'endereco': 'Rua Antonio Alves', 
  'numero': '50', 
  'bairro': 'Esplanada',
  'cor_pele':corPele,
  'eleitor':'n',
  'titulo_eleitor':'',
  'estado_civil':'s',
  
  'possui_pis_pasep':'n',
  'pis_pasep':'',
  'empregador':'',
  'cnpj_empregador':'',
  'endereco_empregador':'',
  'cidade_empregador':'',
  'estado_empregador':'',
  'cargo':'',
  'data_admissao':'',
  'data_demissao':'',
  'anotacoes_passaporte':'',
  'atestado':'n',
  'data_atestado':'',
  'anotacoes_atestado':'',
  'anotacoes': '',
  'remuneracao':'',
})
;

pessoas.push({
  'possuifilhos':'sim', 
  'sexo':'M', 
  'rg':'MG 17.939.456', 
  'expedicao':'01/01/2000', 
  'nome':'Miqueias Matias Caetano', 
  'nome_pai':'Nilton Caetano', 
  'nome_mae':'Nelci Matias Caetano', 
  'cidade':'Caratinga', 
  'estado':'MG', 
  'nasc':'12/11/1991', 
  'doc_origem':'NASC. LV-138 FL129', 
  'cidade_origem':'Vargem Alegre', 
  'estado_origem':'MG', 
  'cpf':'106.555.756-00', 
  'avo0_materno': 'Luiza Gomes Matias', 
  'avo1_materna': 'Nair Gomes Matias', 
  'avo0_paterna': 'Maria de Almeida Caetano', 
  'avo1_paterno': 'Nailton Caetano', 
  'cep': '35302273', 
  'endereco': 'Rua Antonio Alves', 
  'numero': '50', 
  'bairro': 'Esplanada',
  'obito': 'n',
  'cidade_obito': '',
  'estado_obito': '',
  'data_obito': '',
  'motivo_obito': '',
  'cor_pele':corPele,
  'eleitor':'s',
  'titulo_eleitor':gerarNumeroTituloEleitor(),
  'estado_civil':'c',
  
  'possui_pis_pasep':'s',
  'pis_pasep':gerarNumeroPIS_PASEP(),
  'empregador':'Instituto Ensinar Brasil abcdefghijklmnopqrstuvxz',
  'cnpj_empregador':gerarNumeroCNPJ(),
  'endereco_empregador':'Rua Princesa isabel abcdefghijklmnopqrstuvxz',
  'numero_empregador':'168',
  'bairro_empregador':'Centro',
  'cidade_empregador':'Cartinga',
  'estado_empregador':'MG',
  'cargo':'Programador de Sistemas da Informação abcdefghijklmnopqrstuvxz',
  'data_admissao':'03/04/2017',
  'data_demissao':'',
  'anotacoes_passaporte':'',
  'atestado':'n',
  'data_atestado':'',
  'anotacoes_atestado':'',
  'anotacoes': '',
  'remuneracao':'1680,00',

  'conjuge':{
    'sexo':'F', 
    'rg':'11.111.111', 
    'expedicao':'02/02/2020', 
    'nome':'Ivoneabcdefghijklmnopqrstuvxz do Carmo Fernandes Matias abcdefghijklmnopqrstuvxz', 
    'nome_pai':'Jose do Carmo abcdefghijklmnopqrstuvxz', 
    'nome_mae':'Eni Rosa de Jesus', 
    'cidade':'Caratinga abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz', 
    'estado':'MG', 
    'nasc':'10/04/1990', 
    'doc_origem':'NASC. LV-138 FL129', 
    'cidade_origem':'Imbe de Minas', 
    'estado_origem':'MG', 
    'cpf':'55.111.666-00', 
    'avo0_materna':'Paulina do Carmo', 
    'avo1_materno':'Sebastiao do Carmo', 
    'avo0_paterna':'Geralda de Jesus', 
    'avo1_paterno':'Antonio de Jesus',
    'cep': '35302273', 
    'endereco': 'Rua Antonio Alves', 
    'numero': '50', 
    'bairro': 'Esplanada',
    'obito': 's',
    'cidade_obito': 'Caratinga abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz',
    'estado_obito': 'MG',
    'data_obito': '01/09/2020',
    'motivo_obito': 'Morte morrida abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz abcdefghijklmnopqrstuvxz',
    'cor_pele':corPele,
    'eleitor':'s',
    'titulo_eleitor':gerarNumeroTituloEleitor(),
    'estado_civil':'c',
    
    'possui_pis_pasep':'s',
    'pis_pasep':gerarNumeroPIS_PASEP(),
    'data_admissao':'01/01/2020',
    'data_demissao':'31/12/2060',
    'empregador':'Click Informatica',
    'cnpj_empregador':gerarNumeroCNPJ(),
    'endereco_empregador':'Rua Marechal Deodora da Fonscecao',
    'numero_empregador':'',
    'bairro_empregador':'Centro abcdefghijklmnopqrstuvxz',
    'cidade_empregador':'Caratinga abcdefghijklmnopqrstuvxz',
    'estado_empregador':'MG',
    'cargo':'Desgner Grafico',
    'remuneracao':'1045,00',

    'anotacoes_passaporte': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
    'anotacoes': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
    'atestado':'s',
    'data_atestado':'10/10/2020',
    'anotacoes_atestado': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',


  },
  filhos
});
console.log(pessoas)
criaDocumentos(pessoas);
$('#divdocumento').dialog('open');