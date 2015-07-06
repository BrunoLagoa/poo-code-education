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

                    define('CLASS_DIR', 'src/');
                    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
                    spl_autoload_register();

                    //$sqlite = "sqlite:database.sqlite";
                    $pdo = new PDO('mysql:host=localhost;dbname=curso_code_education', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


                    $stmt = $pdo->prepare("SELECT * FROM clientes");
                    $stmt->execute();
                    $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

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
                            <td><?php echo $value->nome; ?></td>
                            <td><?php echo $value->tipo; ?></td>
                            <td><?php echo ( $value->tipo == "Pessoa Fisica" ? $value->cpf : $value->cnpj ); ?></td>
                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $key; ?>">Dados Completo</button></td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $key; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Dados Cliente: <?php echo $value->nome; ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><b>Idade:</b> <?php echo $value->idade; ?></p>
                                        <p><b>Endereço:</b> <?php echo $value->endereco; ?></p>
                                        <p><b>Endereço de Cobrança:</b> <?php echo $value->enderecoCobranca; ?></p>
                                        <p><b>Cidade:</b> <?php echo $value->cidade; ?></p>
                                        <p><b>Estado:</b> <?php echo $value->estado; ?></p>
                                        <p><b>Telefone:</b> <?php echo $value->telefone; ?></p>
                                        <p><b>Documento:</b> <?php echo ( $value->tipo == "Pessoa Fisica" ? $value->cpf : $value->cnpj ); ?></p>
                                        <p><b>Grau de Importância:</b> <?php echo $value->grauImportancia; ?></p>
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