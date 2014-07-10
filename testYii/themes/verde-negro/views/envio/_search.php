<?php
/* @var $this EnvioController */
/* @var $model Envio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Envio'); ?>
		<?php echo $form->textField($model,'ID_Envio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Empresa'); ?>
		<?php echo $form->textField($model,'Nombre_Empresa',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo_Envio'); ?>
		<?php echo $form->textField($model,'Costo_Envio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Detalles'); ?>
		<?php echo $form->textField($model,'Detalles',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->