/*function validaQuestao(q){
	var aux = document.sociocultural;	
	if (aux.q.checked){
		return true;
	}
	else{
		return false;
	}	
}
function validaSocio3(){
	for (i=1;i<=17;i++){
		if (validaQuestao(i)==true){
			alert(i);
			return true;
		}		
		else{
			alert('Voce deixou alguma quest�o vazia!!');
			return false;
			break;
		}
	}
		
}
*/
function validaSocio3(){
  /*var formulario = sociocultural.getElementsByTagName("input");
  var total_campos_input = formulario.length;
  
  var total_radio = 0;
  
  for (i = 0; i < formulario.length; i++){
      if (formulario[i].type == "radio"){
    total_radio++;
      }
  }
  var cont = 0;
  for (i = 0; i <= total_radio; i++){
      if (formulario[i].checked){
    cont++;
      }
      }
  var total_radio = Math.round(total_radio / 2);
  if (total_radio > cont){
      alert("Por favor! Preencha todos os campos.");
      return false;
  }
  else return true;
  */
  var f = document.sociocultural;
  cont = 0;
  atu = '';
  old = '';
  x = 0;
  for (i = 0; i < f.length; i++){
	  if (f[i].type=="radio"){
		  atu = f[i];
		  // alert('tamanho de '+f[i].nome+' - '+f[i].nome.length);
		  /*if (atu!=old){
		  	  cont = 0;  
		  }*/
		  if (atu.checked)	{
			  //alert('Quest�o '+f[i].name+' foi marcada!!');   		  
			  cont=1;
			  
		  }
		  else{
			  //if (cont==0){
				   if ((atu!=old) && (cont!=1)) {
		 			  cont=0;	
				   }
			  //}
		  }
		  if ((atu!=old) && (cont==0)){
				alert('Campos Vazios');
				return false;	  
		  }
		  
		  //cont = 0;
		  old = f[i];
	  }
	  x++;
  }
  alert('OK');
  return true;

}



function buscarModulo(curso) {
$.ajax(
{
type: "POST",
url: "buscar_modulo.php",
data: "valor=" + curso,
beforeSend: function() {
// enquanto a fun��o esta sendo processada, voc�
// pode exibir na tela uma
// msg de carregando
$('#modulo').hide();
$('#loading').show();	
},
success: function(txt) {
// pego o id da div que envolve o select com
// name="id_modelo" e a substituiu
// com o texto enviado pelo php, que � um novo
//select com dados da marca x
$('#modulo').show();
$('#loading').hide();	
$('#modulo').html(txt);
},
error: function(txt) {
// em caso de erro voc� pode dar um alert('erro');
alert('erro');
}
}
);
} 
function buscarDisciplina(modulo) {
$.ajax(
{
type: "POST",
url: "buscar_disciplina.php",
data: "valor2=" + modulo,
beforeSend: function() {
// enquanto a fun��o esta sendo processada, voc�
// pode exibir na tela uma
// msg de carregando
$('#discipliona').hide();
$('#loading2').show();	
},
success: function(txt) {
// pego o id da div que envolve o select com
// name="id_modelo" e a substituiu
// com o texto enviado pelo php, que � um novo
//select com dados da marca x
$('#disciplina').show();
$('#loading2').hide();	
$('#disciplina').html(txt);
},
error: function(txt) {
// em caso de erro voc� pode dar um alert('erro');
alert('erro');
}
}
);
} 
function mascara_dtnCan(dtnCan){
              var mydtnCan = '';
              mydtnCan = mydtnCan + dtnCan;
              if (mydtnCan.length == 2){
                  mydtnCan = mydtnCan + '/';
                  document.form1.dtnCan.value = mydtnCan;
              }
              if (mydtnCan.length == 5){
                  mydtnCan = mydtnCan + '/';
                  document.form1.dtnCan.value = mydtnCan;
              }
              if (mydtnCan.length == 10){
                  verifica_dtnCan();
              }
          }
          
          function verifica_dtnCan () {
            dia = (document.form1.dtnCan.value.substring(0,2));
            mes = (document.form1.dtnCan.value.substring(3,5));
            ano = (document.form1.dtnCan.value.substring(6,10));

            situacao = "";
            // verifica o dia valido para cada mes
            if ((dia < 01)||(dia < 01 || dia > 30) && (  mes == 04 || mes == 06 || mes == 09 || mes == 11 ) || dia > 31) {
				//return false;
                situacao = "falsa";
            }

            // verifica se o mes e valido
            if (mes < 01 || mes > 12 ) {
				//return false;
                situacao = "falsa";
            }

            // verifica se e ano bissexto
            if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
				//return false;
                situacao = "falsa";
            }
   
            if (document.form1.dtnCan.value == "") {
				//return false;
                situacao = "falsa";
            }
   
            if (situacao == "falsa") {
                alert("Data inv�lida!");
                //modifiquei logo abaixo para limpar o campo quando houver erro
                document.form1.dtnCan.value='';
                //document.form1.dtnCan.focus();
				
                
            }
      }
	  function verifica_ideDatCan () {
            dia = (document.form1.ideDatCan.value.substring(0,2));
            mes = (document.form1.ideDatCan.value.substring(3,5));
            ano = (document.form1.ideDatCan.value.substring(6,10));

            situacao = "";
            // verifica o dia valido para cada mes
            if ((dia < 01)||(dia < 01 || dia > 30) && (  mes == 04 || mes == 06 || mes == 09 || mes == 11 ) || dia > 31) {
				//return false;
                situacao = "falsa";
            }

            // verifica se o mes e valido
            if (mes < 01 || mes > 12 ) {
				//return false;
                situacao = "falsa";
            }

            // verifica se e ano bissexto
            if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
				//return false;
                situacao = "falsa";
            }
   
            if (document.form1.dtnCan.value == "") {
				//return false;
                situacao = "falsa";
            }
   
            if (situacao == "falsa") {
                alert("Data inv�lida!");
                //modifiquei logo abaixo para limpar o campo quando houver erro
                document.form1.ideDatCan.value='';
                //document.form1.ideDatCan.focus();
				
                
            }
      }


