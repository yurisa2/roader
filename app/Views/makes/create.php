<?php

helper('form');

echo form_open('../public/Makes/create_make');


echo form_label('make_name','make_name',);
echo form_input('make_name','make_name',);

echo form_submit('submit','Create');
