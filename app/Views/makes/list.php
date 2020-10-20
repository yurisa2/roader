<?= $this->extend('Templates/default')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>



<?php



$table = new \CodeIgniter\View\Table();


$template = [
  'table_open' => '<table class="table  table-bordered table-hover">'
];

$tbHeading = [
  "id",
	"make_name",
	"created_at",
	"updated_at",
	"deleted_at",
];


$table->setHeading($tbHeading);


$table->setTemplate($template);


echo $title;

echo $table->generate($tableData);

 ?>


 <?= $this->endSection() // ENCERRA A SECTION?>
