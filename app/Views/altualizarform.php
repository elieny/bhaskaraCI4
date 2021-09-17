<?php
helper('form');

echo form_open('bhaskara/Inserir');

echo '<br>';
echo '<br>';
echo '<br>';
echo form_label('Digite o valor de A ', 'valorA');
echo form_input('a', '');
echo form_label('Digite o valor de B ', 'valorB');
echo form_input('b', '');
echo form_label('Digite o valor de C ', 'valorC');
echo form_input('c', '');

echo form_submit('mysubmit', 'Nova Soma');

 

echo form_close();