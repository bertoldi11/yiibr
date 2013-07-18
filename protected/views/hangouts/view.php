<?php
$this->breadcrumbs=array(
	'Hangouts'=>array('index'),
	$model->idHangouts,
);

$this->menu=array(
array('label'=>'List Hangouts','url'=>array('index')),
array('label'=>'Create Hangouts','url'=>array('create')),
array('label'=>'Update Hangouts','url'=>array('update','id'=>$model->idHangouts)),
array('label'=>'Delete Hangouts','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idHangouts),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Hangouts','url'=>array('admin')),
);
?>

<h1>View Hangouts #<?php echo $model->idHangouts; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'idHangouts',
		'idUsuario',
		'url',
		'acontecendo',
),
)); ?>
