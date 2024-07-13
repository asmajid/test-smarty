<!-- Ce fichier README fournit une vue d'ensemble de votre projet, y compris sa structure, les prérequis -->

# Projet de Gestion des Patients "test_smarty"

Ce projet consiste à la création d'un module de gestion des patients utilisant le modèle MVC. Il permet de créer, lire, mettre à jour et supprimer (CRUD) des informations des patients. Le projet est développé en PHP en utilisant la programmation orientée objet (POO) et le design pattern Singleton pour la connexion à la base de données. L'interface utilisateur utilise AdminLTE et Bootstrap 5, et les templates sont gérés avec Smarty.

## Structure du Projet

- **MVC** : Le projet suit le modèle MVC (Modèle-Vue-Contrôleur) pour séparer les préoccupations.
- **POO** : La programmation orientée objet est utilisée pour organiser le code.
- **Singleton** : Le pattern Singleton est utilisé pour la connexion à la base de données via la classe `src/Config/DatabaseConnection`.
- **FileUploader** : Une classe dédiée à la gestion du téléchargement des images des patients.
- **AdminLTE** : Utilisé pour le thème et l'interface utilisateur.
- **Bootstrap 5** : Utilisé pour le style et la mise en page.
- **Smarty** : Utilisé pour la gestion des templates.

## Prérequis

- PHP 7.4 ou supérieur
- MySQL
- Composer

## Installation

1. Clonez le dépôt :
   `git clone https://github.com/asmajid/test-smarty.git`
   cd patient-management

2. Installez les dépendances via Composer :
   `composer install`

3. Créez une base de données MySQL et importez le schéma :
   `CREATE DATABASE patient_management_db`;
   puis importez le fichier SQL fourni dans le fichier `sql/patients.sql` dans votre base de données

4. Configurez la connexion à la base de données dans `Config/DatabaseConnection.php`, exemple : private const HOST = 'localhost';
   private const DB = 'patient_management_db';
   private const USER = 'root';
   private const PASSWORD = '';

5. Configurez le serveur web pour pointer vers le répertoire public.
