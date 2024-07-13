<?php
/* Smarty version 5.3.0, created on 2024-07-13 21:05:16
  from 'file:adminlte/content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.0',
  'unifunc' => 'content_6692cfec364a65_68451268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41bb2bd5c3837e2323267df9371f3b2b614be05' => 
    array (
      0 => 'adminlte/content.tpl',
      1 => 1720893840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6692cfec364a65_68451268 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\test-smarty-php\\src\\View\\templates\\adminlte';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap');
    </style>
</head>

<body>
    <div style="margin-left:300px;" class="">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="container mt-2 ml-4">
                        <h1 class="healthcare-title"><span style="font-family: 'Roboto', 
                        sans-serif; font-weight: 700; color: #26beb6;">Healthcare</span>
                        </h1>

                        <h1 style="font-weight: 700; font-family: 'Roboto', 
                        sans-serif, sans-serif; color: #343a40;">Management System</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Column for the table -->
                    <?php if ($_smarty_tpl->getValue('deleteSuccess')) {?>
                    <div class="container mt-1">
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div class="alert alert-success text-center" role="alert">
                                    Patient successfully deleted !
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo '<script'; ?>
>
                        setTimeout(() => {
                            window.location = "http://localhost/test-smarty-php/";
                        }, "3000");
                    <?php echo '</script'; ?>
>
                    <?php }?>

                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <a href="src/create_patient.php" class="btn btn-success">Create New Patient</a>
                                </div>
                                <div>
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <?php if ($_smarty_tpl->getValue('nbrPages') > 1) {?>
                                            <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>
                                            <li class="page-item">
                                                <a class="page-link" href="?page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <?php }?>

                                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('nbrPages')+1 - (1) : 1-($_smarty_tpl->getValue('nbrPages'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                            <li class="page-item <?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('currentPage')) {?>active<?php }?>">
                                                <a class="page-link" href="?page=<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</a>
                                            </li>
                                            <?php }
}
?>

                                            <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('nbrPages')) {?> <li class="page-item">
                                                <a class="page-link" href="?page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                                </li>
                                                <?php }?>
                                                <?php }?>
                                        </ul>


                                    </nav>
                                </div>
                            </div>


                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>NAME</th>
                                            <th>MOB</th>
                                            <th>DATE</th>
                                            <th>DOCTOR</th>
                                            <th>DEPARTMENT</th>
                                            <th>ACTIONS</th>
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
                                            <td><img src="http://localhost/test-smarty-php/src/test-img/<?php echo $_smarty_tpl->getValue('patient')->getImage();?>
" alt="" style="width: 50px; height:50px;"></td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')->getFullName();?>
</td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')->getPhone();?>
</td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')->getDate();?>
</td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')->getDoctor();?>
</td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')->getDepartment();?>
</td>
                                            <td>
                                                <a href="src/edit_patient.php?id=<?php echo $_smarty_tpl->getValue('patient')->getId();?>
" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="src/delete_patient.php?id=<?php echo $_smarty_tpl->getValue('patient')->getId();?>
" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this patient?');">Delete</a>
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
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center; background-color:#d3f3f2;">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="https://cdn-icons-png.freepik.com/256/16709/16709627.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="rounded-circle mr-3" style="width: 50px; height: 50px;" alt="Image 1">
                                        <div>
                                            <p style="font-size: 0.5rem;" class="card-text mb-0">ADMIT NEW</p>
                                            <h4 style="font-weight:800 ;" class="card-title mb-1">PATIENT</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card" style=" border-radius: 10px; border: 1px solid #e0e0e0; text-align: center; background-color:#def2ea;">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="https://cdn-icons-png.freepik.com/256/756/756684.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="rounded-circle mr-3" style="width: 50px; height: 50px;" alt="Image 2">
                                        <div>
                                            <p style="font-size: 0.5rem;" class="card-text mb-0">EMERGENCY</p>
                                            <h4 style="font-weight:800 ;" class="card-title mb-1">ROOM</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center; background-color:#dee2f2;">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="https://cdn-icons-png.freepik.com/256/7095/7095382.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="rounded-circle mr-3" style="width: 50px; height: 50px;" alt="Image 3">
                                        <div>
                                            <p style="font-size: 0.5rem;" class="card-text mb-0">PHARMACY</p>
                                            <h4 style="font-weight: 800;" class="card-title mb-1">DETAILS</h4>
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
                            <div class="col-md-6">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center;">
                                    <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
                                        <span class="bg-color d-flex justify-content-center align-items-center" style="background-color: #53cbc6; color: white; padding: 8px; border-radius: 50%; width: 50px; height: 50px;">
                                            <img src="https://cdn-icons-png.freepik.com/256/16305/16305229.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="" alt="Image description" style="width: 30px; height: 30px;">
                                        </span>
                                        <div class="ml-4">
                                            <h5 class="card-title" style="font-size: 2rem; font-weight: bold; margin: 0;">140</h5>
                                            <p class="card-text" style="font-size: 1rem; color: #6c757d; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Total Appointments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center;">
                                    <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
                                        <span class="bg-color d-flex justify-content-center align-items-center" style="background-color: #53cbc6; color: white; padding: 8px; border-radius: 50%; width: 50px; height: 50px;">
                                            <img src="https://cdn-icons-png.freepik.com/256/17048/17048009.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="" alt="Image description" style="width: 30px; height: 30px;">
                                        </span>
                                        <div class="ml-4">
                                            <h5 class="card-title" style="font-size: 2rem; font-weight: bold; margin: 0;"><?php echo $_smarty_tpl->getValue('totalPatients');?>
</h5>
                                            <p class="card-text" style="font-size: 1rem; color: #6c757d; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Total Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center;">
                                    <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
                                        <span class="bg-color d-flex justify-content-center align-items-center" style="background-color: #53cbc6; color: white; padding: 8px; border-radius: 50%; width: 50px; height: 50px;">
                                            <img src="https://cdn-icons-png.freepik.com/256/2312/2312464.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="" alt="Image description" style="width: 30px; height: 30px;">
                                        </span>
                                        <div class="ml-4">
                                            <h5 class="card-title" style="font-size: 2rem; font-weight: bold; margin: 0;">070</h5>
                                            <p class="card-text" style="font-size: 1rem; color: #6c757d; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Total Cancellation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card" style="border-radius: 10px; border: 1px solid #e0e0e0; text-align: center;">
                                    <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
                                        <span class="bg-color d-flex justify-content-center align-items-center" style="background-color: #53cbc6; color: white; padding: 8px; border-radius: 50%; width: 50px; height: 50px;">
                                            <img src="https://cdn-icons-png.freepik.com/256/151/151380.png?ga=GA1.1.651832973.1720820656&semt=ais_hybrid" class="" alt="Image description" style="width: 30px; height: 30px;">
                                        </span>
                                        <div class="ml-4">
                                            <h5 class="card-title" style="font-size: 2rem; font-weight: bold; margin: 0;">120</h5>
                                            <p class="card-text" style="font-size: 1rem; color: #6c757d; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Total Avg per Doctor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Section for Doctors -->
                        <div class="card">
                            <div class="card-body">
                                <h3 style="font-weight: bold;  color: #343a40;">Available Doctors</h3>
                                <div class="form-group">
                                    <input type="text" style=" border-radius: 10px; padding: 10px 20px;" class="form-control" placeholder="Search here">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/3376799/pexels-photo-3376799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Dr. Jennifer Roberts" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">Dr. Jennifer Roberts</p>
                                        <p style="color: #6c757d;">Pediatrics (A-9987)</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/5407206/pexels-photo-5407206.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Dr. Michael Sullivan" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">DR. Thomas Lefevre </p>
                                        <p style="color: #6c757d;">Radiologie (A-945)</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/4033148/pexels-photo-4033148.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Dr. Michael Sullivan" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">Dr. Émilie Leclerc </p>
                                        <p style="color: #6c757d;">Pédiatrie (A-945)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Dr. Jennifer Roberts" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">DR. François Girard </p>
                                        <p style="color: #6c757d;">Cardiologie (A-9987)</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/5327656/pexels-photo-5327656.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Dr. Michael Sullivan" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">Dr. Lucas Rousseau </p>
                                        <p style="color: #6c757d;">Urgences (A-945)</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-4">
                                        <img src="https://images.pexels.com/photos/4769130/pexels-photo-4769130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Dr. Michael Sullivan" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #00B5AD; margin-bottom: 10px;" class="rounded-circle">
                                        <p style="color: #00B5AD; font-weight: bold; margin-bottom: 0;">Dr. Alice Bernard</p>
                                        <p style="color: #6c757d;">Gynécologie-obstétrique (A-9645)</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html><?php }
}
