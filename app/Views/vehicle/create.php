<?php

helper('form');

echo form_open('../public/Vehicle/create_vehicle');


echo form_label('vehicleName','vehicleName',);
echo form_input('vehicleName','vehicleName',);
echo '<br>';
echo form_label('registration','registration',);
echo form_input('registration','registration',);
echo '<br>';
echo form_label('make','make',);
echo form_input('make','make',);
echo '<br>';
echo form_label('model','model',);
echo form_input('model','model',);
echo '<br>';
echo form_label('kmInitial','kmInitial',);
echo form_input('kmInitial','kmInitial',);
echo '<br>';
echo form_label('dateAdded','dateAdded',);
echo form_input('dateAdded','dateAdded',);
echo '<br>';




echo form_submit('submit', 'Save Vehicle!');





 ?>
