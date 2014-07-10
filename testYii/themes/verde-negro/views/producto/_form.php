<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Producto'); ?>
		<?php echo $form->textField($model,'Nombre_Producto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Inicial'); ?>
		<?php echo $form->textField($model,'Cantidad_Inicial'); ?>
		<?php echo $form->error($model,'Cantidad_Inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Restante'); ?>
		<?php echo $form->textField($model,'Cantidad_Restante'); ?>
		<?php echo $form->error($model,'Cantidad_Restante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Peso'); ?>
		<?php echo $form->textField($model,'Peso'); ?>
		<?php echo $form->error($model,'Peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
		<?php echo $form->error($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tamano'); ?>
		<?php echo $form->textField($model,'Tamano'); ?>
		<?php echo $form->error($model,'Tamano'); ?>
	</div>

	<div class="row">
    <?php echo $form->labelEx($model,'imagen'); ?>
    <?php echo CHtml::activeFileField($model, 'imagen'); ?>  
    <?php echo $form->error($model,'imagen'); ?>
	</div>
	<?php if ($model->isNewRecord==false){ ?>
		<div class="row">
		     <?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".$model->ID_Producto.".jpg", '', array("width"=>"150", "height"=>"150"))?> 
		</div>
	<? } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->