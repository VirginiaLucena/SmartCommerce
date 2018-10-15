<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="https://yata.ostr.locaweb.com.br/2befa8f6de61a912dda5ad63cf8c0e7eb41705f5ba917cc7d5cce3378560059f" style="width:250px;height:250px;float:left;margin-left:90px">
        
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

        </style>
     </head>
    <body>
        <center><div id="formu">
            <br>
                <b>MENU</b></br></br>
                <a href="{{ route('cadastrarfuncionario') }}">Funcionário</a> - <a href="{{ route('funcionarios') }}">Listar</a></br></br>
                <a href="{{ route('cadastrarfornecedor') }}">Fornecedor</a> - <a href="{{ route('fornecedores') }}">Listar</a></br></br>
                <a href="{{ route('cadastrarcliente') }}">Cliente</a> - <a href="{{ route('clientes') }}">Listar</a></br></br>
                <a href="{{ route('cadastrarproduto') }}">Produto</a> - <a href="{{ route('produtos') }}">Listar</a></br></br>
                <a href="{{ route('cadastrarvenda') }}">Vendas</a> - <a href="{{ route('vendas') }}">Listar</a></br></br>
        </div></center>
    </body>
</html>
        
        
