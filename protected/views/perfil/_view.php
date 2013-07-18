<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('idPerfil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPerfil),array('view','id'=>$data->idPerfil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />


</div>