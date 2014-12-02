<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 06:18:08
         compiled from "application\views\templates\admin\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467547d39c5dd2030-37663071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda7d8be359bf2fd0f7f9bdc7ad0ac9d348d5591' => 
    array (
      0 => 'application\\views\\templates\\admin\\panel.tpl',
      1 => 1417497325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467547d39c5dd2030-37663071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547d39c61af159_53058831',
  'variables' => 
  array (
    'head' => 0,
    'menu' => 0,
    'usuario' => 0,
    'sub_menu' => 0,
    'titulo' => 0,
    'objAdmin' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d39c61af159_53058831')) {function content_547d39c61af159_53058831($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <scritp>
            
        </scritp>
        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value;?>

            <div align="center">
                <p>
                    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
                </p>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Apellidos</td>
                            <td>Nombre</td>
                            <td>Tipo Admin</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['admin'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['name'] = 'admin';
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objAdmin']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total']);
?>
                        <tr>
                            <td>51001</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]->apellido;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]->descripcion;?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['objAdmin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]->status==1) {?>
                                <td><a href="javascript:;"><span class="label label-success">Activado</span></a></td>
                            <?php } else { ?>
                                <td><a href="javascript:;"><span class="label label-important">Desactivado</span></a></td>
                            <?php }?>
                        </tr>
                        <?php endfor; endif; ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </body>
</html><?php }} ?>
