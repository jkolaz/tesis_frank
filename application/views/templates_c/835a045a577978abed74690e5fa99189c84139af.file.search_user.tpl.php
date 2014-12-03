<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-03 07:30:12
         compiled from "application\views\templates\admin\search_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18398547eadf413f228-54422065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '835a045a577978abed74690e5fa99189c84139af' => 
    array (
      0 => 'application\\views\\templates\\admin\\search_user.tpl',
      1 => 1417577383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18398547eadf413f228-54422065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'menu' => 0,
    'usuario' => 0,
    'sub_menu' => 0,
    'BASE_URL' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547eadf4291964_56853561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eadf4291964_56853561')) {function content_547eadf4291964_56853561($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value;?>

            <div align="center">
                <div align="right">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/newUser">Crear Usuario</a>
                </div>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/listar">
                    <h2>Buscar Usuario</h2>
                    <fieldset>
                        <div class="control-group">
                            <label for="nick">Nick</label>
                            <div class="controls">
                                <input name="nick" id="nick" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="nombre">Nombre</label>
                            <div class="controls">
                                <input name="nombre" id="nombre" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="apellidos">Apellidos</label>
                            <div class="controls">
                                <input name="apellidos" id="apellidos" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="correo">Correo</label>
                            <div class="controls">
                                <input name="correo" id="correo" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="telefono">Telefono</label>
                            <div class="controls">
                                <input name="telefono" id="telefono" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <input class="btn btn-primary" value="Search" type="submit" />
                        </div>
                    </fieldset>
                </form>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </body>
</html><?php }} ?>
