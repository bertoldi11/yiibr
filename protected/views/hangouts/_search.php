<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'idHangouts',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'idUsuario',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>150)); ?>

		<?php echo $form->textFieldRow($model,'acontecendo',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>