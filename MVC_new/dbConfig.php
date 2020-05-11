<?php
// Configuration de la base de données
$dbHost      =  "localhost" ;
$dbUsername  =  "root" ;
$dbPassword  =  "root" ;
$dbName      =  "PSI" ;

// Créer une connexion à la base de données
$db  = new  mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Vérifier la connexion
if( $db ->connect_error )
{
	die ("Échec de la connexion:".$db ->connect_error);
}

?>