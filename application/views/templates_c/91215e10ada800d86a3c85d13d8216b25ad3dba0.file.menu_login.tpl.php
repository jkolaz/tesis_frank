<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-03 07:20:18
         compiled from "application\views\templates\admin\inc\menu_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29842547eaba26bfbe6-61203078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91215e10ada800d86a3c85d13d8216b25ad3dba0' => 
    array (
      0 => 'application\\views\\templates\\admin\\inc\\menu_login.tpl',
      1 => 1417576099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29842547eaba26bfbe6-61203078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active1' => 0,
    'BASE_URL' => 0,
    'active2' => 0,
    'active3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547eaba2726302_79716767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eaba2726302_79716767')) {function content_547eaba2726302_79716767($_smarty_tpl) {?><ul class="nav nav-tabs">
    <li class="<?php echo $_smarty_tpl->tpl_vars['active1']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin/panel">Administradores</a></li>
    <li class="<?php echo $_smarty_tpl->tpl_vars['active2']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/user/usuario">Usuarios</a></li>
    <li class="<?php echo $_smarty_tpl->tpl_vars['active3']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin/nivelExamen">Nivel Examen</a></li>
</ul><?php }} ?>
