<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
	'action'=>($model->isNewRecord) ? $this->createUrl('usuario/novo') : $this->createUrl('usuario/alterar', array('id'=>$model->idUsuario))
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>		
	<?php 
		echo $form->errorSummary($model); 
		
		$perfis = CHtml::listData(Perfil::model()->findAll(), 'idPerfil', 'nome');
		echo $form->dropDownListRow($model,'idPerfil', $perfis, array('class'=>'span4','prompt'=>'Selecione'));
	?>	
	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span4','maxlength'=>150)); ?>
	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4','maxlength'=>150)); ?>
	
	<?php if($model->isNewRecord):?>
		<?php echo $form->textFieldRow($model,'senha',array('class'=>'span4','maxlength'=>35)); ?>
	<?php endif;?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Salvar' : 'Alterar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
