<?php
function getPatients($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
} 
// testing
function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
//testing
function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function createPatient() {
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$clients = isset($_POST['clients']) ? $_POST['clients'] : null;
	
	if (strlen($name) == 0 || strlen($gender) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($clients) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, clients_id) VALUES (:name, :species, :status, :clients)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':clients' => $clients));
	$db = null;
	
	return true;
}

function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}