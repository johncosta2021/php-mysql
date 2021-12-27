 function mascara(o,f){
      v_obj=o
      v_fun=f
      setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
      v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
      v=v.replace(/^(\d{2})(\d)/g,"($1)$2."); //Coloca parênteses em volta dos dois primeiros dígitos
      v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
      return v;
	};
function retiramask(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execretiramask()",1)
}
function execretiramask(){
	v_obj.value=v_fun(v_obj.value)
}
function mtell(v){
	v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
	v=v.replace(/^(\d{2})(\d)/g,"$1$2"); //Coloca parênteses em volta dos dois primeiros dígitos
	v=v.replace(/(\d)(\d{4})$/,"$1$2");    //Coloca hífen entre o quarto e o quinto dígitos
	return v;
};
function validacpf(cpf){
 
var i;
 
s = document.form1.cpf.value;
 
var c = s.substr(0,9);
 
var dv = s.substr(9,2);
 
var d1 = 0;
 
for (i = 0; i < 9; i++)
 
{
 
d1 += c.charAt(i)*(10-i);
 
}
 
if (d1 == 0){
 
alert("CPF Invalido")
 
return false;
 
}
 
d1 = 11 - (d1 % 11);
 
if (d1 > 9) d1 = 0;
 
if (dv.charAt(0) != d1)
 
{
 
alert("CPF Invalido")
 
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
 
alert("CPF Invalido")
 
return false;
 
}
 
return true;
 
}
 

function validaPisPasepNit(PIS_PASEP)  
{  
try {  
	//PIS_PASEP = PIS_PASEP.replace('.', '').replace('.', '').replace('-', '');  
	PIS_PASEP = document.form1.pis.value;
	if(PIS_PASEP.length != 11) { 
		//return 'PIS/PASEP inv�lido!';  
		alert('PIS/PASEP/NIT inv�lido!');
		document.form1.pis.value="";
		//document.form1.pis.focus();
		return false;
	}	
	if(isNaN(PIS_PASEP))  {
		//return 'PIS/PASEP inv�lido!';  
		alert('PIS/PASE/NIT inv�lido!');
		document.form1.pis.value="";
		//document.form1.pis.focus();
		return false;
	}
	if(PIS_PASEP == '00000000000')  {
		//return 'PIS/PASEP inv�lido!';
		alert('PIS/PASEP/NIT inv�lido!');
		document.form1.pis.value="";
		//document.form1.pis.focus();
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
			alert('PIS/PASEP/NIT inv�lido!');
			document.form1.pis.value="";
			//document.form1.pis.focus();
			return false;
		}	

			return true;  
		} catch(excecao) {  
			return 'valPISPASEP(): ' + excecao.description;  
	}  
}  


