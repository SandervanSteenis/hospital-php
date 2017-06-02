<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("patient/index", array(
		'patients' => getAllPatients(),
		'clients' => getAllClients(),
 		'species' => getAllSpecies()
	));
}


function create()
{
	render("patient/create");
}


function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}


function edit($id)
{
	render("patient/edit", array(
		'patient' => getPatient($id)
	));
}


function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
} 


function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}