function validacpf(cpfCan){
 
var i;
 
s = document.form1.cpfCan.value;
 
var c = s.substr(0,9);
 
var dv = s.substr(9,2);
 
var d1 = 0;
 
for (i = 0; i < 9; i++)
 
{
 
d1 += c.charAt(i)*(10-i);
 
}

if (s == '00000000000'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '11111111111'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '22222222222'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '33333333333'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '44444444444'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '55555555555'){
	document.form1.cpfCan.value="";  
	alert("CPF Inválido");
	return false;
}

if (s == '66666666666'){
	document.form1.cpfCan.value="";  
	alert("CPF Invalido");
	return false;
}

if (s == '77777777777'){
	document.form1.cpfCan.value="";  
	alert("CPF Invalido");
	return false;
}

if (s == '88888888888'){
	document.form1.cpfCan.value="";  
	alert("CPF Invalido");
	return false;
}

if (s == '99999999999'){
	document.form1.cpfCan.value="";  
	alert("CPF Invalido");
	return false;
}

if (d1 == 0){
document.form1.cpfCan.value="";  
alert("CPF Inválido")
 
return false;
 
}
 
d1 = 11 - (d1 % 11);
 
if (d1 > 9) d1 = 0;
 
if (dv.charAt(0) != d1)
 
{
document.form1.cpfCan.value=""; 
alert("CPF Inválido")
 
return false;
 
}
 
 
d1 *= 2;
 
for (i = 0; i < 9; i++)
 
{
 
d1 += c.charAt(i)*(11-i);
 
}
 
d1 = 11 - (d1 % 11);
 
if (d1 > 9) d1 = 0;
 
if (dv.charAt(1) != d1)
 
{
document.form1.cpfCan.value="";  
alert("CPF Inválido")
 
return false;
 
}
 
return true;
 
} 

function validaPisPasepNit(PIS_PASEP)  
{  
try {  
	//PIS_PASEP = PIS_PASEP.replace('.', '').replace('.', '').replace('-', '');  
	PIS_PASEP = document.form1.nisCan.value;
	if(PIS_PASEP.length != 11) { 
		//return 'PIS/PASEP inv�lido!';  
		alert('NIS inválido!');
		document.form1.nisCan.value="";
		//document.form1.nisCan.focus();
		return false;
	}	
	if(isNaN(PIS_PASEP))  {
		//return 'PIS/PASEP inv�lido!';  
		alert('PIS/PASE/NIT inválido!');
		document.form1.nisCan.value="";
		//document.form1.nisCan.focus();
		return false;
	}
	if(PIS_PASEP == '00000000000')  {
		//return 'PIS/PASEP inv�lido!';
		alert('NIS inválido!');
		document.form1.nisCan.value="";
		//document.form1.nisCan.focus();
		return false;
	}	  

		var intResultado = new String();  
		var intTotal = 0;  
		var strPeso = '3298765432';  

		for(i = 1; i <= 10; i++) {  
			intResultado = PIS_PASEP.substring(i, i - 1) * strPeso.substring(i, i - 1);        
			intTotal += intResultado;  
		}  

		var intResto = intTotal % 11;  
		if(intResto != 0)  
			intResto = 11 - intResto;  
		if(intResto == 10 || intResto == 11)  
			intResto = intResto.toString().substring(2, 1);  
		if(parseInt(intResto, 10) != parseInt(PIS_PASEP.substring(11, 10), 10))  {
			//return 'PIS/PASEP inv�lido!';  
			alert('NIS inválido!');
			document.form1.nisCan.value="";
			//document.form1.nisCan.focus();
			return false;
		}	

			return true;  
		} catch(excecao) {  
			return 'valPISPASEP(): ' + excecao.description;  
	}  
}  


