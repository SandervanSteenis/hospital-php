<?php
function getSpecie($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
} 