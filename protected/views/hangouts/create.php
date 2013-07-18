<?php
$this->breadcrumbs=array(
	'Hangouts'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Hangouts','url'=>array('index')),
array('label'=>'Manage Hangouts','url'=>array('admin')),
);
?>

<h1>Create Hangouts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>