<?php
//Exercice 1
require('formulaire.html');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $ville = htmlspecialchars($_POST['ville']);

    $data = "Nom: $nom, Prénom: $prenom, Âge: $age, Ville: $ville";

    file_put_contents("data.txt", $data,);

    echo "Informations enregistrées";
}

//Exercice 2

$file = fopen('data.csv','a');
$array = [
    ['Frechet','Benoit','22 ans','Vieilles-Maisons-sur-Joudry']
];
foreach($array as $a){
    fputcsv($file,$a,';');
}
fclose($file);

//Exercice 3 
?>