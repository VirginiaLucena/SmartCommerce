<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fornecedores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="https://icon-icons.com/icons2/11/PNG/256/customer_person_people_man_user_client_1629.png" style="float:left;width:400px;height:400px">
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
			<b>EDITAR CLIENTE</b><br><br><br>
			<form method="post" action=" {{route('atualizarcliente')}} ">

				@csrf

                <input type="hidden" name="id" value="{{ $cliente->id }}">
			    <input type="text" placeholder="Nome" name="nome" value="{{ $cliente->user->name }}"/> </br></br>
			    <input type="email" placeholder="Email" name="email" value="{{ $cliente->user->email }}"/> </br></br>
			    <input type="text" placeholder="Telefone" name="telefone" value="{{ $cliente->user->telefone }}"/> </br></br>
                <input type="password" placeholder="Senha" name="senha"/> </br></br>
			    <input type="submit" id="botao" value="Salvar"/>

			</form>
		</div></center>
	</body>
</html>