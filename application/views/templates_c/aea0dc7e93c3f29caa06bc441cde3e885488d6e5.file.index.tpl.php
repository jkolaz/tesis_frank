<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 04:14:32
         compiled from "application\views\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281115462d093d8fce4-09875529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea0dc7e93c3f29caa06bc441cde3e885488d6e5' => 
    array (
      0 => 'application\\views\\templates\\admin\\index.tpl',
      1 => 1417490063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281115462d093d8fce4-09875529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5462d093e85462_58970705',
  'variables' => 
  array (
    'head' => 0,
    'menu' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462d093e85462_58970705')) {function content_5462d093e85462_58970705($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="container">
            <div class="page-header">
                <h2>PANEL DE ADMINISTRADOR</h2>
            </div>
            <p>
                This is a sample application for the <a target="_blank" href="https://www.facebook.com/frank.izrael.delarosa">FRANK DE LA ROSA</a>. We expect to implement as many features as possible to show how the framework works and its potential.
            Please write us if you have any feedback or comments. Feel free to clone the code of this application <a href="https://github.com/phalcon/invo">here</a>
            .Thanks!.
            </p>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </body>
</html><?php }} ?>
