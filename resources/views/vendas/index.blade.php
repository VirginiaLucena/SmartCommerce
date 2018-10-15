<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fornecedores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
            	margin-top:100px;
                margin-left: 200px;
            	padding:2%;
            	text-align: center;
            	background-color:#B0E0E6;
            	width:60%;
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
        <img src="https://icon-icons.com/icons2/11/PNG/256/customer_person_people_man_user_client_1629.png" style="float:left;width:400px;height:400px;">
		<center><div id="formu">
			<br>
			<br>
			<b>LISTA DE VENDAS</b><br><br>
			
            <ul style="list-style: none">
            @foreach($vendas as $venda)
                <li>
                    Produto {{ $venda->Produto->nome }} da marca {{ $venda->Produto->marca }} vendido ao cliente {{ $venda->Cliente->id }} - <a href="{{ route('editvenda', [$venda->id]) }}"> Editar</a> - <a href="{{ route('apagarvenda', [$venda->id]) }}"> Excluir</a>
                </li>
            @endforeach
            </ul>
		</div></center>
	</body>
</html>