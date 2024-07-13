<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Majid\TestSmartyPhp\Controllers\PatientController;
use Smarty\Smarty;


$patientController = new PatientController();

// Définir les paramètres de pagination
$nbr_elements = 6;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $nbr_elements;


// Supprimer le patient
$success = false;
if (isset($_GET['id']) && $patientController->delete($_GET['id'])) {
    $success = true;
}

// Récupérer la liste mise à jour des patients après suppression
$patients = $patientController->getAllPatients($start, $nbr_elements);
$totalPatients = $patientController->countAllPatients();


// Assigner les variables à Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('View/templates');
$smarty->assign([
    'patients' => $patients,
    'totalPatients' => $totalPatients,
    'deleteSuccess' => $success
]);
$smarty->display('adminlte/dashboard.tpl');
