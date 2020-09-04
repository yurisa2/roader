<?php

// var_dump($titulo);
// var_dump($tabela);

$table = new \CodeIgniter\View\Table();

echo $title;

echo anchor('../public/vehicle/createForm', 'Create Vehicle');


echo $table->generate($tableData);


 ?>
