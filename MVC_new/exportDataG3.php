<?php 
// Load the database configuration file 
include_once 'dbConfig.php'; 
 
$filename = "PSI_Tab_Groupe_Individus_M2-MIAGE-APP" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 
// Set column headers 
$fields = array('Annee','Nom_Groupe','Nom_Individu','Prenom_Individu');

fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT id_annee,libelle, Nom, Prenom from Appartenir as a natural join Groupe as g join Individu as i where a.id_groupe = g.id_groupe and a.id_individu=i.id_individu and a.id_groupe=3"); 
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['id_annee'], $row['libelle'],$row['Nom'], $row['Prenom']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
} 
 
// Move back to beginning of file 
fseek($f, 0); 
 
// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
 
// Output all remaining data on a file pointer 
fpassthru($f); 
 
// Exit from file 
exit();