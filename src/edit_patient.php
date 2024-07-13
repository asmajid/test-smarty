<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Majid\TestSmartyPhp\Controllers\PatientController;
use Majid\TestSmartyPhp\FileUploader;


$patientController = new PatientController();

$patient = null;

if (isset($_GET['id'])) {
    $patient = $patientController->getPatientById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileName = '';
    // Vérifier si un fichier a été correctement téléchargé
    if (isset($_FILES['img_url'])) {
        $file = new FileUploader();
        $fileName = $file->upload($_FILES['img_url']);
    } else {
        // Utiliser l'image existante si aucun nouveau fichier n'a été téléchargé
        $fileName = $patient->getImage();
    }

    // Mettre à jour les champs du patient
    $patient->setFirstName($_POST['first_name']);
    $patient->setLastName($_POST['last_name']);
    $patient->setPhone($_POST['phone']);
    $patient->setDate($_POST['date']);
    $patient->setDoctor($_POST['doctor']);
    $patient->setDepartment($_POST['department']);
    $patient->setImage($fileName);

    $patientController->update($patient);

    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class=" card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Patient</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="img_url">Image</label>
                        <input type="file" class="form-control" id="img_url" name="img_url" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($patient->getFirstName()); ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($patient->getLastName()); ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($patient->getPhone()); ?>">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($patient->getDate()); ?>">
                    </div>
                    <div class="form-group">
                        <label for="doctor">Doctor</label>
                        <input type="text" class="form-control" id="doctor" name="doctor" value="<?php echo htmlspecialchars($patient->getDoctor()); ?>">
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="<?php echo htmlspecialchars($patient->getDepartment()); ?>">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Patient</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>