<?php 
// Load the database configuration file 
include_once 'dbConfig.php'; 
 
$filename = "PSI_Tab_Individus_" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 
// Set column headers 
$fields = array('Id_Individu','Nom','Prenom', 'Email', 'Numero', 'Id_Annuaire', 'Id_Statut');

fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM Individu ORDER BY id_individu ASC"); 
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['id_individu'], $row['Nom'],$row['Prenom'], $row['email'], $row['num'], $row['id_annuaire'], $row['id_statut']); 
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