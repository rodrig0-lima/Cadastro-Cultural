<h1>Editar Grupo</h1>

<?php

    echo $form->create('Group', array('action' => 'edit'));
    echo $form->input('name');
    echo $form->input('id', array('type'=>'hidden'));
    echo $form->end('Salvar Grupo');


 ?>