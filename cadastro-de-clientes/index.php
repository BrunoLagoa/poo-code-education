<!DOCTYPE html>
<html lang="pt-br>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Cadastro de Clientes - POO Orientação a Objetos</title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="css/styles.css" rel="stylesheet">
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Home</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Lista de Clientes</a>
                </li>
            </ul>
        </nav>
    </div>
</header>


<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">

                    <?php

                    require_once('Cliente.php');

                    $lista = [
                        '1' => [
                            'nome'      => 'Danilo Oliveira',
                            'cpf'       => '12312312323',
                            'endereco'  => 'Rua Piaui',
                            'cidade'    => 'Lagoa Santa',
                            'estado'    => 'MG',
                            'telefone'  => '(31)88601111'
                        ],
                        '2' => [
                            'nome'      => 'Bruno Cesar',
                            'cpf'       => '12312312323',
                            'endereco'  => 'Rua Piaui',
                            'cidade'    => 'Lagoa Santa',
                            'estado'    => 'MG',
                            'telefone'  => '(31)88602222'
                        ],
                        '3' => [
                            'nome'      => 'Maria Oliveira',
                            'cpf'       => '12312312323',
                            'endereco'  => 'Rua Piaui',
                            'cidade'    => 'Lagoa Santa',
                            'estado'    => 'MG',
                            'telefone'  => '(31)88603333'
                        ]                        ,
                        '4' => [
                            'nome'      => 'Ana Clara',
                            'cpf'       => '12312312323',
                            'endereco'  => 'Rua Piaui',
                            'cidade'    => 'Lagoa Santa',
                            'estado'    => 'MG',
                            'telefone'  => '(31)88604444'
                        ]

                    ];

                    $ordem = isset($_GET['ordem']) ? $_GET['ordem'] : '';

                    $clientes = new Cliente();
                    if($ordem == "ascendente"){
                        $clientes = $clientes->ordemCliente($lista, "nome");
                    }else{
                        $clientes = $clientes->ordemCliente($lista, "nome", true);
                    }

                    ?>

                    <div class="btn-group">
                        <form method="get" >
                        <a href="index.php?ordem=ascendente" title="Valor" class="btn btn-success">Ordem ascendente </a>
                        <a href="index.php?ordem=descendente" title="Valor" class="btn btn-warning">Ordem descendente </a>
                        </form>
                    </div>

                    <?php foreach ($clientes as $key => $value) { ?>
                    <div class="bs-list-name">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $key; ?>"><?php echo $value['nome']; ?> - Clique para mostrar dados completo</a>
                                    </h4>
                                </div>
                                <div id="<?php echo $key; ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p><b>CPF:</b> <?php echo $value['cpf']; ?></p>
                                        <p><b>Endereço:</b> <?php echo $value['endereco']; ?></p>
                                        <p><b>Cidade:</b> <?php echo $value['cidade']; ?></p>
                                        <p><b>Estado:</b> <?php echo $value['estado']; ?></p>
                                        <p><b>Telefone:</b> <?php echo $value['telefone']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                </div>
            </div>



        </div><!--/col-12-->
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li><i class="icon-facebook icon-2x"></i></li>
                    <li><i class="icon-twitter icon-2x"></i></li>
                    <li><i class="icon-google-plus icon-2x"></i></li>
                    <li><i class="icon-pinterest icon-2x"></i></li>
                </ul>

            </div>
            <div class="col-sm-6">
                <p class="pull-right">Cadastro de Clientes - Por <a href="#" title="Bruno Castro">Bruno Castro</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>