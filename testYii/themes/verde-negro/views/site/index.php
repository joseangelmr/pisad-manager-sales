<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$productos  =new Producto;
	if(isset($_POST['Producto']))
		$productos->attributes=$_POST['Producto'];
?>
<h1>Bienvenidos a <b><?php echo CHtml::encode(Yii::app()->name); ?></b></h1>
<table>
	<tr>
		<td>
			<h4>Aproveche nuestras ofertas, aqui encontrara lo que busca<br>
				Los mejores productos al mejor precio!!</h4>
		</td>
		<td valign="middle">
			<div class="wide form">
			  <?php $form = $this->beginWidget('CActiveForm', array(
			      'id'=>'search-form',
			      'enableAjaxValidation'=>false,
			      'enableClientValidation'=>false,
			  )); ?>
			  <div class="row">
			      <?php echo $form->textField($productos,'Nombre_Producto')." ". CHtml::submitButton("Buscar"); ?>
			  </div>
			  <?php $this->endWidget(); ?>
			</div>
		</td>
	</tr>
</table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$productos->search(),
	'itemView'=>'_view',
)); ?>