function confirma_exclusao(tabela,id){	
	if (confirm('Deseja realmente excluir este registro??')){
			location.href="?acao=excluir&tabela="+tabela+"&id="+id;
	}
		else{
			history.back();
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
                        nome : {
								//required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						resumo : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						endereco : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						email : {
								//required : true, //regra que indica que email � obrigat�rio
								email: true
						},
						cpf : {
								//required : true, //regra que indica que o cpf � obrigat�rio
								//digits: true,
								minlength:14,
								maxlength:14 //comentar com o professor..
						},
						cpf2 : {
								required : true, //regra que indica que o cpf � obrigat�rio
								//digits: true,
								minlength:14,
								maxlength:14 //comentar com o professor..
						},
						login:{
								required : true //regra que indica que login � obrigat�rio
							},
						senha:{
								required : true, //regra que indica que senha � obrigat�rio
								minlength: 5
							},
						senha_2:{
								equalTo: "#senha"
							},
						senha1:{
								required : true, //regra que indica que senha � obrigat�rio
								minlength: 5
							},
						senha2:{
								equalTo: "#senha"
							},							
						descricao:{
								required : true, //regra que indica que descricao � obrigat�rio
								minlength:2
							},
						'qtd_funcao[]':{
								required : true, //regra que indica que email � obrigat�rio								
							},	
						remuneracao:{
								required : true, //regra que indica que email � obrigat�rio
								number: true
							},
						coodenadores:{
								number: true
							},
						fiscais:{
								number: true
							},
						apoio:{
								number: true
							},
						pis:{
								required : true, //regra que indica que email � obrigat�rio
								digits: true,
								minlength:11,
								maxlength:11
							},
						concurso:{
								required : true
							},
						funcao:{
								required : true
							},
						concurso_cap:{
								required : true
							},
						escolaridade:{
								required : true
							},
							nascimentoo:{
								required : true
							},
								data_nascimento:{
								required : true
							},
						situacao:{
								required : true
							},
						telefone:{
								required : true
							},
						cep:{
								required : true
							},	
						estado:{
								required : true
							},
						cidade:{
								required : true
							},
						bairro:{
								required : true
							},
						siape:{
								required : true,
								number: true,
								minlength:7,
								maxlength:7
							},
						celular:{
								required : true
						},
						carga_horaria:{
								required : true,
								digits: true,
								number: true,
								maxlength:3
						},
						palavra:{
								required : true,
								minlength:3
						},
						nascimento:{
								required : true
							},

                }
		});

	//fun��es ajax
	$('#loading1').hide();
	$('#loading2').hide();
	$('#loading').hide();
	$('#loading4').hide();
	$('#loading5').hide();
	$('#loading6').hide();
	
	//Para busca
	$('#botao2').click(function(){
		$('#loading').ajaxStart(function(){
			$('#alvo').hide();
			$('#loading').show();	
		});
		$('#loading').ajaxStop(function(){
			$('#loading').hide();	
		});
		$.post('buscar_senha.php',
		{
			valor: $('#valor').val(),
			concurso: $('#concurso').val(),
			tabela: $('#tabela').val(),
			campo: $('#campo').val()
			},
		function(data){
				$('#alvo').show();
				$('#alvo').empty().html(data);
		}
		);
	});
	
	//Para busca
	$('#botao').click(function(){
		$('#loading').ajaxStart(function(){
			$('#alvo').hide();
			$('#loading').show();	
		});
		$('#loading').ajaxStop(function(){
			$('#loading').hide();	
		});
		$.post('buscar.php',
		{
			valor: $('#valor').val(),
			tabela: $('#tabela').val(),
			campo: $('#campo').val(),
			campo_show: $('#campo_show').val()
			},
		function(data){
				$('#alvo').show();
				$('#alvo').empty().html(data);
		}
		);
	});
	//Para os selects <select>
	$('#concurso').change(function(){
		$('#loading5').ajaxStart(function(){
			$('#alvo5').hide();
			$('#loading5').show();	
		});
		$('#loading5').ajaxStop(function(){
			$('#loading5').hide();	
		});
		$.post('buscar_caps.php',
		{
			valor: $('#concurso').val()
			},
		function(data){
				$('#alvo5').show();
				$('#alvo5').empty().html(data);
				
		}
		);
	});
	$('#concurso').change(function(){
		$('#loading6').ajaxStart(function(){
			$('#alvo6').hide();
			$('#loading6').show();	
		});
		$('#loading6').ajaxStop(function(){
			$('#loading6').hide();	
		});
		$.post('buscar_funcoes.php',
		{
			valor: $('#concurso').val()
			},
		function(data){
				$('#alvo6').show();
				$('#alvo6').empty().html(data);
		}
		);
	});
	$('#alvo5').hide();
	//Para os selects <select>
	$('#concurso').change(function(){
		$('#alvo5').show();	
	});
	
	$('#formulario_dados').hide();
	$('#pergunta_servidor').show();
	///$('#formulario_dados_servidor').hide();
	
	$('#sim').click(function(){
		$('#quebras').hide();
		$('#pergunta_servidor').hide();
		
		$("matricula_siape").removeAttr('disabled');
		$('#formulario_dados').show();	
		
	});	
	$('#nao').click(function(){
		$('#quebras').hide();
		$('#pergunta_servidor').hide();
		$('#matricula_siape').attr('disabled','disabled');
		$('#formulario_dados').show();	
	});	
	
	//Para os selects <select>
	$('#estado').change(function(){
		$('#loading4').ajaxStart(function(){
			$('#alvo4').hide();
			$('#loading4').show();	
		});
		$('#loading4').ajaxStop(function(){
			$('#loading4').hide();	
		});
		$.post('buscar_cidade.php',
		{
			valor: $('#estado').val()
			},
		function(data){
				$('#alvo4').show();
				$('#alvo4').empty().html(data);
				
		}
		);
	});
	
		$('#alvo1').change(function(){
						$('#loading2').ajaxStart(function(){
						$('#alvo2').hide();
						$('#loading2').show();	
					});
					$('#loading2').ajaxStop(function(){
						$('#loading2').hide();	
					});
					$.post('buscar_fun.php',
					{
						concurso_cap: $('#alvo1').val()
						},
					function(data2){
							$('#alvo1').show();
							$('#alvo2').show();
							$('#alvo2').empty().html(data2);
					}
					);
				});
		$('#loading3').hide();
		$('#cap').change(function(){
						$('#loading3').ajaxStart(function(){
						$('#alvo3').hide();
						$('#loading3').show();	
					});
					$('#loading3').ajaxStop(function(){
						$('#loading3').hide();	
					});
					$.post('buscar_funcoes.php',
					{
						cap: $('#cap').val(),
						concurso: $('#concurso').val()
						},
					function(dados_funcoes){
							$('#alvo3').empty().html(dados_funcoes);
							$('#alvo3').show();
					}
					);
				});
		//Para busca
	$('#cap').keyup(function(){
		$('#loading6').ajaxStart(function(){
			$('#alvo6').hide();
			$('#loading6').show();	
		});
		$('#loading6').ajaxStop(function(){
			$('#loading6').hide();	
		});
		$.post('buscar_cap2.php',
		{
			cap: $('#cap').val()
			},
		function(data){
				$('#alvo6').show();
				$('#alvo6').empty().html(data);
		}
		);
	});
		//MASCARAS INICIO
		//$("#siape_").mask('99999-999');
		$("#telefone").mask('(99) 9999-9999');
		$("#celular").mask('(99)9.9999-9999');
		$("#celular2").mask('(99)99999-9999');// comentar com o prof
		$("#data1").mask('99/99/9999');
		$("#data2").mask('99/99/9999');
        $("#siape").mask('9999999');
		$("#cpf").mask('999.999.999-99');
		$("#cpf2").mask('99999999999');
		
		// comentar com o prof
		$("#email").mask('exemplo@exemplo.com');
		//MASCARAS FIM						 
});
	$('document').ready(function(){
	//fun��es para valida��o de formulario	
	$("#formularioo").validate({ //valide o form indicado por idDoForm
                rules : { //aqui descreva as regras
                        nome : {
								//required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						resumo : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						endereco : {
								required : true, //regra que indica que email � obrigat�rio
								minlength:2
						},
						email : {
								//required : true, //regra que indica que email � obrigat�rio
								email: true
						},
						cpf : {
								//required : true, //regra que indica que o cpf � obrigat�rio
								//digits: true,
								minlength:14,
								maxlength:14 //comentar com o professor..
						},
						cpf2 : {
								required : true, //regra que indica que o cpf � obrigat�rio
								//digits: true,
								minlength:14,
								maxlength:14 //comentar com o professor..
						},
						login:{
								required : true //regra que indica que login � obrigat�rio
							},
						senha:{
								required : true, //regra que indica que senha � obrigat�rio
								minlength: 5
							},
						senha_2:{
								equalTo: "#senha"
							},
						senha1:{
								required : true, //regra que indica que senha � obrigat�rio
								minlength: 5
							},
						senha2:{
								equalTo: "#senha"
							},							
						descricao:{
								required : true, //regra que indica que descricao � obrigat�rio
								minlength:2
							},
						'qtd_funcao[]':{
								required : true, //regra que indica que email � obrigat�rio								
							},	
						remuneracao:{
								required : true, //regra que indica que email � obrigat�rio
								number: true
							},
						coodenadores:{
								number: true
							},
						fiscais:{
								number: true
							},
						apoio:{
								number: true
							},
						pis:{
								required : true, //regra que indica que email � obrigat�rio
								digits: true,
								minlength:11,
								maxlength:11
							},
						concurso:{
								required : true
							},
						funcao:{
								required : true
							},
						concurso_cap:{
								required : true
							},
						escolaridade:{
								required : true
							},
							nascimentoo:{
								required : true
							},
								data_nascimento:{
								required : true
							},
						situacao:{
								required : true
							},
						telefone:{
								required : true
							},
						cep:{
								required : true
							},	
						estado:{
								required : true
							},
						cidade:{
								required : true
							},
						bairro:{
								required : true
							},
						celular:{
								required : true
						},
						carga_horaria:{
								required : true,
								digits: true,
								number: true,
								maxlength:3
						},
						palavra:{
								required : true,
								minlength:3
						},
						nascimento:{
								required : true
							},

                }
		});

	//fun��es ajax
	$('#loading1').hide();
	$('#loading2').hide();
	$('#loading').hide();
	$('#loading4').hide();
	$('#loading5').hide();
	$('#loading6').hide();
	
	//Para busca
	$('#botao2').click(function(){
		$('#loading').ajaxStart(function(){
			$('#alvo').hide();
			$('#loading').show();	
		});
		$('#loading').ajaxStop(function(){
			$('#loading').hide();	
		});
		$.post('buscar_senha.php',
		{
			valor: $('#valor').val(),
			concurso: $('#concurso').val(),
			tabela: $('#tabela').val(),
			campo: $('#campo').val()
			},
		function(data){
				$('#alvo').show();
				$('#alvo').empty().html(data);
		}
		);
	});
	
	//Para busca
	$('#botao').click(function(){
		$('#loading').ajaxStart(function(){
			$('#alvo').hide();
			$('#loading').show();	
		});
		$('#loading').ajaxStop(function(){
			$('#loading').hide();	
		});
		$.post('buscar.php',
		{
			valor: $('#valor').val(),
			tabela: $('#tabela').val(),
			campo: $('#campo').val(),
			campo_show: $('#campo_show').val()
			},
		function(data){
				$('#alvo').show();
				$('#alvo').empty().html(data);
		}
		);
	});
	//Para os selects <select>
	$('#concurso').change(function(){
		$('#loading5').ajaxStart(function(){
			$('#alvo5').hide();
			$('#loading5').show();	
		});
		$('#loading5').ajaxStop(function(){
			$('#loading5').hide();	
		});
		$.post('buscar_caps.php',
		{
			valor: $('#concurso').val()
			},
		function(data){
				$('#alvo5').show();
				$('#alvo5').empty().html(data);
				
		}
		);
	});
	$('#concurso').change(function(){
		$('#loading6').ajaxStart(function(){
			$('#alvo6').hide();
			$('#loading6').show();	
		});
		$('#loading6').ajaxStop(function(){
			$('#loading6').hide();	
		});
		$.post('buscar_funcoes.php',
		{
			valor: $('#concurso').val()
			},
		function(data){
				$('#alvo6').show();
				$('#alvo6').empty().html(data);
		}
		);
	});
	$('#alvo5').hide();
	//Para os selects <select>
	$('#concurso').change(function(){
		$('#alvo5').show();	
	});
	
	$('#formulario_dados').hide();
	$('#pergunta_servidor').show();
	///$('#formulario_dados_servidor').hide();
	
	$('#sim').click(function(){
		$('#quebras').hide();
		$('#pergunta_servidor').hide();
		
		$("matricula_siape").removeAttr('disabled');
		$('#formulario_dados').show();	
		
	});	
	$('#nao').click(function(){
		$('#quebras').hide();
		$('#pergunta_servidor').hide();
		$('#matricula_siape').attr('disabled','disabled');
		$('#formulario_dados').show();	
	});	
	
	//Para os selects <select>
	$('#estado').change(function(){
		$('#loading4').ajaxStart(function(){
			$('#alvo4').hide();
			$('#loading4').show();	
		});
		$('#loading4').ajaxStop(function(){
			$('#loading4').hide();	
		});
		$.post('buscar_cidade.php',
		{
			valor: $('#estado').val()
			},
		function(data){
				$('#alvo4').show();
				$('#alvo4').empty().html(data);
				
		}
		);
	});
	
		$('#alvo1').change(function(){
						$('#loading2').ajaxStart(function(){
						$('#alvo2').hide();
						$('#loading2').show();	
					});
					$('#loading2').ajaxStop(function(){
						$('#loading2').hide();	
					});
					$.post('buscar_fun.php',
					{
						concurso_cap: $('#alvo1').val()
						},
					function(data2){
							$('#alvo1').show();
							$('#alvo2').show();
							$('#alvo2').empty().html(data2);
					}
					);
				});
		$('#loading3').hide();
		$('#cap').change(function(){
						$('#loading3').ajaxStart(function(){
						$('#alvo3').hide();
						$('#loading3').show();	
					});
					$('#loading3').ajaxStop(function(){
						$('#loading3').hide();	
					});
					$.post('buscar_funcoes.php',
					{
						cap: $('#cap').val(),
						concurso: $('#concurso').val()
						},
					function(dados_funcoes){
							$('#alvo3').empty().html(dados_funcoes);
							$('#alvo3').show();
					}
					);
				});
		//Para busca
	$('#cap').keyup(function(){
		$('#loading6').ajaxStart(function(){
			$('#alvo6').hide();
			$('#loading6').show();	
		});
		$('#loading6').ajaxStop(function(){
			$('#loading6').hide();	
		});
		$.post('buscar_cap2.php',
		{
			cap: $('#cap').val()
			},
		function(data){
				$('#alvo6').show();
				$('#alvo6').empty().html(data);
		}
		);
	});
		//MASCARAS INICIO
		//$("#siape_").mask('99999-999');

		
		// comentar com o prof
	
		//MASCARAS FIM						 
});
	