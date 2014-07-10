<div class="view">
	<table>
		<tr>
			<td colspan="3"><b><font size="2">Descripcion</font></b></td>
			<td><b><font size="1">Catidad</font></b></td>
			<td><b><font size="1">Precio Unit.</font></b></td>
			<td><b><font size="1">Precio Total</font></b></td>
			<td><b><font size="1">Editar</font></b></td>
		</tr>
		<tr><td colspan="7"><hr></td></tr>
		<?php
		for($i=0; $i<sizeof($rows); $i++){ 
			$ID_Producto = $rows[$i]['ID_Producto'];
			$connection=Yii::app()->db;
		  $sql="SELECT Nombre_Producto, Precio, Cantidad_Restante 
		  			FROM producto 
		  			WHERE ID_Producto = :ID_Producto";
		  $command = $connection->createCommand($sql);
		  $command->bindParam(":ID_Producto",$ID_Producto,PDO::PARAM_STR);
		  $dataReader=$command->query();          
		  $producto=$dataReader->readAll();
		?>
			<tr>	
				<td>
					<?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".$rows[$i]['ID_Producto'].".jpg", '', array("width"=>"80", "height"=>"80")); ?> 
				</td>
				<td>
					<?php if (Yii::app()->user->checkAccess("administrador")){ ?>
						<b><?php echo CHtml::encode($rows[$i]['ID_Producto']); ?>:</b>
						<?php echo CHtml::link(CHtml::encode($rows[$i]['ID_Producto']), array('view', 'id'=>$rows[$i]['ID_Producto'])); ?>
						<br />
					<? } ?>
				</td>
				<td><font size="4" face="monospace"><?php echo CHtml::link(CHtml::encode($producto[0]['Nombre_Producto']), array('producto/view', 'id'=>$ID_Producto)); ?></font><br /></td>
				<td><b><font size="1"><?php echo $rows[$i]['Cantidad_Individual'] ?></font></b><br /></td>
				<td><b><font size="1"><?php echo $producto[0]['Precio'].' Bs.F' ?></font></b><br /></td>
				<td><b><font size="1"><?php echo ($producto[0]['Precio']*$rows[$i]['Cantidad_Individual']).' Bs.F' ?></font></b><br /></td>
				<td><?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/img/edit.png", '', array("width"=>"20", "height"=>"20")), array('editar', 'id'=>$ID_Producto, 'ctd'=>$rows[$i]['Cantidad_Individual'])); ?> </td>
			</tr>
		<?php	} ?>
		<tr><td colspan="6"><hr></td></tr>
		<tr><td colspan="5"><b><font size="2">Total:</font></b></td><td colspan=""><b><font size="2"><?php echo $costo_total.' Bs.F' ?></font></b></td></tr>
	</table>
</div>
