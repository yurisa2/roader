<?= $this->extend('Templates/default')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>


<?php

if($id == 0) {
	$vehicleName = '';
	$registration = '';
	$make = '';
	$model = '';
	$kmInitial = '';
	$dateAdded = '';
} else {
	$vehicleName = $vehicleData['vehicleName'];
	$registration = $vehicleData['registration'];
	$make = $vehicleData['make'];
	$model = $vehicleData['model'];
	$kmInitial = $vehicleData['kmInitial'];
	$dateAdded = $vehicleData['dateAdded'];
}

$classLabel = ['class' => "col-sm-3 control-label no-padding-right"];
$classInput = ['class' => "col-xs-10 col-sm-5"];

$formGroup = '<div class="form-group">';

helper('form');

echo form_open('../public/Vehicle/create_vehicle');

if($id > 0) echo form_hidden('id', $id);

// <div class="form-group">
// 										<label class= for="form-field-1"> Text Field </label>
//
// 										<div class="col-sm-9">
// 											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
// 										</div>
// 									</div>

echo $formGroup;
echo form_label('vehicleName','vehicleName', $classLabel);
echo form_input('vehicleName',$vehicleName,);
echo '</div>';

echo $formGroup;

echo form_label('registration','registration', $classLabel);
echo form_input('registration',$registration,);
echo '</div>';

echo $formGroup;

echo form_label('make','make', $classLabel);
echo form_input('make',$make,);
echo '</div>';

echo $formGroup;

echo form_label('model','model', $classLabel);
echo form_input('model',$model,);
echo '</div>';

echo $formGroup;

echo form_label('kmInitial','kmInitial', $classLabel);
echo form_input('kmInitial',$kmInitial,);
echo '</div>';

echo $formGroup;

echo form_label('dateAdded','dateAdded', $classLabel);
echo form_input('dateAdded',$dateAdded,);
echo '</div>';


echo  '<div class="form-actions center">
'. form_submit('submit', 'Save Vehicle!', ['class' => "btn btn-sm btn-success"]).'
<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
</div>';




?>
<?= $this->endSection() // ENCERRA A SECTION?>
