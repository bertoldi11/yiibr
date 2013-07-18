<?php
$this->breadcrumbs=array(
	'Perfil',
);
?>

<h1>Perfil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br><hr><br>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped',
	'template'=>"{items}",
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('name'=> 'idPerfil', 'header'=>'Código'),
		array('name'=> 'nome', 'header'=>'Nome'),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'updateButtonUrl'=>'Yii::app()->createUrl("perfil/alterar", array("id"=>"$data->idPerfil"))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("perfil/delete", array("id"=>"$data->idPerfil"))',
		)
	),
));?>
