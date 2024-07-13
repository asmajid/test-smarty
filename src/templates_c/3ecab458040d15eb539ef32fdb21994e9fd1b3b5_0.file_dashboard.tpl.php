<?php
/* Smarty version 5.3.0, created on 2024-07-13 21:05:16
  from 'file:adminlte/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.0',
  'unifunc' => 'content_6692cfec1e21e9_55709304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ecab458040d15eb539ef32fdb21994e9fd1b3b5' => 
    array (
      0 => 'adminlte/dashboard.tpl',
      1 => 1720894811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminlte/header.tpl' => 1,
    'file:adminlte/sidebar.tpl' => 1,
    'file:adminlte/content.tpl' => 1,
  ),
))) {
function content_6692cfec1e21e9_55709304 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\test-smarty-php\\src\\View\\templates\\adminlte';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCore Hospital</title>
</head>

<body>
    <div style="background-image: url('https://img.freepik.com/free-vector/clean-medical-background_53876-116875.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1720828800&semt=ais_user');
    background-size: cover; background-repeat: no-repeat;">
        <?php $_smarty_tpl->renderSubTemplate('file:adminlte/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate('file:adminlte/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate('file:adminlte/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>

</body>

</html><?php }
}
