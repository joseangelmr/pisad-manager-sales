<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->ID_Factura,
);
if (Yii::app()->user->checkAccess("administrador")){ 
	$this->menu=array(
		array('label'=>'List Factura', 'url'=>array('index')),
		array('label'=>'Create Factura', 'url'=>array('create')),
		array('label'=>'Update Factura', 'url'=>array('update', 'id'=>$model->ID_Factura)),
		array('label'=>'Delete Factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Factura),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Factura', 'url'=>array('admin')),
	);
}
if (Yii::app()->user->checkAccess("usuario")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//usuario/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//usuario/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Ver Carrito de Compra', 'url'=>array('/carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito)),
	array('label'=>'Historial de Compras', 'url'=>array('/factura')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}
?>


<h1>Factura #<?php echo $model->ID_Factura; ?></h1>

<?php 
$connection=Yii::app()->db;
	$id_persona = Yii::app()->user->id;
	$sql="SELECT User, Nombre, Telefono, Correo
  			FROM persona
  			WHERE ID_Persona = $id_persona";
  $command = $connection->createCommand($sql);
  $dataReader=$command->query();          
  $rows=$dataReader->readAll();
  //print_r($rows); ?>
  
  <table>
  	<tr>
  		<td><?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/kiosko.png", '', array("width"=>"80", "height"=>"80")); ?> </td>
  		<td><h2>KioskoExpress</h2></td>
  		<td><h5>fecha de compra: <br><?php echo $model->Fecha_Factura?></h5></td>
  	</tr>
  </table>
  <table>
  	<tr><td><font size="2"><b>Cliente:</b> <?php echo $rows[0]['Nombre'] ?></font></td><td><font size="2"><b>User:</b> <?php echo $rows[0]['User'] ?></font></td></tr>
  	<tr><td><font size="2"><b>Email:</b> <?php echo $rows[0]['Correo'] ?></font></td><td><font size="2"><b>Telefono:</b> <?php echo $rows[0]['Telefono'] ?></font></td></tr>
  	<tr><td><font size="1"><b>ID Carrito:</b> <?php echo $model->ID_Carrito ?></font></td></tr>
  </table>
<?php
if (Yii::app()->user->checkAccess("administrador")){ 
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'ID_Factura',
			'Monto',
			'Impuesto',
			'Fecha_Factura',
			'ID_Pago',
			'ID_Carrito',
			'ID_Usuario',
		),
	)); 
}

	$ID_Carrito = Yii::app()->user->getState('model_carrito')->ID_Carrito;
  $sql="SELECT ID_Producto, Cantidad_Individual
  			FROM carrito, selecciona 
  			WHERE carrito.ID_Carrito = selecciona.ID_Carrito and selecciona.ID_Carrito= $model->ID_Carrito";
  $command = $connection->createCommand($sql);
  $dataReader=$command->query();          
  $rows=$dataReader->readAll();
  //print_r($rows);
  
  echo $this->renderPartial('_view_factura', array('rows'=>$rows, 'costo_total'=>$model->Monto, 'ID_Carrito'=>$model->ID_Carrito));
?>

<div align="center"><?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/pagado.jpg", '', array("width"=>"150", "height"=>"70")); ?></div>