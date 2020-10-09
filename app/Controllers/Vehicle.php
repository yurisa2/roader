<?php


namespace App\Controllers;

use App\Models\VehicleModel;


class Vehicle extends BaseController
{


	public function index() { // This is the Read portion of the cRud

    $dataModel = new VehicleModel;

    $data['tableData'] = $dataModel->findAll();

    $data['title'] = "Vehicle Test";

    echo view('vehicle/list',$data);

	}

	public function form($id = 0) { // This is the Create portion of the Crud

		$dataModel = new VehicleModel;
		if($id != 0) $data['vehicleData'] = $dataModel->find($id);
		$data['id'] = $id;


		echo view('vehicle/form', $data);

	}

	public function create_vehicle() { // This is the Create portion of the Crud
		$dataModel = new VehicleModel;

		$formData = $this->request->getPost();

		// var_dump($formData); exit;

		$dataModel->createVehicle($formData);

		return redirect()->to(base_url('public/vehicle/index'));

	}

	public function delete_vehicle($id) { // This is the Create portion of the Crud
		$dataModel = new VehicleModel;

		$dataModel->delete($id);


		return redirect()->to(base_url('public/vehicle/index'));

	}

	//--------------------------------------------------------------------

}
