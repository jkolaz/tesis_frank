<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-03 07:20:18
         compiled from "application\views\templates\admin\inc\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25332547eaba2523406-84882882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf4c6929caf32f12abfee148f7e2761a8ad6f377' => 
    array (
      0 => 'application\\views\\templates\\admin\\inc\\menu.tpl',
      1 => 1417495297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25332547eaba2523406-84882882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_home' => 0,
    'c_about' => 0,
    'login' => 0,
    'c_login_o' => 0,
    'c_contact' => 0,
    'c_login' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547eaba25a83e7_64301754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eaba25a83e7_64301754')) {function content_547eaba25a83e7_64301754($_smarty_tpl) {?><nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PANEL</a>
        </div>
        <div class="nav-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li <?php echo $_smarty_tpl->tpl_vars['c_home']->value;?>
><a href="#">Home</a></li>
                <li <?php echo $_smarty_tpl->tpl_vars['c_about']->value;?>
><a href="#">About</a></li>
                <?php if ($_smarty_tpl->tpl_vars['login']->value==1) {?>
                <li <?php echo $_smarty_tpl->tpl_vars['c_login_o']->value;?>
><a href="#">Panel</a></li>
                <?php }?>
                <li <?php echo $_smarty_tpl->tpl_vars['c_contact']->value;?>
><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="nav-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php echo $_smarty_tpl->tpl_vars['c_login']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav><?php }} ?>
