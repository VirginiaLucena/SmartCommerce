<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Funcionários</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="http://pngimage.net/wp-content/uploads/2018/06/funcionarios-png.png" style="float:left;width:430px;height:400px">
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
            	margin-top:140px;
            	padding:2%;
            	text-align: center;
            	background-color:#B0E0E6;
            	
            	width:20%;
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
			
			<b>CADASTRO DE FUNCIONÁRIOS</b><br><br><br>
			<form method="post" action=" {{url('funcionarios')}} ">

				@csrf
				
						
						<input type="text" placeholder="Nome" name="nome"/> <br><br>
					    <input type="email" placeholder="E-mail" name="email"/> <br><br>
                        <input type="text" placeholder="Telefone" name="telefone"/> <br><br>
					    <input type="password" placeholder="Senha" name="senha"/> </br></br>
					    <input type="text" placeholder="CPF" name="cpf"/> </br><br>
					    <input type="number" placeholder="Salário" name="salario"/> </br><br>
					    <input type="submit" id ="botao" value="Cadastrar"/>
	

			</form>
		</div></center>
	</body>
</html>
		
		
