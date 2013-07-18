<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'hangouts-form',
	'enableAjaxValidation'=>false,
	'action'=>($model->isNewRecord) ? $this->createUrl('hangouts/novo') : $this->createUrl('hangouts/alterar', array('id'=>$model->idHangouts))
)); ?>

	<div class="clearfix">
		<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>
		<?php echo $form->errorSummary($model); ?>
	</div>	
	<div class="clearfix">
		<div class="pull-left" style="margin-right: 15px;">
			<?php echo $form->textFieldRow($model,'titulo',array('class'=>'span4','maxlength'=>150)); ?>
		</div>
		<div class="pull-left" style="padding-top: 30px;">
			<?php echo $form->checkBoxRow($model,'acontecendo', array('value'=>'S', 'uncheckValue'=>'N')); ?>
		</div>
	</div>
	<div class="clearfix">
		<div class="pull-left" style="margin-right: 15px;">
			<?php echo $form->textFieldRow($model,'url',array('class'=>'span4','maxlength'=>150)); ?>
		</div>
		<div class="pull-left">
			<?php echo $form->textFieldRow($model,'youtube',array('class'=>'span4','maxlength'=>150)); ?>
		</div>
	</div>
	<div class="clearfix">
		<?php echo $form->datePickerRow($model,'dataHangout',array('class'=>'span4')); ?>
	
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Salvar' : 'Alterar',
				)); ?>
		</div>
	</div>
<?php $this->endWidget(); ?>
