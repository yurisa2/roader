<?php


namespace App\Controllers;

use App\Models\VehicleModel;


class Vehicle extends BaseController
{


	public function list() { // This is the Read portion of the cRud

    $dataModel = new VehicleModel;

    $data['tableData'] = $dataModel->findAll();

    $data['title'] = "Vehicle Test";

    echo view('vehicle/list',$data);

	}

	public function createForm() { // This is the Create portion of the Crud

		echo view('vehicle/create');

	}

	public function create_vehicle() { // This is the Create portion of the Crud
		$dataModel = new VehicleModel;

		$formData = $this->request->getPost();

		$dataModel->createVehicle($formData);

		return redirect()->to(base_url('public/vehicle/list'));

	}

	public function delete_vehicle($id) { // This is the Create portion of the Crud
		$dataModel = new VehicleModel;

		$dataModel->delete($id);


		return redirect()->to(base_url('public/vehicle/list'));

	}

	//--------------------------------------------------------------------

}
