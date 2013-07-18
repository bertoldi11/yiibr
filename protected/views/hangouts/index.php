<?php
$this->breadcrumbs=array(
	'Hangouts',
);

?>

<h1>Hangouts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br><hr><br>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped',
	'template'=>"{items}",
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('name'=> 'idHangouts', 'header'=>'Código'),
		array('name'=> 'titulo', 'header'=>'Título'),
		array('name'=> 'url', 'header'=>'URL'),
		array('name'=> 'youtube', 'header'=>'Link Youtube'),
		array('name'=> 'acontecendo', 'header'=>'Acontecendo',  'value'=>'($data->acontecendo == "S") ? "Sim" : "Não";'),
		array('name'=> 'idUsuario0.nome', 'header'=>'Usuário',),
		array('name'=> 'dataCadastro', 'header'=>'Cadastro',),
		array('name'=> 'dataHangout', 'header'=>'Hangout',),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'updateButtonUrl'=>'Yii::app()->createUrl("hangouts/alterar", array("id"=>"$data->idHangouts"))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("hangouts/delete", array("id"=>"$data->idHangouts"))',
		)
	),
));?>
