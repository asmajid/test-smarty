<?php
/* Smarty version 5.3.1, created on 2024-07-12 18:39:49
  from 'file:adminlte/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66915c556cb250_25237303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c928046a06e1658c70a9828959e6a7d190d5da14' => 
    array (
      0 => 'adminlte/dashboard.tpl',
      1 => 1720802372,
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
function content_66915c556cb250_25237303 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\test-smarty-php\\View\\templates\\adminlte';
$_smarty_tpl->renderSubTemplate('file:adminlte/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:adminlte/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:adminlte/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
