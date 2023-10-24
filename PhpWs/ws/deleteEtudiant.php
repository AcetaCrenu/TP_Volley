<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $es = new EtudiantService();
        $es->deleteEtudiantApi($id);
        echo json_encode(array('message' => 'Etudiant supprimé avec succès'));
    } else {
        echo json_encode(array('message' => 'ID de l\'étudiant non spécifié'));
    }
}
?>

