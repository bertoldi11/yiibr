<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('idHangouts')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idHangouts),array('view','id'=>$data->idHangouts)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acontecendo')); ?>:</b>
	<?php echo CHtml::encode($data->acontecendo); ?>
	<br />


</div>