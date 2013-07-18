<?php
$this->breadcrumbs=array(
	'Hangouts'=>array('index'),
	$model->idHangouts=>array('view','id'=>$model->idHangouts),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Hangouts','url'=>array('index')),
	array('label'=>'Create Hangouts','url'=>array('create')),
	array('label'=>'View Hangouts','url'=>array('view','id'=>$model->idHangouts)),
	array('label'=>'Manage Hangouts','url'=>array('admin')),
	);
	?>

	<h1>Update Hangouts <?php echo $model->idHangouts; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>