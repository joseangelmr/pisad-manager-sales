<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'soportetecnico-form',
	'enableAjaxValidation'=>true,)); 
	
	if ($model->isNewRecord==false) { 
		$model=SoporteTecnico::model()->findByPk($model->ID_Pregunta); 
	}
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>	

	<div class="row">
		<?php echo $form->labelEx($model,'Pregunta'); ?>
		<?php echo $form->textArea($model,'Pregunta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Pregunta'); ?>
	</div>

	<?php if ($model->isNewRecord==true){
		echo $form->hiddenField($model,'Respuesta');
	}
	else{
		?>
		<div class="row">
			<?php echo $form->labelEx($model,'Respuesta'); ?>
			<?php echo $form->textArea($model,'Respuesta',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'Respuesta'); ?>
		</div>
		<?php
	}
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar Pregunta' : 'Enviar Respuesta'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
