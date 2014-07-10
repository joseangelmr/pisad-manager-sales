<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrador-form',
	'enableAjaxValidation'=>true,
)); 
if ($model->isNewRecord==false) { 
		$model_persona=Persona::model()->findByPk($model->ID_Persona); 
		$model=Administrador::model()->findByPk($model->ID_Administrador); 
}
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model,$model_persona)); ?>

	<?php if ($model->isNewRecord==false) 
					echo $form->hiddenField($model,'ID_Persona');
				else
					echo $form->hiddenField($model,'ID_Persona',array('value'=>'1'));
	?>
	
	<?php if ($model->isNewRecord==false){
					echo $form->hiddenField($model_persona,'User');
				}
				else{
					?>
						<div class="row">
							<?php echo $form->labelEx($model_persona,'User'); ?>
							<?php echo $form->textField($model_persona,'User',array('size'=>50,'maxlength'=>50)); ?>
							<?php echo $form->error($model_persona,'User'); ?>
						</div>
					<?php
				}
	?>
	<div class="row">
		<?php echo $form->labelEx($model_persona,'Correo'); ?>
		<?php echo $form->textField($model_persona,'Correo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model_persona,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_persona,'Nombre'); ?>
		<?php echo $form->textField($model_persona,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model_persona,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_persona,'Telefono'); ?>
		<?php echo $form->textField($model_persona,'Telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model_persona,'Telefono'); ?>
	</div>

	<?php if ($model->isNewRecord==false){
					echo $form->hiddenField($model_persona,'Clave');
		?>
		<div class="row">
				<?php echo $form->labelEx($model_persona,'Nueva Clave'); ?>
				<?php echo $form->passwordField($model_persona,'nclave',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model_persona,'nclave'); ?>
		</div>
	<?php
	} else{
	?>
		<div class="row">
				<?php echo $form->labelEx($model_persona,'Clave'); ?>
				<?php echo $form->passwordField($model_persona,'Clave',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model_persona,'Clave'); ?>
		</div>
		<?php
	}
	?>

	<div class="row">
		<?php echo $form->hiddenField($model_persona,'tipo',array('value'=>'a')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->