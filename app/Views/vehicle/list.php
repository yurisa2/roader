<?= $this->extend('Templates/default')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

$table = new \CodeIgniter\View\Table();

// echo $title;



echo anchor('../public/vehicle/createForm', '<button class="btn btn-xs btn-success"><span class="bigger-110">Create Vehicle</span><i class="ace-icon fa fa-plus icon-on-right"></i></button>');


foreach ($tableData as $key => $value) {
  $tableData[$key]["delete"] = anchor("../public/vehicle/delete_vehicle/". $value['id'], '<button class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>') ;

}
// var_dump($tableData);


$tbHeading = [
	"id",
	"vehicleName",
	"registration",
	"make",
	"model",
	"kmInitial",
	"dateAdded",
  "Ops"
];


$table->setHeading($tbHeading);

$template = [
  'table_open' => '<table class="table  table-bordered table-hover">'
];

$table->setTemplate($template);
echo $table->generate($tableData);

 ?>
<?= $this->endSection() // ENCERRA A SECTION?>
