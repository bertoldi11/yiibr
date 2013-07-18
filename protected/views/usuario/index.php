<?php
$this->breadcrumbs=array(
	'Usuarios',
);
?>

<h1>Usuários</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br><hr><br>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped',
	'template'=>"{items}",
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('name'=> 'idUsuario', 'header'=>'Código'),
		array('name'=> 'idPerfil0.nome', 'header'=>'Perfil'),
		array('name'=> 'nome', 'header'=>'Nome'),
		array('name'=> 'email', 'header'=>'Email'),
		array('name'=> 'dataCadastro', 'header'=>'Data do Cadastro'),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'updateButtonUrl'=>'Yii::app()->createUrl("usuario/alterar", array("id"=>"$data->idUsuario"))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("usuario/delete", array("id"=>"$data->idUsuario"))',
		)
	),
));?>