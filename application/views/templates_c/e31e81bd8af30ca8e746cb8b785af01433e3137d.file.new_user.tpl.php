<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-03 07:30:00
         compiled from "application\views\templates\admin\new_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20067547eaba27a91d7-06826221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31e81bd8af30ca8e746cb8b785af01433e3137d' => 
    array (
      0 => 'application\\views\\templates\\admin\\new_user.tpl',
      1 => 1417588196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20067547eaba27a91d7-06826221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547eaba282ce22_68422953',
  'variables' => 
  array (
    'head' => 0,
    'menu' => 0,
    'usuario' => 0,
    'procesar' => 0,
    'campo' => 0,
    'sub_menu' => 0,
    'BASE_URL' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eaba282ce22_68422953')) {function content_547eaba282ce22_68422953($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['procesar']->value>0) {?>
            <div class="alert alert-danger">Insertar el <?php echo $_smarty_tpl->tpl_vars['campo']->value;?>
</div>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value;?>

            <div align="center">
                <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/agregar">
                    <ul class="pager">
                        <li class="previous pull-left">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/usuario">&larr; Regresar</a>
                        </li>
                        <li class="pull-right">
                            <input class="btn btn-success" value="Guardar" type="submit" />
                        </li>
                    </ul>
                    <h2>Agregar Usuario</h2>
                    <fieldset>
                        <input value="2" name="id" id="id" type="hidden" />
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <div class="controls">
                                <input value="" name="nombre" id="nombre" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <div class="controls">
                                <input value="" name="apellidos" id="apellidos" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <div class="controls">
                                <input value="" name="usuario" id="usuario" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <div class="controls">
                                <input value="" name="correo" id="correo" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="clave">Password</label>
                            <div class="controls">
                                <input value="" name="clave" id="clave" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <div class="controls">
                                <input value="" name="telefono" id="correo" type="text" />
                            </div>
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
