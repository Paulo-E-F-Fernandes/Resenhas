<!DOCTYPE html>
<html lang="pt">
	<head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="icon" href="../../favicon.ico">

                <title>Resenhas</title>

                <!-- Bootstrap -->
                <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
                <!-- Bootstrap theme -->
                <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet">
                <!--  -->
                <link href="<?php echo base_url() ?>css/resenhas.css" rel="stylesheet" type="text/css" media="screen"/>

                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
        </head>
        
	<body role="document">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><!-- navbar-toggle -->
					
					<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#2">
						<span class="glyphicon glyphicon-user"></span>
					</button><!-- navbar-toggle -->
					
					<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#3">
						<span class="glyphicon glyphicon-search"></span>
					</button><!-- navbar-toggle -->
					
					<a class="navbar-brand" href="#">Projeto 1 - v2</a>
				</div><!-- navbar-header -->
		   
				<div class="row">
					<!--Left Align-->
					<ul id="1" class="nav navbar-nav navbar-left navbar-collapse collapse">
						<li <?php echo $home_menu ?>>
                                                    <a href="<?php echo base_url(); ?>">Home</a>
						</li>
						 
						<li <?php echo $resenha_menu ?>>
							<a href="" target="">Resenhas</a>
						</li>
						
						<li <?php echo $autor_menu ?>>
							<a href="" >Autor</a>
						</li>
						
						<li <?php echo $produto_menu ?>>
							<a href="" >Produto</a>
						</li>
<!--						
						<li>
							<a href="index3_logado.html">Logado</a>
						</li>
-->
					</ul><!-- navbar-left -->
					
					<!--Right Align-->
					<ul class="nav navbar-nav navbar-right navbar-collapse collapse">
						<!-- Login/Logout -->
						<li>
							<a href="index3.html" class="navbar-link">Login!</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <span class="caret" /></a>
							<ul id="2" class="dropdown-menu">
								<li>
									<a href="#">Perfil</a>
								</li>
								<li>
									<a href="#">Histórico</a>
								</li>
								<li class="divider"></li><!-- Divisória -->
								<li>
									<a href="index3.html">Logout</a>
								</li>
							</ul>
						</li><!-- dropdown -->
					</ul>
					
				</div>
				
				<div class="row center-block">
                                        <div class="col-lg-3 col-md-2 col-sm-1"></div>
                                        <div class="col-lg-6 col-md-8 col-sm-10">
                                                <form id="3" role="search" class="navbar-collapse collapse" action="<?php echo base_url(); ?>index.php/resenhas/buscar" method="post">
                                                        <div class="input-group">
                                                            <input id="q" type="text" class="form-control" placeholder="Buscar resenhas por autor ou título do livro..." >
                                                                <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="submit">
                                                                                <span class="glyphicon glyphicon-search"></span>
                                                                        </button>
                                                                </span><!-- input-group-btn -->
                                                        </div><!-- input-group -->
                                                </form><!-- search -->
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-sm-1"></div>
				</div>
				
			</div><!-- container -->
		</nav><!-- navbar -->
	
		<!-- main content -->
                <div class="container" role="main">
                        <div class="container">
                                <?php $this->load->view($content, $data); ?>
                        </div>
                </div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
	</body>
        
        <!-- footer -->
        <footer>
                <nav id="footer" class="navbar navbar-default" role="navigation">
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-3 col-md-2 col-sm-1"></div>
                                        <div class="col-lg-6 col-md-8 col-sm-10">
                                                <p align="center" class="black">
                                                        <br>Página desenvovlida por Paulo Fernandes - Contato: <a href="mailto:paulo.e.f.fernandes@gmail.com">paulo.e.f.fernandes@gmail.com</a><br>
                                                        Copyright &copy; <?php echo '2015 - ' . date('Y'); ?><br>
                                                        Página renderizada em <strong>{elapsed_time}</strong> segundos
                                                </p>	
                                        </div><!-- col -->
                                        <div class="col-lg-3 col-md-2 col-sm-1"></div>
                                </div><!-- row -->
                        </div><!-- container -->
                </nav><!-- navbar -->
        </footer>
</html>