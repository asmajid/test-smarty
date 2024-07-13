<?php
/* Smarty version 5.3.1, created on 2024-07-12 18:39:49
  from 'file:adminlte/content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66915c5570f6d2_28046251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90b1440c63abc9c7cdd007f37c2709393d846f7' => 
    array (
      0 => 'adminlte/content.tpl',
      1 => 1720802254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66915c5570f6d2_28046251 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\test-smarty-php\\View\\templates\\adminlte';
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 100vh;">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Healthcare</h1>
                    <h1 class="m-0">Management System</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Column for the table -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-2">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-group ">
                                        <span>
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <input type="search" class="form-control rounded" placeholder="Search here" aria-label="Search" aria-describedby="search-addon" />
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <span>
                                        <i class="fas fa-filter"></i>
                                    </span>
                                    Filtres
                                </div>
                                <div class="col-auto">
                                    <span>
                                        <i class="fas fa-download"></i>
                                    </span>
                                    Download
                                </div>
                                <div class="col-lg-auto ml-auto">
                                    Pagination
                                </div>
                            </div>
                        </div>

                        <!-- Include FontAwesome -->
                        <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <th>Doctor</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getId();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getFirstName();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getLastName();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getPhone();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getDate();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getDoctor();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')->getDepartment();?>
</td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Row for Cards -->
                    <div class="row mt-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fa-2x mr-3"></i>
                                    <div>
                                        <h5 class="card-title">Title</h5>
                                        <p class="card-text"> Subtitle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fa-2x mr-3"></i>
                                    <div>
                                        <h5 class="card-title">Title</h5>
                                        <p class="card-text">Subtitle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <i class="fa-2x mr-3"></i>
                                    <div>
                                        <h5 class="card-title">Title</h5>
                                        <p class="card-text">Subtitle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column for the table -->



                <!-- Column for the cards and doctors -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">140</h5>
                                    <p class="card-text">Total Appointments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('totalPatients');?>
</h5>
                                    <p class="card-text">Total</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">070</h5>
                                    <p class="card-text">Total Cancellation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">120</h5>
                                    <p class="card-text">Total Avg par Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section for Doctors -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Doctors</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Dr. Smith - Cardiology</li>
                                <li>Dr. Johnson - Neurology</li>
                                <li>Dr. Williams - Pediatrics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><?php }
}
