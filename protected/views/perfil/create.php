<?php
$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Perfil','url'=>array('index')),
array('label'=>'Manage Perfil','url'=>array('admin')),
);
?>

<h1>Create Perfil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>