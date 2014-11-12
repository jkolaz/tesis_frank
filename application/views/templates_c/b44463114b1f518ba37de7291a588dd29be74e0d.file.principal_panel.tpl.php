<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 03:43:15
         compiled from "application\views\templates\principal_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323025462c943ec83f2-13077429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44463114b1f518ba37de7291a588dd29be74e0d' => 
    array (
      0 => 'application\\views\\templates\\principal_panel.tpl',
      1 => 1415758119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323025462c943ec83f2-13077429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5462c944176488_67055577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462c944176488_67055577')) {function content_5462c944176488_67055577($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Quimkat</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/css.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top nave" role="navigation" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle color" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only color">Click</span>
            <span class="icon-bar color"></span>
            <span class="icon-bar color"></span>
            <span class="icon-bar color"></span>
          </button>
          <a class="navbar-brand" id="logo" href="front.php">Quimkat</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li>
                <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="color_blanco">
                      <span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="front.php">Panel de usuario</a></li>
                    <li><a href="mensajes.php">Mensajes</a></li>
                    <li><a href="#">Mi Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Editar Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/seguridad/validar/logout">Cerrar sesión</a>

                    </li>
                  </ul>
                </li>
            </li>
            <li>
                <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="color_blanco"><span class="glyphicon glyphicon-star-empty"></span> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Logros de usuario</a></li>
                    <li><a href="#">Fechas importantes</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Puntos</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Puntos requeridos por nivel</a></li>
                  </ul>
                </li>
            </li>
            <li>
                <li class="dropdown" > 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="color_blanco"> <span class="glyphicon glyphicon-fire" style="margin-right: 5px;"> </span>Mis Temas <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">% PROGRAMMING %</a></li> <!-- PROGRAMAR-->
                   
                    <li class="divider"></li>
                    <li><a href="#">Comenzar ahora</a></li>
                  </ul>
                </li>
            </li>
            <li><a href="#" id="color_blanco">Temas</a></li>
            <li><a href="#" id="color_blanco">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right">
           <span class="glyphicon glyphicon-search margen"></span> <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </div>

   <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="front.php"> <span class="glyphicon glyphicon-user margen"></span> Panel de usuario</a></li>
            <li><a href="mensajes.php"><span class="glyphicon glyphicon-envelope margen"></span> Mensajes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-check margen"></span>Mi Perfil</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-edit margen"></span>Editar mi Perfil</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#"><span class="glyphicon glyphicon-star-empty margen"></span>Logros de usuario</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt margen"></span>Fechas Importantes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-ok-sign margen"></span>Puntos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-question-sign margen"></span>Puntos requeridos</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#"><span class="glyphicon glyphicon-fire margen"></span>Mis Temas</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog margen"></span>Comenzar ahora</a></li>
            
          </ul>

          <ul class="nav nav-sidebar">
            <li><a href="#"><span class="glyphicon glyphicon-pencil margen"></span>Temas</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-leaf margen"></span>Ayuda</a></li>
            
            
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" id="logo2">Quimkat</h1>
                       <div class="row">
                        <div class="col-sm-6 col-md-8 letra_ubuntu">
                          
                         <h3>No estás inscrito en ningún tema actualmente. ¿Qué esperas?</h3>


                         <p><a href="#"><button type="button" class="btn btn-primary boton_force"><h3>Elige uno ahora </h3> </button></a> </p>
                                <h3>Temas en progreso</h3>

                                <p><a href="#"><button type="button" class="btn btn-info boton_force"><h3>Clasificando el Mundo Material</h3> </button></a> </p>
                                <p><a href="#"><button type="button" class="btn btn-success boton_force"><h3>Una enorme cantidad de átomos</h3> </button></a> </p>
                                <p><a href="#"><button type="button" class="btn btn-warning boton_force"><h3>Descomposición y representación</h3> </button></a> </p>
                                <p><a href="#"><button type="button" class="btn btn-danger boton_force"><h3>Los Enlaces Químicos, la leyenda del 8</h3> </button></a> </p>
                                <p><a href="#"><button type="button" class="btn btn-primary boton_force"><h3>Los Enlaces Químicos, Formas Espectrales</h3> </button></a> </p>
                             
                         </div>
                         <div class="col-sm-6 col-md-4 letra_ubuntu contenido_1">
                               <h1 class="menos_nitido">Logros recientes</h1>
                                <ul class="list-unstyled">
                                <li><h4><a href="#" class="cero_efectos"><span class="glyphicon glyphicon-star-empty"></span>Materia mía, solo mía</a></h4></li>
                                <li><h4><a href="#" class="cero_efectos"><span class="glyphicon glyphicon-star-empty"></span>Mezcla nuevos amigos</a></h4></li>
                                <li><h4><a href="#" class="cero_efectos"><span class="glyphicon glyphicon-star-empty"></span>El Ordenador Inmaterial</a></h4></li>
                                <li><h4><a href="#" class="cero_efectos"><span class="glyphicon glyphicon-star-empty"></span>Veloz, muy veloz</a></h4></li>
                                <li><h4><a href="#" class="cero_efectos"><span class="glyphicon glyphicon-star-empty"></span>Metales en mi cuenta!</a></h4></li>
                                </ul>
                             
                         </div>
                        </div>
                        
                      </div>
                   
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/docs.min.js"><?php echo '</script'; ?>
>
  </body>
</html>

                            <?php }} ?>
