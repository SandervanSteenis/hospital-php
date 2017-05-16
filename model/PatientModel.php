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
