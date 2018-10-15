<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="https://www.lojavirtual.com.br/wp-content/uploads/2015/12/AddProduto.png" style="float:left;width:350px;height:350px;margin-left:16px">
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
			<b>PRODUTOS</b><br><br>
			<form method="post" action=" {{url('produtos')}} ">

				@csrf

				 <input type="text" placeholder="Nome" name="nome"/></br></br>
				 <input type="text" placeholder="Marca" name="marca"/></br></br>
                 <select name="id_fornecedor">
                    @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->user->name }}</option>
                    @endforeach
                 </select></br></br>
				 <input type="number" placeholder="Preço" name="preco"/></br></br>
				    <input type="submit" id="botao" value="Cadastrar"/>

			</form>
		</div></center>
	</body>
</html>
		

