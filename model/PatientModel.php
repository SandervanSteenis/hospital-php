<?php
function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}

function getPatientsWithSpeciesDescription()
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM patients INNER JOIN species ON patients.species_id = species.species_id JOIN clients ON patients.client_id = clients.client_id ORDER BY patient_id";
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

function createPatient() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$clients = isset($_POST['clients']) ? $_POST['clients'] : null;
	
	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($clients) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, client_id) VALUES (:name, :species, :status, :clients)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':clients' => $clients));
	$db = null;
	
	return true;
}

function editPatient() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$clients = isset($_POST['clients']) ? $_POST['clients'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($clients) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET patient_name = :name, species_id = :species, patient_status = :status, client_id = :clients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':clients' => $clients,
		':id' => $id
		));
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