function confirma_exclusao(tabela,id){	
	if (confirm('Deseja realmente excluir este registro?')){
			location.href="?acao=excluir&tabela="+tabela+"&id="+id;
	}
		else{
			history.back();
	}
}

function confirma_inscricao(){	
	if (confirm('Confira atentamente todos os seus dados antes de prosseguir.\nDeseja realmente prosseguir??')){
			return true;
	}
		else{
			return false;
	}
}

function confirma_reset(id){	
	if (confirm('Deseja realmente excluir as senhas deste concurso??')){
			location.href="?acao=resetar_senhas&concurso="+id;
	}
		else{
			history.back();
	}
}

$('document').ready(function(){
	//fun��es para valida��o de formulario	
	$("#formulario").validate({ //valide o form indicado por idDoForm
                rules : { //aqui descreva as regras
                        nomCan : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						endLogCan : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						endBaiCan : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						emaCan : {
								//required : true, //regra que indica que email � obrigat�rio
								email: true
						},
						cpfCan : {
								required : true  //regra que indica que email � obrigat�rio
								/*digits: true,
								minlength:11,
								maxlength:11*/
						},
						descricao:{
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
							},
						curCan:{
								required : true
							},
						op2Can:{
								required : true

							},
						linCan:{
								required : true
							},	
						endUfCan:{
								required : true
							},
						endCidCan:{
								required : true
							},
						conCan:{
								required : true,
								digits : true
							},
						ideNumCan:{
								required : true,
								digits : true
							},
						ideOrgCan:{
								required : true
							},
						ideUfCan:{
								required : true
							},	
						dtnCan:{
								required : true
							},
						sexCan:{
								required : true
							},
						celCan:{
								required : true
							},
						endCepCan:{
								required : true
							},
						cotCan:{
								required : true
							},
						cidProCan:{
								required : true
							},
						curIns:{
							required : true
							},
						defIns:{
							required : true
							}	
							
							
						
                }
        });
	//fun��es ajax
	$('#loading3').hide();
	$('#loading2').hide();
	$('#loading').hide();

	//Para os selects <select>
	$('#botao').click(function(){
		$('#loading3').ajaxStart(function(){
			$('#alvo3').hide();
			$('#loading3').show();	
		});
		$('#loading3').ajaxStop(function(){
			$('#loading3').hide();	
		});
		$.post('buscar_can.php',
		{
			nome: $('#nome').val()
			},
		function(nome){
				$('#alvo3').show();
				$('#alvo3').empty().html(nome);
				
		}
		);
	});
	$('#msg_ep_loading').hide();
	//Para os selects <select>
	$('#cargo').change(function(){
		$('#msg_ep_loading').ajaxStart(function(){
			$('#msg_ep_show').hide();
			$('#msg_ep_loading').show();	
		});
		$('#msg_ep_loading').ajaxStop(function(){
			$('#msg_ep_loading').hide();	
		});
		$.post('buscar_pergunta.php',
		{
			cargo: $('#cargo').val()
			},
		function(nome){
				$('#msg_ep_show').show();
				$('#msg_ep_show').empty().html(nome);
				
		}
		);
	});
	
	$('#isencao2').hide();
	//Para os selects <select>
	$('#isencao').change(function(){
		if ($('#isencao').val()==1){						 	
			$('#isencao2').show();
		}
		else{
			$('#isencao2').hide();
			}
		//$('#isencao1').show();	
	});
	

	
	//Para os selects <select>
	/*$('#estado').change(function(){
		$('#loading2').ajaxStart(function(){
			$('#alvo2').hide();
			$('#loading2').show();	
		});
		$('#loading2').ajaxStop(function(){
			$('#loading2').hide();	
		});
		$.post('buscar_cidade.php',
		{
			valor: $('#estado').val()
			},
		function(estado){
				$('#alvo2').show();
				$('#alvo2').empty().html(estado);
				
		}
		);
	});*/
		
		//Ajax para a segunda op��o
		$('#op2_select_loading').hide();
		$('#cargo').change(function(){
			$('#op2_select_loading').ajaxStart(function(){
				//$('#op2_select_alvo').hide();
				$('#op2_select_loading').show();	
			});
			$('#op2_select_loading').ajaxStop(function(){
				$('#op2_select_loading').hide();	
			});
			$.post('buscar_op2.php',
			{
				cargo: $('#cargo').val()
				},
			function(nome){
					$('#op2_select_alvo').show();
					$('#op2_select_alvo').empty().html(nome);
					
			}
			);
		});
		
		//MASCARAS INICIO
		$("#cep").mask('99999-999');
		$("#telefone").mask('(99)9999-9999');
		
		$("#dtnCan").mask('99/99/9999');
		$("#ideDatCan").mask('99/99/9999');
		
		$("#nis").mask('99999999999');
		//MASCARAS FIM						 
});


