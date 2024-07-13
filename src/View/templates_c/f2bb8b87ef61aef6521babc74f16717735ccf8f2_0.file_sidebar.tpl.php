<?php
/* Smarty version 5.3.0, created on 2024-07-13 14:07:41
  from 'file:adminlte/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.0',
  'unifunc' => 'content_66926e0d6d7601_63956087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2bb8b87ef61aef6521babc74f16717735ccf8f2' => 
    array (
      0 => 'adminlte/sidebar.tpl',
      1 => 1720872419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66926e0d6d7601_63956087 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\test-smarty-php\\src\\View\\templates\\adminlte';
?><!-- Main Sidebar Container -->
<aside class="main-sidebar rounded m-3 sidebar-primary" style="background-color:#00B5AD; color: #ffffff;">
    <!-- Logo -->
    <div class="brand-link" style="display: flex; align-items: center; flex-direction: column; padding: 1rem;">
        <h1 class="brand-text" style="color: #ffffff; font-size: 1.75rem; font-weight: bold; margin: 0; font-family: cursive;">MediCore</h1>
        <h4 style="color: #ffffff; margin: 0; font-size: 0.95rem;">Hospital</h4>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" style="padding-top: 1rem;">
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color: #ffffff; padding: 10px; display: flex; align-items: center;">
                                <i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color: #ffffff; padding: 10px; display: flex; align-items: center;">
                                <i class="fas fa-user" style="margin-right: 10px;"></i>
                                <p>Patients Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color: #ffffff; padding: 10px; display: flex; align-items: center;">
                                <i class="fas fa-user-md" style="margin-right: 10px;"></i>
                                <p>Doctors Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color: #ffffff; padding: 10px; display: flex; align-items: center;">
                                <i class="fas fa-credit-card" style="margin-right: 10px;"></i>
                                <p>Payments Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color: #ffffff; padding: 10px; display: flex; align-items: center;">
                                <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i>
                                <p>E-Channeling</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!-- Include Font Awesome for icons -->
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
><?php }
}
