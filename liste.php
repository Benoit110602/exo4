<?php

if (($file = fopen("data.csv", "r")) !== FALSE) {
    echo "<table border='1'>";
    echo "<tr><th>Nom
    </th><th>Prénom
    </th><th>Âge
    </th><th>Ville
    </th></tr>";

while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
        foreach ($data as $r) {
            echo "<td>" . htmlspecialchars($r) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($file);
} else {
    echo "Aucune donnée disponible.";
}

?>