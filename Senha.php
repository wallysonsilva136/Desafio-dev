
<script>

function valida(){

    var senha = document.querySelector("#senha").value;
    
    var letrasMaiusculas = /[A-Z]/;
    var letrasMinusculas = /[a-z]/;
    var numeros = /[0-9]/;
     var caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/;

    

    if (senha.length < 6 || senha.length > 12) {

        console.log('erro, Sua senha deve ter entre 6 e 12 caracteres!');
        alert('erro, Sua senha deve ter entre 6 e 12 caracteres!');
       
    } else {
        //.....
        console.log('Passou na validação!');
        alert('Passou na validação de tamanho minimo de caracteres!');
    }
 
    if(letrasMaiusculas.test(senha)){
 console.log('Sucesso, contem uma letra maiuscula');
 alert(' Sucesso, contem uma letra maiuscula!');
} else {
 console.log('erro, não contem letra maiuscula');
 alert(' erro, não contem letra maiuscula!');
}

if(letrasMinusculas.test(senha)){
 console.log('Sucesso, contem uma letra minuscula');
 alert(' Sucesso, contem uma letra minuscula!');
} else {
 console.log('erro, não contem letras minusculas');
 alert(' erro, não contem letras minusculas!');
}
   
if(numeros.test(senha)){
 console.log('Sucesso, Possui numeros');
 alert(' Sucesso, Possui numeros!');
} else {
 console.log('erro, não contem numeros');
 alert(' erro, não contem numeros!');
}

if(caracteresEspeciais.test(senha)){
 console.log('Sucesso, Possui caracteres especiais');
 alert(' Sucesso, Possui caracteres especiais');
} else {
 console.log('erro, não contem caracteres especiais');
 alert(' erro, não contem caracteres especiais');
}
   
};

function validarSenhaForca(){
	var senha = document.getElementById('senha').value;
	var forca = 0;
	document.getElementById("impSenha").innerHTML = "Senha " + senha;

	if((senha.length >= 4) && (senha.length <= 7)){
		forca += 10;
	}else if(senha.length > 7){
		forca += 25;
	}

	if((senha.length >= 5) && (senha.match(/[a-z]+/))){
		forca += 10;
	}

	if((senha.length >= 6) && (senha.match(/[A-Z]+/))){
		forca += 20;
	}

	if((senha.length >= 7) && (senha.match(/[@#$%&;*]/))){
		forca += 25;
	}

	if(senha.match(/([1-9]+)\1{1,}/)){
		forca += -25;
	}

	mostrarForca(forca);
}

function mostrarForca(forca){
	document.getElementById("impForcaSenha").innerHTML = "Força: " + forca;

	if(forca < 30 ){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #ff0000'>Fraca</span>";
	}else if((forca >= 30) && (forca < 50)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #FFD700'>Média</span>";
	}else if((forca >= 50) && (forca < 70)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #7FFF00'>Forte</span>";
	}else if((forca >= 70) && (forca < 100)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #008000'>Excelente</span>";
	}
}

</script>
<html>
    <head>
        <title>Senha</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta charset="utf-8">

    </head>
    <body>
        
            <form id="form">

                <label style="font-weight: normal" for="senha">Senha:<span style="color: red">*</span></label>
                <input type="password" minlength="6" maxlength="12" name="Senha" maxlength="12" id="senha" onkeyup="validarSenhaForca()">
                <input type="button" value="Confirmar" onclick="valida()">
                <div id="impSenha"></div> 
                <div id="impForcaSenha"></div>  
                <div id="erroSenhaForca"></div> 
            </form>
        
        <div id="msg-error" value="msg-error"></div>
    </body>
</html>
