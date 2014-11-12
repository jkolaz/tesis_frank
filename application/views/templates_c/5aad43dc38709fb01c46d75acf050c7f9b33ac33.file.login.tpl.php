<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 06:08:54
         compiled from "application\views\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8605462d09c08a1f9-27758928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aad43dc38709fb01c46d75acf050c7f9b33ac33' => 
    array (
      0 => 'application\\views\\templates\\admin\\login.tpl',
      1 => 1415768918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8605462d09c08a1f9-27758928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5462d09c193690_25971186',
  'variables' => 
  array (
    'head' => 0,
    'menu' => 0,
    'BASE_URL' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462d09c193690_25971186')) {function content_5462d09c193690_25971186($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>Panel Administrador</h2>
                    </div>
                    <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin/start">
                        <fieldset>
                            <div class="form-group">
                                <label for="email">Username/Email</label>
                                <div class="controls">
                                    <input class="form-control" name="email" id="email" value="" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="controls">
                                    <input class="form-control" name="password" id="password" value="" type="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-large" value="Login" type="submit" />
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>¿No tienes una cuenta todavía?</h2>
                    </div>

                    <p>Crear una cuenta ofrece las siguientes ventajas:</p>
                    <ul>
                        <li>Crear, modificar y eliminar los desafios y/o examenes en línea </li>
                        <li>Adquirir conocimientos fundamentales sobre cómo su negocio está haciendo</li>
                        <li>Manténgase informado sobre su negocio las 24 horas al día, los 7 días a la semana</li>
                    </ul>
                    <div class="clearfix center">
                        <a class="btn btn-primary btn-large btn-success" href="/invo-master/register">registrarse</a>
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </body>
</html><?php }} ?>
