<?php

require_once __DIR__ . '/vendor/autoload.php';

use Majid\TestSmartyPhp\Controllers\PatientController;
use Smarty\Smarty;


$patientController = new PatientController();

$nbr_elements = 6;

// Pagination : Récupérer la page actuelle
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculer le point de départ pour la requête SQL
$start = ($page - 1) * $nbr_elements;

$patients = $patientController->getAllPatients($start, $nbr_elements);

// Récupérer le nombre total de patients
$total_patients = $patientController->countAllPatients();
if ($total_patients === false || $total_patients === null) $total_patients = 0;


// Calculer le nombre total de pages
$nbr_pages = ceil($total_patients / $nbr_elements);

// Récupérer les patients pour la page actuelle
$patients = $patientController->getAllPatients($start, $nbr_elements);

// Instanciation d'un objet Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('src/View/templates');
$smarty->setCompileDir('src/View/templates_c');

//Affichage des patients
$smarty->assign([
          'patients' => $patients,
          'totalPatients' => $total_patients,
          'nbrPages' => $nbr_pages,
          'currentPage' => $page
]);


$smarty->display('adminlte/dashboard.tpl');
