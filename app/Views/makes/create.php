<?= $this->extend('Templates/default')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

helper('form');

echo form_open('../public/Makes/create_make');


echo form_label('make_name','make_name',);
echo form_input('make_name','make_name',);

echo form_submit('submit','Create');

?>

<?= $this->endSection() // ENCERRA A SECTION?>
