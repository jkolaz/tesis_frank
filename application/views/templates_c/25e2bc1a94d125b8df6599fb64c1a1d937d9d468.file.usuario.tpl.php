<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-03 07:30:15
         compiled from "application\views\templates\admin\usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28095547eadf71b81f4-83185461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e2bc1a94d125b8df6599fb64c1a1d937d9d468' => 
    array (
      0 => 'application\\views\\templates\\admin\\usuario.tpl',
      1 => 1417580743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28095547eadf71b81f4-83185461',
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
    'objUser' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547eadf73ba476_02229968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eadf73ba476_02229968')) {function content_547eadf73ba476_02229968($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value;?>

            <div align="center">
                <ul class="pager">
                    <li class="previous pull-left">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/usuario">&larr; Regresar</a>
                    </li>
                    <li class="pull-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/newUser">Crear Usuario</a>
                    </li>
                </ul>
                <table class="table table-bordered table-striped" align="center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objUser']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['user']['index']+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->apellidos;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->nombre;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->user;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->correo;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->telefono;?>
</td>
                            <td width="7%">
                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/edit/<?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->id;?>
"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                            </td>
                            <td width="7%">
                                <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/delete/<?php echo $_smarty_tpl->tpl_vars['objUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]->id;?>
"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                            </td>
                        </tr>
                        <?php endfor; endif; ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="8" align="right">
                                <div class="btn-group">
                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/listar">
                                        <i class="icon-fast-backward"></i> Primera</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-step-backward"></i> Ant.</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-step-forward"></i> Sig.</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-fast-forward"></i> Ultima</a>
                                    <span class="help-inline">1/1</span>
                                </div>
                            </td>
                        </tr>
                    <tbody>
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
