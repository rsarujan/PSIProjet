<?php
// Load the database configuration file
require_once 'view_begin.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $nom   = $line[0];
                $prenom   = $line[1];
                $email  = $line[2];
                $num   = $line[3];
                $annuaire  = $line[4];
                $statut = $line[5];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id_individu FROM Individu WHERE num = '".$line[3]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $db->query("UPDATE Individu SET Nom = '".$nom."', Prenom = '".$prenom."', email = '".$email."', id_annuaire = '".$annuaire."', id_statut = '".$statut."', WHERE num = '".$num."'");
                }else{
                    // Insert member data in the database
                    $db->query("INSERT INTO Individu (Nom,Prenom,email,num,id_annuaire,id_statut) VALUES ('".$nom."', '".$prenom."', '".$email."', '".$num."', '".$annuaire."','".$statut."')");
                }
            }
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: index.php".$qstring);