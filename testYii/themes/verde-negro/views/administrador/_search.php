<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Administrador'); ?>
		<?php echo $form->textField($model,'ID_Administrador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Persona'); ?>
		<?php echo $form->textField($model,'ID_Persona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->