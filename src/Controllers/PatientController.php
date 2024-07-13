<?php

namespace Majid\TestSmartyPhp\Controllers;

use Majid\TestSmartyPhp\Config\DatabaseConnection;
use Majid\TestSmartyPhp\Model\Patient;

class PatientController
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = DatabaseConnection::getInstance();
    }

    /**
     * Crée un nouveau patient dans la base de données.
     *
     * @param Patient $patient Les données du patient à insérer.
     * @return int|null L'ID du dernier patient inséré ou null en cas d'erreur.
     * @throws \Exception Si des champs requis sont manquants.
     */
    public function create(Patient $patient)
    {
        // Validation simple des champs requis
        if (empty($patient->getFirstName() || $patient->getLastName() || $patient->getPhone())) {
            throw new \Exception("All fields are required.");
        }

        $sql = "INSERT INTO patients (first_name, last_name, phone, date, doctor, department, img_url) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute([
            $patient->getFirstName(),
            $patient->getLastName(),
            $patient->getPhone(),
            $patient->getDate(),
            $patient->getDoctor(),
            $patient->getDepartment(),
            $patient->getImage()
        ]);

        return $this->dbConnection->lastInsertId();
    }

    /**
     * Compte tous les patients dans la base de données.
     *
     * @return int Le nombre total de patients.
     */
    public function countAllPatients()
    {
        $sql = "SELECT COUNT(*) FROM patients";
        $stmt = $this->dbConnection->query($sql);
        return $stmt->fetchColumn();
    }

    /**
     * Récupère une liste paginée de patients.
     *
     * @param int $start Index de départ pour la pagination.
     * @param int $nbr_elements Nombre d'éléments par page.
     * @return array Tableau d'objets Patient.
     */
    public function getAllPatients($start, $nbr_elements)
    {
        $sql = "SELECT * FROM patients ORDER BY id DESC LIMIT ?, ?";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->bindParam(1, $start, \PDO::PARAM_INT);
        $stmt->bindParam(2, $nbr_elements, \PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $patients = [];
        foreach ($result as $item) {
            $patients[] = new Patient(
                $item['id'],
                $item['first_name'],
                $item['last_name'],
                $item['phone'],
                $item['date'],
                $item['doctor'],
                $item['department'],
                $item['img_url']
            );
        }

        return $patients;
    }

    /**
     * Récupère un patient par son ID.
     *
     * @param int $id ID du patient à récupérer.
     * @return Patient|null Objet Patient ou null si non trouvé.
     * @throws \Exception Si le patient n'est pas trouvé.
     */
    public function getPatientById($id)
    {
        $sql = "SELECT * FROM patients WHERE id = ?";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$result) {
            throw new \Exception("Patient not found");
        }

        return new Patient(
            $result['id'],
            $result['first_name'],
            $result['last_name'],
            $result['phone'],
            $result['date'],
            $result['doctor'],
            $result['department'],
            $result['img_url']
        );
    }

    /**
     * Met à jour les informations d'un patient existant.
     *
     * @param Patient $patient Les nouvelles données du patient.
     * @return void
     */
    public function update(Patient $patient)
    {
        $query =
            "UPDATE patients 
              SET first_name = ?, last_name = ?, phone = ?, date = ?, doctor = ?, department = ?, img_url = ? 
              WHERE id = ?";
        $stmt = $this->dbConnection->prepare($query);
        $stmt->execute([
            $patient->getFirstName(),
            $patient->getLastName(),
            $patient->getPhone(),
            $patient->getDate(),
            $patient->getDoctor(),
            $patient->getDepartment(),
            $patient->getImage(),
            $patient->getId()
        ]);
    }

    /**
     * Supprime un patient de la base de données par son ID.
     *
     * @param int $id ID du patient à supprimer.
     * @return bool True si la suppression réussit, sinon False.
     */
    public function delete(int $id)
    {
        $sql = "DELETE FROM patients WHERE id = ?";
        $stmt = $this->dbConnection->prepare($sql);

        return $stmt->execute([$id]);
    }
}
