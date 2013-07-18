<?php
$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->idPerfil,
);

$this->menu=array(
array('label'=>'List Perfil','url'=>array('index')),
array('label'=>'Create Perfil','url'=>array('create')),
array('label'=>'Update Perfil','url'=>array('update','id'=>$model->idPerfil)),
array('label'=>'Delete Perfil','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idPerfil),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Perfil','url'=>array('admin')),
);
?>

<h1>View Perfil #<?php echo $model->idPerfil; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'idPerfil',
		'nome',
),
)); ?>
