<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous de récupérer les données envoyées par la requête POST
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['id']) && isset($data['nom']) && isset($data['prenom']) && isset($data['ville']) && isset($data['sexe'])) {
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $ville = $data['ville'];
        $sexe = $data['sexe'];

        $es = new EtudiantService();
        $es->updateEtudiantApi($id, $nom, $prenom, $ville, $sexe);

        echo json_encode(array('message' => 'Etudiant mis à jour avec succès'));
    } else {
        echo json_encode(array('message' => 'Données insuffisantes pour la mise à jour de l\'étudiant'));
    }
}
?>
