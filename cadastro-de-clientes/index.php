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
            <a href="#" class="navbar-brand">Home</a>
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

        <div class="col-md-11">

            <div class="panel">
                <div class="panel-body">

                    <?php
                    require_once('PessoaFisica.php');
                    require_once('PessoaJuridica.php');

                    $pessoa1 = new PessoaFisica('Bruno Castro',30,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
                    $pessoa2 = new PessoaFisica('Danilo Oliveira',18,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
                    $pessoa3 = new PessoaFisica('Maria Oliveira',20,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
                    $pessoa4 = new PessoaFisica('Ana Clara',32,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
                    $pessoa5 = new PessoaFisica('Oliveira Silva',22,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);

                    $pessoa6  = new PessoaJuridica('Cesar Duarte',33,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
                    $pessoa7  = new PessoaJuridica('Carla Magalhães',15,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
                    $pessoa8  = new PessoaJuridica('José Castro',19,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
                    $pessoa9  = new PessoaJuridica('Magnata Romeu',25,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
                    $pessoa10 = new PessoaJuridica('Erica Ferreia',26,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);

                    $lista = array($pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5, $pessoa6, $pessoa7, $pessoa8, $pessoa9, $pessoa10);

                    ?>
                    <br /><br />
                    <table id="tableCliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Indentificação</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($lista as $key => $value){?>
                        <tr>
                            <td><?php echo $value->getNome(); ?></td>
                            <td><?php echo $value->getTipo(); ?></td>
                            <td><?php echo $value->getCodigo(); ?></td>
                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $key; ?>">Dados Completo</button></td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $key; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Dados Cliente: <?php echo $value->getNome(); ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><b>Idade:</b> <?php echo $value->getIdade(); ?></p>
                                        <p><b>Endereço:</b> <?php echo $value->getEndereco(); ?></p>
                                        <p><b>Endereço de Cobrança:</b> <?php echo $value->getEnderecoCobranca(); ?></p>
                                        <p><b>Cidade:</b> <?php echo $value->getCidade(); ?></p>
                                        <p><b>Estado:</b> <?php echo $value->getEstado(); ?></p>
                                        <p><b>Telefone:</b> <?php echo $value->getTelefone(); ?></p>
                                        <p><b>RG:</b> <?php echo $value->getCodigo(); ?></p>
                                        <p><b>Grau de Importância:</b> <?php echo $value->getEstrela(); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Sair</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php } ?>

                        </tbody>
                    </table>


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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tableCliente').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json"
            }
        } );
    } );
</script>
</body>
</html>