<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuario),array('view','id'=>$data->idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPerfil')); ?>:</b>
	<?php echo CHtml::encode($data->idPerfil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataCadastro')); ?>:</b>
	<?php echo CHtml::encode($data->dataCadastro); ?>
	<br />


</div>