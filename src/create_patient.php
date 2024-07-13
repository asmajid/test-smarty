<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Majid\TestSmartyPhp\Controllers\PatientController;
use Majid\TestSmartyPhp\Model\Patient;
use Majid\TestSmartyPhp\FileUploader;

// Initialisation du contrôleur
$patientController = new PatientController();

// Traitement de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification et traitement du téléchargement de fichier
    $fileName = null;
    if (isset($_FILES['img_url'])) {
        $file = new FileUploader();
        $fileName = $file->upload($_FILES['img_url']);
    }

    // Création d'un nouvel objet Patient avec les données du formulaire
    $patient = new Patient(
        null,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['phone'],
        $_POST['date'],
        $_POST['doctor'],
        $_POST['department'],
        $fileName
    );

    // Appel de la méthode pour créer un patient dans le contrôleur
    $patientController->create($patient);

    // Redirection après création du patient
    header("Location: /test-smarty-php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Patient</title>
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Patient</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="img_url">Image</label>
                        <input type="file" class="form-control" id="img_url" name="img_url" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="doctor">Doctor</label>
                        <input type="text" class="form-control" id="doctor" name="doctor" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Patient</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>