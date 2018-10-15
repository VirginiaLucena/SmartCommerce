<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fornecedores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="https://gestaoclick.com.br/site/images/funcionalidades/fornecedores/fornecedores.png" style="float:left;width:400px;height:400px">
        <style>
            html, body {
                background-color: #F0FFFF;
                color: black;
                font-family: arial;
                
            }
            #formu{
                box-shadow: 5px 5px 10px #0076a3;
                -webkit-box-shadow: 5px 5px 10px #0076a3;
                -moz-box-shadow: 5px 5px 10px #0076a3;
            	margin-top:200px;
            	padding:2%;
            	text-align: center;
            	background-color:#B0E0E6;
            	
            	width:30%;
            }
            #botao{
            	background-color:green;
            	border-color: green;
            	color:white;
            	padding:0.5%;
            }

        </style>
     </head>
	<body>
		<center><div id="formu">
			<br>
			<br>
			<b>CADASTRO DE FORNECEDORES</b><br><br><br>
			<form method="post" action=" {{route('fornecedores')}} ">

				@csrf

				<input type="text" placeholder="Nome" name="nome"/> </br><br>
                <input type="email" placeholder="E-mail" name="email"/> </br></br>
                <input type="text" placeholder="Telefone" name="telefone"/> </br></br>
				<input type="password" placeholder="Senha" name="senha"/> </br></br>
				<input id="botao" type="submit" value="Cadastrar"/><br><br>

			</form>
		</div></center>
	</body>
</html>
		
		